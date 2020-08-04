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
                {!! Form::open(array('url'=>'populars','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('name', "Popular Name")}}
                    {{Form::text('name', null, ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Popular Name'])}}
                </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('link', "link")}}
                        {{Form::text('link', null, ['class'=>'form-control','id' => 'link','required', 'placeholder'=>'link'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_active', "is_active")}}
                        {{Form::text('is_active', null, ['class'=>'form-control','id' => 'is_active','required', 'placeholder'=>'is_active'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "Soft_delete")}}
                        {{Form::text('soft_delete', null, ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'Soft_delete'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_draft', "Is_draft")}}
                        {{Form::text('is_draft', null, ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>


                {{Form::submit('Add Popular',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')

