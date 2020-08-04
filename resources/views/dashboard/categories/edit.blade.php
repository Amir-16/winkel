@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Category Name </strong> </div>
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
                {!! Form::open(array('url' => "categories/$category->id",'method' => 'PUT')) !!}

                <div class="form-group">
                    {{Form::label('name', "Category Name")}}
                    {{Form::text('name', old('name')?old('name'): (!empty($category) ? $category->name : null),
                    ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Category Name'])}}
                </div>

                    <div class="form-group">
                        {{Form::label('link', "Link")}}
                        {{Form::text('link', old('link')?old('link'): (!empty($category) ? $category->link : null),
                        ['class'=>'form-control','id' => 'link','required', 'placeholder'=>'link'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('soft_delete', "soft_delete")}}
                        {{Form::text('soft_delete', old('soft_delete')?old('soft_delete'): (!empty($category) ? $category->soft_delete : null),
                        ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'soft_delete'])}}

                    </div>

                    <div class="form-group">
                        {{Form::label('is_draft', "is_draft")}}
                        {{Form::text('is_draft', old('is_draf')?old('is_draft'): (!empty($is_draft) ? $category->is_draft : null),
                        ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>


                {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
