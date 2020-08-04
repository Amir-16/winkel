@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Banner Name </strong> </div>
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
                {!! Form::open(array('url' => "banners/$banner->id",'method' => 'PUT')) !!}

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('name', "Banner Name")}}
                        {{Form::text('name', old('name')?old('name'): (!empty($banner) ? $banner->name : null),
                        ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Banner Name'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('email', "Email")}}
                        {{Form::text('email', old('email')?old('email'): (!empty($banner) ? $banner->email : null),
                        ['class'=>'form-control','id' => 'email','required', 'placeholder'=>'email'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('password', "password")}}
                        {{Form::text('password', old('password')?old('password'): (!empty($banner) ? $banner->password : null),
                        ['class'=>'form-control','id' => 'password','required', 'placeholder'=>'password'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('phone', "phone")}}
                        {{Form::text('phone', old('phone')?old('phone'): (!empty($banner) ? $banner->phone : null),
                        ['class'=>'form-control','id' => 'phone','required', 'placeholder'=>'phone'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "Soft_delete")}}
                        {{Form::text('soft_delete', old('soft_delete')?old('soft_delete'): (!empty($banner) ? $banner->soft_delete : null),
                        ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'soft_delete'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_draft', "Banner Name")}}
                        {{Form::text('is_draft', old('is_draft')?old('is_draft'): (!empty($banner) ? $banner->is_draft : null),
                        ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>

                    {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
