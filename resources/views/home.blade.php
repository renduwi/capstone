@extends ('layouts.app')

@section('content')
<style>
    body, html {
      height: 100%;
    }
    
    .bg { 
      /* The image used */
      background-image: url("/img/login.jpg");
    
      /* Full height */
      height: 100%; 
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    
    
      padding-bottom: calc(10rem - 56px);
      background-position: center center;
      background-size: cover;
    }

    .wrapper {
    text-align: center;
    }

    .col-md-auto {
    position: absolute;
    top: 50%;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body class="bg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <div class="wrapper">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
            </div>
            <div class="col-md-auto">
                <a href="servicereq" class="btn btn-success font-weight-bold p-3 mb-2 bg-success text-white btn-lg">
                    GET MY LOCATION
                </br> <span class="material-icons">add_location</span>
                  </a>
            </div>
            <div class="col col-lg-4">
              
            </div>
          </div>
</body>
</html>

@endsection
