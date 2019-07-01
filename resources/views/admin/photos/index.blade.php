@extends('admin.layouts.master')

@section('content')
    @if(Session::has('delete_photo'))
        <div class="alert alert-danger">
            <div>{{session('delete_photo')}}</div>
        </div>
    @endif
    <h3 class="p-b-2">لیست رسانه ها</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>تصویر</th>
            <th>توسط</th>
            <th>تاریخ ایجاد</th>
            <th>عملیات</th>
        </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td><img class="img-rounded" src="{{$photo->path ? $photo->path : "http://www.placehold.it/400"}}" width="80" alt="تصویر"></td>
                    <td>{{$photo->user->name}}</td>
                    <td>{{Hekmatinasser\Verta\Verta::instance($photo->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                    <td>
                        {{--Delete Form--}}
                        {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminPhotoController@destroy', $photo->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('حذف', ['class' => 'btn btn-radius btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                        {{--Delete Form--}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

        <div class="col-md-12 paginate-center">{{$photos->links()}}</div>



@endsection