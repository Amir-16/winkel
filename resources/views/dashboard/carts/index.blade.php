@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>sld </th>
                <th>product_id </th>
                <th>picture</th>
                <th>product_title</th>
                <th>qty</th>
                <th>Unit_price</th>
                <th>Total_price</th>

                <th>Actions </th>
            </tr>

            @foreach($carts as $key => $cart)
                <tr>
                    <td> {{$carts->firstItem()+$key}} </td>
                    <td> {{$cart->sld}} </td>
                    <td> {{$cart->product_id}}</td>
                    <td> {{$cart->picture}} </td>
                    <td> {{$cart->product_title}} </td>
                    <td> {{$cart->qty}} </td>
                    <td> {{$cart->unit_price}} </td>
                    <td> {{$cart->total_price}}</td>
                    <td>
                        <a href="{{url("carts/$cart->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("carts/$cart->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("carts/$cart->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>

                    </td>
                </tr>
            @endforeach
        </table>
        {{$carts->links()}}
    </div>
@endsection



