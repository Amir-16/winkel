@extends('dashboard.layouts.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> <strong> Banner title </strong> </div>
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
                {!! Form::open(array('url'=>'banners','method'=>'POST', 'enctype'=>"multipart/form-data")) !!}

                <div class="p-3 mb-2 bg-light text-dark">
                    {{Form::label('title', "Banner title")}}
                    {{Form::text('title', null, ['class'=>'form-control','id' => 'title','required', 'placeholder'=>'Banner title'])}}
                </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('picture', "Upload Picture")}}
                        {{Form::file('picture', null, ['class'=>'form-control','id' => 'picture','required', 'placeholder'=>'picture'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('link', "link")}}
                        {{Form::text('link', null, ['class'=>'form-control','id' => 'link','required', 'placeholder'=>'link'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('promotional_message', "promotional_message")}}
                        {{Form::text('promotional_message', null, ['class'=>'form-control','id' => 'promotional_message','required', 'placeholder'=>'promotional_message'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('html_banner', "html_banner")}}
                        {{Form::text('html_banner', null, ['class'=>'form-control','id' => 'html_banner','required', 'placeholder'=>'html_banner'])}}
                    </div>

                    <div class="form-group">
                        <label for="Is_active">Is_Active</label>

                        <label for="yes">Yes</label>
                        {{Form::radio('is_active', "1",true,['id'=>'yes',"class"=>"form-group"])}}
                        <label for="no">No</label>
                        {{Form::radio('is_active',"0", false, ['id' => 'no',"class"=>"form-group"])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('is_draft', "Is_draft")}}
                        {{Form::text('is_draft', null, ['class'=>'form-control','id' => 'is_draft','required', 'placeholder'=>'is_draft'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('soft_delete', "Soft_delete")}}
                        {{Form::text('soft_delete', null, ['class'=>'form-control','id' => 'soft_delete','required', 'placeholder'=>'Soft_delete'])}}
                    </div>

                    <div class="p-3 mb-2 bg-light text-dark">
                        {{Form::label('max_display', "max_display")}}
                        {{Form::text('max_display', null, ['class'=>'form-control','id' => 'max_display','required', 'placeholder'=>'max_display'])}}
                    </div>


                    {{Form::submit('Add Banner',['class'=>"btn btn-succes"])}}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </form>


@endsection('content')

