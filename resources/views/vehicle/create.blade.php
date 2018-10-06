@extends ('layouts.app')

@section('content')
<h3 class="text-center">Add vehicle</h3>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{!! Form::open(['action'=> 'VehicleController@store', 'method' => 'POST']) !!}

    <div class="container">
        <div class="form-row">
            <div class="col">
                 <div class="radio">
                    <div class="form-group">
                        {!! Form::radio('type', 'Car', ['id' => 'car']) !!}
                        {!! Form::label('radio1', 'Car') !!}
                    </br>
                        {!! Form::radio('type', 'Motorcycle', ['id' => 'motorcycle']) !!}
                        {!! Form::label('radio2', 'Motorcycle') !!}
                    </div>
                    <div class="col">
                            {!! Form::radio('transmission', 'Manual', ['id' => 'manual']) !!}
                            {!! Form::label('radio1', 'Manual') !!}
                    </br>
                            {!! Form::radio('transmission', 'Automatic', ['id' => 'automatic']) !!}
                            {!! Form::label('radio1', 'Automatic') !!}

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
                         <div class="col">
                        {{Form::label('manu_yr', ' Manufactured year : ')}}
                        {{Form::select('manu_yr', array('2018' => '2018',
                        '2017' => '2017',
                        '2016' => '2016',
                        '2015' => '2015',
                        '2014' => '2014',
                        '2013' => '2013',
                        '2012' => '2012',
                        '2011' => '2011',
                        '2010' => '2010',
                        '2009' => '2009',
                        '2008' => '2008',
                        '2007' => '2007',
                        '2006' => '2006',
                        '2005' => '2005',
                        '2004' => '2004',
                        '2003' => '2003',
                        '2002' => '2002',
                        '2001' => '2001',
                        '2000' => '2000',
                        '1999' => '1999',
                        '1998' => '1998',
                        '1997' => '1997',
                        '1996' => '1996',
                        '1995' => '1995',
                        '1994' => '1994',
                        '1993' => '1993',
                        '1992' => '1992',
                        '1991' => '1991',
                        '1990' => '1990',
                        ))}}
                    </div>
        </div>
                      
                        
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-lg'])}}   
{!! Form::close() !!}
@endsection