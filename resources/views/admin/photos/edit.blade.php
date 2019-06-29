@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2">ویرایش مطلب</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{$post->photo ? $post->photo->path : "http://www.placehold.it/400"}}" class="img-fluid">
        </div>
        <div class="col-md-9">
            @include('partial.form-errors')
            {!! Form::model($post , ['method' => 'PATCH', 'action' => ['Admin\AdminPostController@update', $post->id], 'files'=> true]) !!}
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
                {!! Form::select('category', $category , $post->category->id, ['class' => 'form-control']) !!}
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
                {!! Form::select('status', [0=>'پیش نویس', 1=>'منتشر شده'] , null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('بروزرسانی', ['class' => 'btn btn-radius btn-success']) !!}
            </div>
            {!! Form::close() !!}

            {{--Delete Form--}}
            {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminPostController@destroy', $post->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('حذف', ['class' => 'btn btn-radius btn-danger']) !!}
                </div>
            {!! Form::close() !!}
            {{--Delete Form--}}
        </div>
    </div>



@endsection