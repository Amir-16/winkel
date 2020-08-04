@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Cart sld </strong> </div>
            <div class="card-body card-block">

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif

                @if(session('message'))
                    <div class="alert alert-success"> {{session('message')}}  </div>
                @endif
                {!! Form::open(array('url' => "carts/$cart->id",'method' => 'PUT')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('sld', "Cart sld")}}
                    {{Form::text('sld', old('sld')?old('sld'): (!empty($cart) ? $cart->sld : null),
                    ['class'=>'form-control','id' => 'sld','required', 'placeholder'=>'Cart sld'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('product_id', "product_id")}}
                    {{Form::text('product_id', old('product_id')?old('product_id'): (!empty($cart) ? $cart->product_id : null),
                    ['class'=>'form-control','id' => 'product_id','required', 'placeholder'=>'product_id'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('picture', "picture")}}
                    {{Form::text('picture', old('picture')?old('picture'): (!empty($cart) ? $cart->picture : null),
                    ['class'=>'form-control','id' => 'picture','required', 'placeholder'=>'picture'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('product_title', "product_title")}}
                    {{Form::text('product_title', old('product_title')?old('product_title'): (!empty($cart) ? $cart->product_title : null),
                    ['class'=>'form-control','id' => 'product_title','required', 'placeholder'=>'product_title'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('qty', "qty")}}
                    {{Form::text('qty', old('qty')?old('qty'): (!empty($cart) ? $cart->qty : null),
                    ['class'=>'form-control','id' => 'qty','required', 'placeholder'=>'qty'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('unit_price', "Cart sld")}}
                    {{Form::text('unit_price', old('unit_price')?old('unit_price'): (!empty($cart) ? $cart->unit_price : null),
                    ['class'=>'form-control','id' => 'unit_price','required', 'placeholder'=>'unit_price'])}}
                </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('total_price', "total_price")}}
                        {{Form::text('total_price', old('total_price')?old('total_price'): (!empty($admin) ? $admin->total_price : null),
                        ['class'=>'form-control','id' => 'total_price','required', 'placeholder'=>'total_price'])}}
                    </div>

                {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')

