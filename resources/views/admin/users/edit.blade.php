@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2">ویرایش اطلاعات {{$user->name}}</h3>
    <div class="row">
        <div class="col-md-3">
            <img src="{{$user->photo ? $user->photo->path : "http://www.placehold.it/400"}}" class="img-fluid">
        </div>
        <div class="col-md-9">
            @include('partial.form-errors')
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['Admin\AdminUserController@update', $user->id], 'files'=> true]) !!}
            <div class="form-group">
                {!! Form::label('name','نام و نام خانوادگی:') !!}
                {!! Form::text('name', null ,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email','ایمیل:') !!}
                {!! Form::text('email', null ,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('roles','نقش:') !!}
                {!! Form::select('roles[]', $roles, null , ['multiple'=>'multiple','class' =>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status','وضعیت:') !!}
                {!! Form::select('status', [0=>'غیرفعال', 1=>'فعال'] , null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('avatar','تصویر پروفایل:') !!}
                {!! Form::file('avatar', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','رمز عبور:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
                {{--{!! Form::password('password', null, ['class' => 'form-control']) !!}--}}
            </div>
            <div class="form-group">
                {!! Form::submit('ذخیره', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@endsection