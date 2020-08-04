@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Popular Name </strong> </div>
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
                {!! Form::open(array('url' => "populars/$popular->id",'method' => 'PUT')) !!}

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('name', "Popular Name")}}
                        {{Form::text('name', old('name')?old('name'): (!empty($popular) ? $popular->name : null),
                        ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Popular Name'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('email', "Email")}}
                        {{Form::text('email', old('email')?old('email'): (!empty($popular) ? $popular->email : null),
                        ['class'=>'form-control','id' => 'email','required', 'placeholder'=>'email'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('password', "password")}}
                        {{Form::text('password', old('password')?old('password'): (!empty($popular) ? $popular->password : null),
                        ['class'=>'form-control','id' => 'password','required', 'placeholder'=>'password'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('phone', "phone")}}
                        {{Form::text('phone', old('phone')?old('phone'): (!empty($popular) ? $popular->phone : null),
                        ['class'=>'form-control','id' => 'phone','required', 'placeholder'=>'phone'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "Soft_delete")}}
                        {{Form::text('soft_delete', old('soft_delete')?old('soft_delete'): (!empty($popular) ? $popular->soft_delete : null),
                        ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'soft_delete'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_draft', "Popular Name")}}
                        {{Form::text('is_draft', old('is_draft')?old('is_draft'): (!empty($popular) ? $popular->is_draft : null),
                        ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>

                    {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
