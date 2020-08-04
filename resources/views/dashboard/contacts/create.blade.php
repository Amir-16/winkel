@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Contact Name </strong> </div>
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
                {!! Form::open(array('url'=>'contacts','method'=>'POST')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('name', "Contact Name")}}
                    {{Form::text('name', null, ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Contact Name'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('email', "Email")}}
                    {{Form::text('email', null, ['class'=>'form-control','id' => 'email','required', 'placeholder'=>'email'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('subject', "subject")}}
                    {{Form::text('subject', null, ['class'=>'form-control','id' => 'subject','required', 'placeholder'=>'subject'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('comment', "Comment")}}
                    {{Form::text('comment', null, ['class'=>'form-control','id' => 'comment','required', 'placeholder'=>'comment'])}}
                </div>
                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('status', "Is_draft")}}
                        {{Form::text('status', null, ['class'=>'form-control','id' => 'status','required', 'placeholder'=>'status'])}}
                    </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('soft_delete', "Soft_delete")}}
                    {{Form::text('soft_delete', null, ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'Soft_delete'])}}
                </div>

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('date', "date")}}
                    {{Form::text('date', null, ['class'=>'form-control','id' => 'date','required', 'placeholder'=>'date'])}}
                </div>


                {{Form::submit('Add Contact',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')



