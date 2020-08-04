@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Admin Name </strong> </div>
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
                {!! Form::open(array('url' => "admins/$admin->id",'method' => 'PUT')) !!}

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('name', "Admin Name")}}
                        {{Form::text('name', old('name')?old('name'): (!empty($admin) ? $admin->name : null),
                        ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Admin Name'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('email', "Email")}}
                        {{Form::text('email', old('email')?old('email'): (!empty($admin) ? $admin->email : null),
                        ['class'=>'form-control','id' => 'email','required', 'placeholder'=>'email'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('password', "password")}}
                        {{Form::text('password', old('password')?old('password'): (!empty($admin) ? $admin->password : null),
                        ['class'=>'form-control','id' => 'password','required', 'placeholder'=>'password'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('phone', "phone")}}
                        {{Form::text('phone', old('phone')?old('phone'): (!empty($admin) ? $admin->phone : null),
                        ['class'=>'form-control','id' => 'phone','required', 'placeholder'=>'phone'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "Soft_delete")}}
                        {{Form::text('soft_delete', old('soft_delete')?old('soft_delete'): (!empty($admin) ? $admin->soft_delete : null),
                        ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'soft_delete'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_draft', "Admin Name")}}
                        {{Form::text('is_draft', old('is_draft')?old('is_draft'): (!empty($admin) ? $admin->is_draft : null),
                        ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>

                    {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
