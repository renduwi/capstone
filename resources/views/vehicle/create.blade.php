@extends ('layouts.app')

@section('content')
<h3 class="text-center">Add vehicle</h3>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{!! Form::open(['action'=> 'VehicleController@store', 'method' => 'POST']) !!}

    <div class="container">
        <div class="form-row">
            <div class="col-lg-3">
                <div class="col-lg-6">
                        <div class="radio">
                            <div class="form-group">
                                {!! Form::radio('type', 'Car', ['id' => 'car']) !!}
                                {!! Form::label('radio1', 'Car') !!}
                            </br>
                                {!! Form::radio('type', 'Motorcycle', ['id' => 'motorcycle']) !!}
                                {!! Form::label('radio2', 'Motorcycle') !!}
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    {{Form::label('platenum', 'Plate number')}}
                    {{Form::text('platenum', '', ['class' => 'form-control', 'placeholder' => 'Vehicle Plate number'])}}
                    <small id="emailHelp" class="form-text text-muted">We'll never share your vehicle plate number with anyone else.</small>
                </div>
                <div class="col">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name your vehicle'])}}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="form-row">
                <div class="col">
                        {{Form::label('brand', 'Brand')}}
                        {{Form::text('brand', '', ['class' => 'form-control', 'placeholder' => 'e.g, Toyota'])}}
                    <small id="emailHelp" class="form-text text-muted">Lorem ipsum dolor sit amet consectetur.</small>
                </div>
                <div class="col">
                        {{Form::label('model', 'Model')}}
                        {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Brand'])}}
                </div>
            </div>
            <div class="container">
                    <div class="form-group">
                        <div class="col">
                                {{Form::label('color', 'Color : ')}}
                                {{Form::select('color', array('White' => 'White',
                                 'Silver' => 'Silver',
                                 'Black' => 'Black',
                                 'Grey' => 'Grey',
                                 'Blue' => 'Blue',
                                 'Red' => 'Red',
                                 'Brown' => 'Brown',
                                 'Green' => 'Green',
                                 'Blue' => 'Blue',
                                 ))}}
                        </div>
        </div>
                      
                        
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}   
{!! Form::close() !!}
@endsection