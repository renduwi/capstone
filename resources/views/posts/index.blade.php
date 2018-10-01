@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <table id="table" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($post) > 0)
                    @foreach($post as $post)
                    <tr class="well">
                        <td><a href="/posts/{{$post->id}}"></td>
                        <td><a href="/posts/{{$post->title}}"</a></h3>
                    </div>
                    <small>Written on {{$post->created_at}}</small>
                    @endforeach
                    {{$posts->links()}}
                @else
                    <p>no post found</p>
                @endif

@endsection