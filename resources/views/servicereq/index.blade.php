@extends ('layouts.app')

@section ('content')

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
<h5 id="mapdragger" class="form-text text-primary">In order for the mechanic to find you easily, please drag the pin to your current and EXACT location.</h5>
<medium id="mapdragger" class="form-text text-strong">* We suggest you use Satellite.</medium>

<div id="map"><!-- Google Map Goes Here --></div>

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
              zoom: 18, // GOOGLE MAP ZOOM LEVEL
              scrollwheel: false,
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwG2FvuLOl_rGjp4LHR6XSeLIG_ZjjJ0M&callback=initMap" type="text/javascript"></script>

{!! Form::open(['action'=> 'ServiceReqController@store', 'method' => 'POST']) !!}
      
      {{Form::hidden('lat', '', ['class' => 'form-control', 'id' => 'lat', 'placeholder' => ''])}}
      {{Form::hidden('lng', '', ['class' => 'form-control', 'id' => 'lng', 'placeholder' => ''])}}
        <div class="container">
          <div class="row">
          <div class="col">
            <div class="radio">
                {{Form::label('name', 'What is the situation?')}}        
            </br>
                {!! Form::radio('situation', 'Tire is flat', ['id' => '1']) !!}
                {!! Form::label('radio1', 'Tire is flat') !!}
            </br>
                {!! Form::radio('situation', 'The tire blew out', ['id' => '1']) !!}
                {!! Form::label('radio1', 'The tire blew out') !!}
            </br>
                {!! Form::radio('situation', 'Battery Problem', ['id' => '1']) !!}
                {!! Form::label('radio1', 'Battery Problem') !!}
            </br>
                {!! Form::radio('situation', 'The vehicle suddenly stopped and it wont start', ['id' => '1']) !!}
                {!! Form::label('radio1', 'The vehicle suddenly stopped and it wont start') !!}
            </br>
                {!! Form::radio('situation', 'Overheat', ['id' => '1']) !!}
                {!! Form::label('radio1', 'Overheat') !!}
                </br>
            </div>
        </div>
          <div class="col">
          <div class="radio">
              {{Form::label('name', 'Choose which vehicle')}}        
              </br>
            @if(count($serv) > 0)

            @foreach($serv as $ser)
                {{Form::radio('vehicle', $ser->model, 'false')}}
                {{Form::label($ser->model)}}

                
          </br>
            @endforeach
            @endif
          </div>
    </div>
  </div>
      <button class="btn btn-sm btn-danger">Register</button>
      {{Form::close()}}

</body>
</html>
@endsection