@extends ('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container">
        <div class="row justify-content-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    @if(count($vehicle) > 0)
    <div class="table-responsive{-sm|-md|-lg|-xl}">
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Brand</th>
                <th class="text-right">Model</th>
                <th class="text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicle as $veh)
            <tr>
                <td>{{$veh->Veid}}</td>
                <td>{{$veh->name}}</td>
                <td>{{$veh->brand}}</td>
                <td>{{$veh->model}}</td>
                <td class="td-actions text-right">
                <a href="/vehicle/show" class="btn btn-success">
                    <i class="material-icons md-18">edit</i>
                </a>
                <a href="/vehicle/show" class="btn btn-danger">
                    <i class="material-icons md-18">delete_forever</i>
                </a>
                    </td>
            </tr>
            @endforeach
        </table>
        <tfoot class="full-width">
                <tr>
                  <th colspan="4">
                    <div class="ui right floated small primary labeled icon button">
                        <a href="/vehicle/create" class="btn btn-warning">Add Vehicle</a>
                    </div>
                    
        </tfoot>
    @endif
</div>
</div>
@endsection