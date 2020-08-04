@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Field Name </th>
                <th> Data </th>
            </tr>
            <tr>
                <td> Cart Sld </td>
                <td> {{$cart->sld}} </td>
            </tr>
            <tr>
                <td>Product_id</td>
                <td> {{$cart->Product_id}} </td>
            </tr>
            <tr>
                <td> Picture</td>
                <td> {{$cart->picture}} </td>
            </tr>
            <tr>
                <td>Product_title</td>
                <td> {{$cart->product_title}} </td>
            </tr>
            <tr>
                <td> Qty</td>
                <td> {{$cart->qty}} </td>
            </tr>
            <tr>
                <td>Unit_price</td>
                <td> {{$cart->unit_price}} </td>
            </tr>
            <tr>
                <td>Total_price</td>
                <td> {{$cart->total_price}} </td>
            </tr>

        </table>
    </div>
@endsection

