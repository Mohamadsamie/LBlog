@extends('admin.layouts.master')

@section('content')
    {{--@if(Session::has('delete_user'))--}}
        {{--<div class="alert alert-danger">--}}
            {{--<div>{{session('delete_user')}}</div>--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--@if(Session::has('add_user'))--}}
        {{--<div class="alert alert-success">--}}
            {{--<div>{{session('add_user')}}</div>--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--@if(Session::has('update_user'))--}}
        {{--<div class="alert alert-success">--}}
            {{--<div>{{session('update_user')}}</div>--}}
        {{--</div>--}}
    {{--@endif--}}
    <h3 class="p-b-2">لیست نوشته ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>تصویر</th>
            <th>عنوان</th>
            <th>توسط</th>
            <th>توضیحات</th>
            <th>دسته بندی</th>
            <th>وضعیت</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td><img class="img-rounded" src="{{$post->photo ? $post->photo->path : "http://placehold.it/400*400"}}" width="80" alt="تصویر نمایه"></td>
                    <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{str_limit($post->description , 100)}}</td>
                    <td>{{$post->category->title}}</td>
                    @if($post->status == 0)
                        <td><span class="tag tag-pill tag-danger">منتشر نشده</span></td>
                        @else
                        <td><span class="tag tag-pill tag-success">منتشر شده</span></td>
                    @endif
                    <td>{{Hekmatinasser\Verta\Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection