@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Brand Name</th>
                <th>About Brand </th>
                <th>Actions </th>
            </tr>

            @foreach($brands as $key => $brand)
                <tr>
                    <td> {{$brands->firstItem()+$key}} </td>
                    <td> {{$brand->name}} </td>
                    <td> {{$brand->aboutBrand}} </td>
                    <td>
                        <a href="{{url("brands/$brand->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("brands/$brand->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("brands/$brand->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$brands->links()}}
    </div>
@endsection

