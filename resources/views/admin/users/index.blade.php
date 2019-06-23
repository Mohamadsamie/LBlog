@extends('admin.layouts.master')

@section('content')
    <h3 class="p-b-2">لیست کاربران</h3>
    <table class="table table-hover bg-content">
        <thead>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
            <th>وضعیت</th>
            <th>تاریخ عضویت</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <ul class="list-unstyled">
                            @foreach($user->roles as $role)
                                <li>{{$role->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    @if($user->status == 0)
                        <td><span class="tag tag-pill tag-danger">غیرفعال</span></td>
                        @else
                        <td><span class="tag tag-pill tag-success">فعال</span></td>
                    @endif
                    <td>{{Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection