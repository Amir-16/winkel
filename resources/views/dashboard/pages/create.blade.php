@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> page title </strong> </div>
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
                {!! Form::open(array('url'=>'pages','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('title', "page title")}}
                    {{Form::text('title', null, ['class'=>'form-control','id' => 'title','required', 'placeholder'=>'page title'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('description', "description")}}
                    {{Form::text('description', null, ['class'=>'form-control','id' => 'description','required', 'placeholder'=>'description'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('link', "link")}}
                    {{Form::text('link', null, ['class'=>'form-control','id' => 'link','required', 'placeholder'=>'link'])}}
                </div>

                {{Form::submit('Add page',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')


