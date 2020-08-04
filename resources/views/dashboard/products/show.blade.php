@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-striped">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Product Name </td>
                <td> {{$product->name}} </td>
            </tr>
            <tr>
                <td> About Product</td>
                <td> {{$product->aboutProduct}} </td>
            </tr>
            <tr>
                <td> Actions </td>
                <td> Edit | Delete | Show </td>
            </tr>
        </table>
    </div>
@endsection
