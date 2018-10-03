@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<a href="/vehicle/show" class="btn btn-danger">
    <i class="material-icons md-18">add_alert</i>
</a>

{{-- @if(count($Serv) > 0)
<div class="table-responsive{-sm|-md|-lg|-xl}">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-center">ID</th>
            <th>Mechanic Name</th>
            <th>Situation</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicle as $veh)
        <tr>
            <td>{{$veh->Veid}}</td>
            <td>{{$veh->name}}</td>
            <td>{{$veh->brand}}</td>
            <td>{{$veh->model}}</td> --}}
@endsection