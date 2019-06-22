@extends('admin.layouts.master')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
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
                    <td>{{Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection