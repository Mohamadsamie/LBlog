@extends('admin.layouts.master')

@section('content')
    @include('partial.form-errors')
    <h3 class="p-b-2">افزودن مطلب جدید</h3>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            {!! Form::open(['method' => 'POST', 'action' => 'Admin\AdminPostController@store', 'files'=> true]) !!}
            <div class="form-group">
                {!! Form::label('title','عنوان:') !!}
                {!! Form::text('title', null ,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('slug','نام مستعار:') !!}
                {!! Form::text('slug', null ,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category','دسته بندی:') !!}
                {!! Form::select('category', $category ,null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','توضیحات:') !!}
                {!! Form::textarea('description', null , ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('meta_description','توضیحات متا:') !!}
                {!! Form::textarea('meta_description', null , ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('featured_image','تصویر شاخص:') !!}
                {!! Form::file('featured_image', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('meta_keywords','کلمات کلیدی:') !!}
                {!! Form::textarea('meta_keywords', null , ['class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status','وضعیت:') !!}
                {!! Form::select('status', [0=>'پیش نویس', 1=>'منتشر شده'] , 0, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@endsection