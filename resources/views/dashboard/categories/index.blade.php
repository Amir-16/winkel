@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Category Name</th>
                <th>Link </th>
                <th>Soft_delete </th>
                <th>Is_draft </th>
            </tr>

            @foreach($categories as $key => $category)
                <tr>
                    <td> {{$categories->firstItem()+$key}} </td>
                    <td> {{$category->name}} </td>
                    <td> {{$category->link}} </td>
                    <td> {{$category->soft_delete}} </td>
                    <td> {{$category->is_draft}} </td>
                    <td>
                        <a href="{{url("categories/$category->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("categories/$category->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("categories/$category->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$categories->links()}}
    </div>
@endsection


