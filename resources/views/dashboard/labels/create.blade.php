@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Label Name </strong> </div>
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
                {!! Form::open(array('url'=>'labels','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('title', "Label Title")}}
                    {{Form::text('title', null, ['class'=>'form-control','id' => 'title','required', 'placeholder'=>'Label title'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('picture', 'Picture')}}
                    {{Form::textarea('picture', null, [
                    'class'=> 'form-control',
                    'id' => 'picture',
                    'placeholder'=>'picture',
                    'rows' => '4'
                    ])}}
                </div>

                {{Form::submit('Add Label',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')




















')

