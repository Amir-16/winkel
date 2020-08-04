@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>title</th>
                <th>picture </th>
                <th>Actions </th>
            </tr>

            @foreach($labels as $key => $label)
                <tr>
                    <td> {{$labels->firstItem()+$key}} </td>
                    <td> {{$label->title}} </td>
                    <td> {{$label->picture}} </td>
                    <td>
                        <a href="{{url("labels/$label->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("labels/$label->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("labels/$label->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$labels->links()}}
    </div>
@endsection


