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
 <div class="container">
        {!! Form::open(['action'=> 'AdRepairShopController@store', 'method' => 'POST']) !!}
        @csrf
         <div class="form-group">
            {{Form::label('label1', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('label1', 'Email')}}
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
        </div>
        <div class="form-group">
                {{Form::label('label1', 'Password')}}
                {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div>
        <div class="form-group">
                {{Form::label('label1', 'Repair shop opens')}}
                {{Form::time('start_time', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('label1', 'Working Hours')}}
            {{Form::time('end_time', '', ['class' => 'form-control'])}}
    </div>
        {{Form::hidden('type', 'Repair Shop')}}
        <div id="map"><!-- Google Map Goes Here --></div>
        <div class="form-group">
            {{Form::label('label1', 'Lat')}}
            {{Form::hidden('lat', '', ['class' => 'form-control', 'id' => 'lat', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('label1', 'Lng')}}
            {{Form::hidden('lng', '', ['class' => 'form-control', 'id' => 'lng', 'placeholder' => ''])}}
        </div>
        <button class="btn btn-sm btn-danger">Register</button>
    {{Form::close()}}
    </div>
</div>

<script type="text/javascript">

    function initMap()

    {
        var myLatlng = new google.maps.LatLng(6.913594,122.061373);
        var mapOptions = 
        {
            zoom: 18,
            center: myLatlng,
            scrollwheel: false
        }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    // Place a draggable marker on the map
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        draggable:true
    });

    google.maps.event.addListener(marker,'position_changed', function()
    {
        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

        $('#lat').val(lat);
        $('#lng').val(lng);
    });
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwG2FvuLOl_rGjp4LHR6XSeLIG_ZjjJ0M&callback=initMap">
    </script>

<!-- NEEDED FOR GOOGLE MAPS TO WORK -->
<!-- AFTER A SUCCESSFULL FETCH, LOOKS FOR initMap FUNCTION THEN EXECUTE -->
</body>
</html>

@endsection
