@extends ('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    @if(count($mechanics) > 0)
    <div class="table-responsive{-sm|-md|-lg|-xl}">
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Phonenum</th>

                {{-- <th class="text-right">Model</th>
                <th class="text-right">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($mechanics as $mechanic)
            <tr>
                <td>{{$mechanic->id}}</td>
                <td>{{$mechanic->lname}}, {{$mechanic->fname}}</td>
                <td>{{$mechanic->phonenum}}</td>
            </tr>
            @endforeach
        </table>
        <tfoot class="full-width">
                <tr>
                  <th colspan="4">
                    <div class="ui right floated small primary labeled icon button">
                        <a href="/mechaniclist/create" class="btn btn-warning">Add Mechanic</a>
                    </div>
                    
        </tfoot>
    @endif
</div>
@endsection