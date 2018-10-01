@extends('layouts.app(mechanic)')

@section('content')

{{-- @if($notif->count() > 0)
    <div class="table-responsive{-sm|-md|-lg|-xl}">
        <table class="table table-striped">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Situation</th>
                <th>Action</th>
                <th class="text-right">Model</th>
                <th class="text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notif as $servs)
            <tr>
                <td>{{$servs->Sid}}</td>
                <td>{{$servs->situation}}</td>             
                <td class="td-actions text-right">
                <a href="" class="btn btn-danger">View location</a>
                <a href="/vehicle/show" class="btn btn-danger">Done</a>
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
@endsection --}}

@endsection