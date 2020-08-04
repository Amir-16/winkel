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
                {!! Form::open(array('url'=>'admins','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('name', "Admin Name")}}
                    {{Form::text('name', null, ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Admin Name'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('email', "Email")}}
                    {{Form::text('email', null, ['class'=>'form-control','id' => 'email','required', 'placeholder'=>'email'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('password', "password")}}
                    {{Form::text('password', null, ['class'=>'form-control','id' => 'password','required', 'placeholder'=>'password'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('phone', "Phone")}}
                    {{Form::text('phone', null, ['class'=>'form-control','id' => 'phone','required', 'placeholder'=>'phone'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('soft_delete', "Soft_delete")}}
                    {{Form::text('soft_delete', null, ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'Soft_delete'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('is_draft', "Is_draft")}}
                    {{Form::text('is_draft', null, ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                </div>


                {{Form::submit('Add Admin',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')

