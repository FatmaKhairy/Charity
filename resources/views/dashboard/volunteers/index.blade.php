@extends('layouts.app')
@section('nav')
    <ul class="nav justify-content-end">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle btn" style="color: wheat"
               href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    {{"تسجيل الخروج"}}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/" style="color: #e2e3e5">التبرعات</a>
        </li>
        <li class="nav-item active">
            <button class="navbar-toggler" type="button" style=" position: absolute; left: 15px;"
                    data-toggle="collapse" data-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </li>
    </ul>
@endsection
@section('content')
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-md-12"><a href="{{route('dashboard.users.create')}}" class="btn btn-secondary"><i class="fa fa-plus"></i>اضافه متطوع</a></div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 80px">اسم المتطوع</th>
                    <th>الحاله</th>
                </tr>
                </thead>
                <tbody>
                @if($users->count() >1)
                @foreach($users as $index=>$user)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>
                            @if($user->name ==$admin)
                                <h2>super<b>Admin</b></h2>
                            @endif
                            @if(auth()->user()->hasPermission('delete-users') && $user->name !=$admin)
                                <form action="{{route('dashboard.users.destroy',$user->id)}}" style="display: inline-block" method="post">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger" style="color: wheat">حذف المتطوع</button>
                                </form>
                            @endif
                                @if(auth()->user()->hasPermission('update-users') && $user->name !=$admin)
                                        <a  href="{{route('dashboard.users.edit',$user->id)}}" class="btn btn-success" style="color: white">تحديث المتطوع</a>
                                @endif
                        </td>
                    </tr>
                @endforeach
                    @else
                    <h2>لايوجد متطوعين</h2>
                    @endif
                </tbody>
            </table>


{{--            <div class="clearfix">--}}
{{--                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
{{--                    <li class="page-item active"><a href="#" class="page-link">3</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">4</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link">5</a></li>--}}
{{--                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
