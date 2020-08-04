@extends('dashboard.layouts.master')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header"> <strong> Brand Name </strong> </div>
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
            {!! Form::open(array('url' => "brands/$brand->id",'method' => 'PUT')) !!}

                <div class="form-group">
                    {{Form::label('name', "Brand Name")}}
                    {{Form::text('name', old('name')?old('name'): (!empty($brand) ? $brand->name : null),
                    ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Brand Name'])}}
                </div>
                <div class="form-group">
                    {{Form::label('aboutBrand', 'About Brand')}}
                    {{Form::textarea('aboutBrand',
                        old('aboutBrand')?old('aboutBrand') : (!empty($brand)?$brand->aboutBrand : null),
                        ['class'=> 'form-control',
                        'id' => 'aboutBrand',
                        'placeholder'=>'Write something about the brand',
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
