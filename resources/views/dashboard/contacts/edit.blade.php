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
                {!! Form::open(array('url' => "contacts/$contact->id",'method' => 'PUT')) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('name', "Contact Name")}}
                    {{Form::text('name', old('name')?old('name'): (!empty($contact) ? $contact->name : null),
                    ['class'=>'form-control','id' => 'name','required', 'placeholder'=>'Contact Name'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('email', "Email")}}
                    {{Form::text('email', old('email')?old('email'): (!empty($contact) ? $contact->email : null),
                    ['class'=>'form-control','id' => 'email','required', 'placeholder'=>'email'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('subject', "subject")}}
                    {{Form::text('subject', old('subject')?old('subject'): (!empty($contact) ? $contact->subject : null),
                    ['class'=>'form-control','id' => 'subject','required', 'placeholder'=>'subject'])}}
                </div>
                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('comment', "comment")}}
                    {{Form::text('comment', old('comment')?old('comment'): (!empty($contact) ? $contact->comment : null),
                    ['class'=>'form-control','id' => 'comment','required', 'placeholder'=>'comment'])}}
                </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('status', "Status")}}
                        {{Form::text('status', old('status')?old('status'): (!empty($contact) ? $contact->status : null),
                        ['class'=>'form-control','id' => 'status','required', 'placeholder'=>'status'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "Soft_delete")}}
                        {{Form::text('soft_delete', old('soft_delete')?old('soft_delete'): (!empty($contact) ? $contact->soft_delete : null),
                        ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'soft_delete'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('date', "Contact Name")}}
                        {{Form::text('date', old('date')?old('date'): (!empty($contact) ? $contact->date : null),
                        ['class'=>'form-control','id' => 'date','required', 'placeholder'=>'date'])}}
                    </div>

                {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                {!! Form::close() !!}

            </div> <!-- end card-body card-block -->
        </div> <!-- card -->
    </div> <!-- end col-md-12 -->
@endsection('content')
