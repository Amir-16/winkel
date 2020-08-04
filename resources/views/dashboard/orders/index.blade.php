@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>Order Name</th>
                <th>About Order </th>
                <th>Actions </th>
            </tr>

            @foreach($orders as $key => $order)
                <tr>
                    <td> {{$orders->firstItem()+$key}} </td>
                    <td> {{$order->name}} </td>
                    <td> {{$order->aboutOrder}} </td>
                    <td>
                        <a href="{{url("orders/$order->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("orders/$order->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("orders/$order->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$orders->links()}}
    </div>
@endsection

