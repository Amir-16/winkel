@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Order product_id </strong> </div>
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
                {!! Form::open(array('url'=>'orders','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('product_id', "Product_id")}}
                    {{Form::text('product_id', null, ['class'=>'form-control','id' => 'product_id','required', 'placeholder'=>'product_id'])}}
                </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('qty', "qty")}}
                        {{Form::text('qty', null, ['class'=>'form-control','id' => 'qty','required', 'placeholder'=>'qty'])}}
                    </div>


                    <button type="button" class="btn btn-warning">
                    {{Form::submit('Add Order',['class'=>"btn btn-succes"])}}
                    {!! Form::close() !!}</button>

            </div>
        </div>
    </div>
    </form>


@endsection('content')

