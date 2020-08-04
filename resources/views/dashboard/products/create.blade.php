@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Product details </strong> </div>
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
                {!! Form::open(array('url'=>'products','method'=>'POST')) !!}

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('brand_id', "Product brand_id")}}
                        {{Form::text('brand_id', null, ['class'=>'form-control','id' => 'brand_id','required', 'placeholder'=>'Product brand_id'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('lebel_id', "Lebel_Id")}}
                        {{Form::text('lebel_id', null, ['class'=>'form-control','id' => 'lebel_id','required', 'placeholder'=>'lebel_id'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('title', "Product title")}}
                        {{Form::text('title', null, ['class'=>'form-control','id' => 'title','required', 'placeholder'=>'Product title'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('picture', "Product picture")}}
                        {{Form::text('picture', null, ['class'=>'form-control','id' => 'picture','required', 'placeholder'=>'Product picture'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('short_description', "Product Short_Description")}}
                        {{Form::text('short_description', null, ['class'=>'form-control','id' => 'short_description','required', 'placeholder'=>'product short_description'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('description', 'About Product')}}
                        {{Form::textarea('description', null, [
                        'class'=> 'form-control',
                        'id' => 'description',
                        'placeholder'=>'Write something about the product',
                        'rows' => '4'
                        ])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('total_sales', "Product Total_Sales")}}
                        {{Form::text('total_sales', null, ['class'=>'form-control','id' => 'total_sales','required', 'placeholder'=>'Product total_sales'])}}
                    </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('product_type', "Product_type")}}
                    {{Form::text('product_type', null, ['class'=>'form-control','id' => 'product_type','required', 'placeholder'=>'product_type'])}}
                </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_new', "Is_new")}}
                        {{Form::text('is_new', null, ['class'=>'form-control','id' => 'is_new','required', 'placeholder'=>'is_new'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('cost', " Product cost")}}
                        {{Form::text('cost', null, ['class'=>'form-control','id' => 'cost','required', 'placeholder'=>'cost'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('mrp', "MRP")}}
                        {{Form::text('mrp', null, ['class'=>'form-control','id' => 'mrp','required', 'placeholder'=>'mrp'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('special_price', "Special_price")}}
                        {{Form::text('special_price', null, ['class'=>'form-control','id' => 'special_price','required', 'placeholder'=>'special_price'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "soft_delete")}}
                        {{Form::text('soft_delete', null, ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'soft_delete'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_draft', "Is_draft")}}
                        {{Form::text('is_draft', null, ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_active', "is_active")}}
                        {{Form::text('is_active', null, ['class'=>'form-control','id' => 'is_active','required', 'placeholder'=>'is_active'])}}
                    </div>


                {{Form::submit('Add Product',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')

