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
                {!! Form::open(array('url'=>'carts','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('sld', "Cart sld")}}
                    {{Form::text('sld', null, ['class'=>'form-control','id' => 'sld','required', 'placeholder'=>'Cart sld'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('product_id', "product_id")}}
                    {{Form::text('product_id', null, ['class'=>'form-control','id' => 'product_id','required', 'placeholder'=>'product_id'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('picture', "picture")}}
                    {{Form::text('picture', null, ['class'=>'form-control','id' => 'picture','required', 'placeholder'=>'picture'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('product_title', "product_title")}}
                    {{Form::text('product_title', null, ['class'=>'form-control','id' => 'product_title','required', 'placeholder'=>'product_title'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('qty', "qty")}}
                    {{Form::text('qty', null, ['class'=>'form-control','id' => 'qty','required', 'placeholder'=>'qty'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('unit_price', "unit_price")}}
                    {{Form::text('unit_price', null, ['class'=>'form-control','id' => 'unit_price','required', 'placeholder'=>'unit_price'])}}
                </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('total_price', "Category total_price")}}
                        {{Form::text('total_price', null, ['class'=>'form-control','id' => 'total_price','required', 'placeholder'=>'Category total_price'])}}
                    </div>


                {{Form::submit('Add Cart',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')



