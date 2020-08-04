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
                    {!! Form::open(array('url'=>'brands','method'=>'POST')) !!}

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('name', "Brand Name")}}
                        {{Form::text('name', null, ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Brand Name'])}}
                    </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('aboutBrand', 'About Brand')}}
                        {{Form::textarea('aboutBrand', null, [
                        'class'=> 'form-control',
                        'id' => 'aboutBrand',
                        'placeholder'=>'Write something about the brand',
                        'rows' => '4'
                        ])}}
                    </div>
                    <button type="button" class="btn btn-warning">
                    {{Form::submit('Add Brand',['class'=>"btn btn-succes"])}}
                        {!! Form::close() !!}</button>

            </div>
        </div>
    </div>
    </form>


@endsection('content')

