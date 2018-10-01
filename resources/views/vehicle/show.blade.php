@extends('layouts.app')

@section('content')

    <div class="table table-strip">
            {!!$vehicle->name!!}
    </div>
    <a href="/vehicle/{{$vehicle->Veid}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['VehicleController@destroy', $vehicle->Veid], 'method' =>'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection