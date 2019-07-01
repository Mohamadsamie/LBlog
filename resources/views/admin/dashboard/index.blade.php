@extends('admin.layouts.master')

@section('content')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-success">
                    <div class="card-block p-b-0">
                        {{--<div class="btn-group pull-left">--}}
                            {{--<button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="icon-settings"></i>--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                {{--<a class="dropdown-item" href="#">Action</a>--}}
                                {{--<a class="dropdown-item" href="#">Another action</a>--}}
                                {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <h4 class="m-b-0">{{$photosCount}}</h4>
                        <p>رسانه</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart1" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-info">
                    <div class="card-block p-b-0">
                        {{--<button type="button" class="btn btn-transparent active p-a-0 pull-left">--}}
                            {{--<i class="icon-location-pin"></i>--}}
                        {{--</button>--}}
                        <h4 class="m-b-0">{{$usersCount}}</h4>
                        <p>کاربر</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart2" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-warning">
                    <div class="card-block p-b-0">
                        {{--<div class="btn-group pull-left">--}}
                            {{--<button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="icon-settings"></i>--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                {{--<a class="dropdown-item" href="#">Action</a>--}}
                                {{--<a class="dropdown-item" href="#">Another action</a>--}}
                                {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <h4 class="m-b-0">{{$postsCount}}</h4>
                        <p>مطلب</p>
                    </div>
                    <div class="chart-wrapper" style="height:70px;">
                        <canvas id="card-chart3" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card card-inverse card-danger">
                    <div class="card-block p-b-0">
                        {{--<div class="btn-group pull-left">--}}
                            {{--<button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--<i class="icon-settings"></i>--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                {{--<a class="dropdown-item" href="#">Action</a>--}}
                                {{--<a class="dropdown-item" href="#">Another action</a>--}}
                                {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <h4 class="m-b-0">{{$categoriesCount}}</h4>
                        <p>دسته بندی</p>
                    </div>
                    <div class="chart-wrapper p-x-1" style="height:70px;">
                        <canvas id="card-chart4" class="chart" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!--/col-->

        </div>
        <!--/row-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover bg-content">
                <h6>آخرین مطالب</h6>
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->title}}</td>
                        <td>{{Hekmatinasser\Verta\Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="col-md-6">
            <table class="table table-hover bg-content">
                <h6>آخرین کاربران</h6>
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection