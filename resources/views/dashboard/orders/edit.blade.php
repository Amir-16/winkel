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
                {!! Form::open(array('url' => "orders/$order->id",'method' => 'PUT')) !!}

                <div class="form-group">
                    {{Form::label('product_id', "Order product_id")}}
                    {{Form::text('product_id', old('product_id')?old('product_id'): (!empty($order) ? $order->product_id : null),
                    ['class'=>'form-control','id' => 'product_id','required', 'placeholder'=>'Order product_id'])}}
                </div>

                    <div class="form-group">
                        {{Form::label('qty', "Label qty")}}
                        {{Form::text('qty', old('qty')?old('qty'): (!empty($label) ? $label->qty : null),
                        ['class'=>'form-control','id' => 'qty','required', 'placeholder'=>'qty'])}}
                    </div>

                {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
