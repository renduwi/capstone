@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container">
        <div class="row justify-content-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    @if(count($serv) > 0)
    <div class="table-responsive{-sm|-md|-lg|-xl}">
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Situation</th>
                <th>Date</th>
                <th>Vehicle</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
                @foreach($serv as $ser)
                <tr>
                    <td>{{$ser->situation}}</td>
                    <td>{{$ser->created_at}}</td>
                    <td>{{$ser->vehicle}}</td>
                    <td>{{$ser->status}}</td>
                </tr>
                @endforeach

@endsection