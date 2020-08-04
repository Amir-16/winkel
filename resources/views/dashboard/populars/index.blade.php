@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Popular Name</th>
                <th>Link </th>
                <th>Is_active </th>
                <th>soft_delete</th>
                <th>is_draft</th>
                <th>Actions </th>
            </tr>

            @foreach($populars as $key => $popular)
                <tr>
                    <td> {{$populars->firstItem()+$key}} </td>
                    <td> {{$popular->name}} </td>
                    <td> {{$popular->link}} </td>
                    <td> {{$popular->is_active}} </td>
                    <td> {{$popular->soft_delete}} </td>
                    <td> {{$popular->is_draft}} </td>

                    <td>
                        <a href="{{url("populars/$popular->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("populars/$popular->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("populars/$popular->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        {{$populars->links()}}
    </div>
@endsection


