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
                {!! Form::open(array('url' => "labels/$label->id",'method' => 'PUT')) !!}

                <div class="form-group">
                    {{Form::label('title', "Label title")}}
                    {{Form::text('title', old('title')?old('title'): (!empty($label) ? $label->title : null),
                    ['class'=>'form-control','id' => 'title','required', 'placeholder'=>'title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('picture', 'picture')}}
                    {{Form::textarea('picture',
                        old('picture')?old('picture') : (!empty($label)?$label->picture : null),
                        ['class'=> 'form-control',
                        'id' => 'picture',
                        'placeholder'=>'picture',
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
