@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Product Name </strong> </div>
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
                {!! Form::open(array('url' => "products/$product->id",'method' => 'PUT')) !!}

                <div class="form-group">
                    {{Form::label('name', "Product Name")}}
                    {{Form::text('name', old('name')?old('name'): (!empty($product) ? $product->name : null),
                    ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Product Name'])}}
                </div>

                    <div class="form-group">
                        {{Form::label('name', "Brand Name")}}
                        {{Form::text('name', null, ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Brand Name'])}}
                    </div>

                    <div class="form-group">
                    {{Form::label('aboutProduct', 'About Product')}}
                    {{Form::textarea('aboutProduct',
                        old('aboutProduct')?old('aboutProduct') : (!empty($product)?$product->aboutProduct : null),
                        ['class'=> 'form-control',
                        'id' => 'aboutProduct',
                        'placeholder'=>'Write something about the product',
                        'rows' => '4'
                        ]
                    )}}
                </div>

                {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}






            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
