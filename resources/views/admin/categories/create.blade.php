@extends('admin.layouts.master')

@section('content')
    @include('partial.form-errors')
    <h3 class="p-b-2">افزودن دسته جدید</h3>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {!! Form::open(['method' => 'POST', 'action' => 'Admin\AdminCategoryController@store']) !!}
            <div class="form-group">
                {!! Form::label('title','عنوان:') !!}
                {!! Form::text('title', null ,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('slug','نام مستعار:') !!}
                {!! Form::text('slug', null ,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('meta_description','توضیحات متا:') !!}
                {!! Form::textarea('meta_description', null , ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('meta_keywords','کلمات کلیدی:') !!}
                {!! Form::textarea('meta_keywords', null , ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-radius btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection