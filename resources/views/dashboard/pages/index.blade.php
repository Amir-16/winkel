@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Page title</th>
                <th>Description </th>
                <th>Link </th>
                <th>Actions </th>
            </tr>

            @foreach($pages as $key => $page)
                <tr>
                    <td> {{$pages->firstItem()+$key}} </td>
                    <td> {{$page->title}} </td>
                    <td> {{$page->description}} </td>
                    <td> {{$page->link}} </td>

                    <td>
                        <a href="{{url("pages/$page->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("pages/$page->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("pages/$page->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        {{$pages->links()}}
    </div>
@endsection


