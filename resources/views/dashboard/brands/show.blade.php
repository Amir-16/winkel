@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-striped">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Brand Name </td>
                <td> {{$brand->name}} </td>
            </tr>
            <tr>
                <td> About Brand</td>
                <td> {{$brand->aboutBrand}} </td>
            </tr>
           
        </table>
    </div>
@endsection