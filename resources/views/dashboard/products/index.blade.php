@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <table class="table table-hover table-dark">
            <tr>
                <th> Serial </th>
                <th>brand_id</th>
                <th>lebel_id</th>
                <th>title </th>
                <th>picture </th>
                <th>short_description</th>
                <th>description</th>
                <th>total_sales </th>
                <th>products_types</th>
                <th>is_new</th>
                <th>cost</th>
                <th>mrp</th>
                <th>special_price</th>
                <th>soft_delete</th>
                <th>is_draft</th>
                <th>is_active</th>
                <th>Actions</th>
            </tr>

            @foreach($products as $key => $product)
                <tr>
                    <td> {{$products->firstItem()+$key}} </td>
                    <td> {{$product->brand_id}} </td>
                    <td> {{$product->lebel_id}} </td>
                    <td> {{$product->title}} </td>
                    <td> {{$product->picture}} </td>
                    <td> {{$product->short_description}} </td>
                    <td> {{$product->description}} </td>
                    <td> {{$product->total_sales}} </td>
                    <td> {{$product->product_tpye}} </td>
                    <td> {{$product->is_new}} </td>
                    <td> {{$product->cost}} </td>
                    <td> {{$product->mrp}} </td>
                    <td> {{$product->special_price}} </td>
                    <td> {{$product->soft_delte}} </td>
                    <td> {{$product->is_draft}} </td>
                    <td> {{$product->is_active}} </td>
                    <td>

                        <a href="{{url("products/$product->id")}}">
                            <button type="button" class="btn btn-success">show</button></a>
                        <a href="{{url("products/$product->id/edit")}}">
                            <button type="button" class="btn btn-primary">edit</button> </a>
                        <a href="{{url("products/$product->id/delete")}}">
                            <button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$products->links()}}
    </div>
@endsection


