@extends ('layouts.app(mechanic)')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Google Map!</title>

  <style type="text/css">
    div#map {
      /* REQUIRED TO ADD WIDTH AND HEIGHT, FOR GOOGLE MAP TO BE VISIBLE */
      width: 100%;
      height: 500px;
    }
  </style>

</head>
<body>
<div class="container">
  <div class="col-sm-4">
  </div>
</div>
<script type="text/javascript">

  function initMap()
  {
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(
        function(result){
          // IF GEOLOCATION IS SUCCESSFULL

          // GOOGLE MAP
          var map = new google.maps.Map(
            document.getElementById('map'),
            {
              zoom: 15, // GOOGLE MAP ZOOM LEVEL
              center: { // GOOGLE MAP CENTER 
                lat: result.coords.latitude, // GEOLOCATION RESULT LATITUDE
                lng: result.coords.longitude // GEOLOCATION RESULT LONGITUDE
              }
            })
           
          // GOOGLE MAP MARKER
          var marker = new google.maps.Marker(
            {
              position: { // GOOGLE MAP MARKER POSITION
               lat: result.coords.latitude, // GEOLOCATION RESULT LATITUDE
               lng: result.coords.longitude // GEOLOCATION RESULT LONGITUDE
              }, 
              map: map,
              draggable: true // GOOGLE MAP WHERE THE MARKER IS TO BE ADDED
            })
            //var myLatlng = new google.maps.LatLng(marker, 'position');
            google.maps.event.addListener(marker,'position_changed', function()
            {
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lat').val(lat);
                $('#lng').val(lng);
            });
        },
        function(error){
          // IF GEOLOCATION IS UNSUCCESSFULL
          alert("Ooops! Something went wrong.")
        }
      )
    }else{
      alert("Ooops! Browser doesn't support Geolocation.")
    }
  }
</script>

<!-- NEEDED FOR GOOGLE MAPS TO WORK -->
<!-- AFTER A SUCCESSFULL FETCH, LOOKS FOR initMap FUNCTION THEN EXECUTE -->

<div id="map"><!-- Google Map Goes Here --></div>

<div class="container">
                        <div class="form-group">
                                {!! Form::open(['action'=> 'ListMechanicController@store', 'method' => 'POST']) !!}
                                {{Form::label('na', 'nsm')}}
                                {{Form::text('ln', '', ['class' => 'form-control', 'placeholder' => 'Last name'])}}
                                {{Form::text('fn', '', ['class' => 'form-control', 'placeholder' => 'First name'])}}
                                {{Form::text('mi', '', ['class' => 'form-control', 'placeholder' => 'Middle initial'])}}
                      
                                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                            
                             
                                {{Form::password('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
                         
                         
                            <div class="form-group">
                                {{Form::label('number', 'Contact number')}}                                
                                {{Form::text('phonenum', '', ['class' => 'form-control', 'placeholder' => 'Enter valid contact number'])}}
                            </div>
                            <div class="form-group">
                            {{Form::text('Rpid', '', ['class' => 'form-control', 'placeholder' => 'Rpid'])}}
                            </div>

                           
                            {{Form::hidden('lat', '', ['class' => 'form-control', 'id' => 'lat', 'placeholder' => ''])}}
                            {{Form::hidden('lng', '', ['class' => 'form-control', 'id' => 'lng', 'placeholder' => ''])}}
                            {{Form::hidden('type', 'Mechanic', ['class' => 'form-control', 'placeholder' => ''])}}
                            
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                            {!! Form::close() !!}

</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwG2FvuLOl_rGjp4LHR6XSeLIG_ZjjJ0M&callback=initMap" type="text/javascript"></script>
</body>
</html> 
@endsection