@extends('dashboard.layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Page title </strong> </div>
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
                {!! Form::open(array('url' => "pages/$page->id",'method' => 'PUT')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('title', "Page title")}}
                    {{Form::text('title', old('title')?old('title'): (!empty($page) ? $page->title : null),
                    ['class'=>'form-control','id' => 'title','required', 'placeholder'=>'Page title'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('description', "description")}}
                    {{Form::text('description', old('description')?old('description'): (!empty($page) ? $page->description : null),
                    ['class'=>'form-control','id' => 'description','required', 'placeholder'=>'description'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('link', "link")}}
                    {{Form::text('link', old('link')?old('link'): (!empty($page) ? $page->link : null),
                    ['class'=>'form-control','id' => 'link','required', 'placeholder'=>'link'])}}
                </div>

                {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
