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
            <a class="nav-link" href="{{route('dashboard.users.index')}}" style="color: #e2e3e5">المتطوعون</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/" style=" position: absolute; left: 15px;color: #778899"><h3>et<span>3</span>am</h3></a>
        </li>

    </ul>
@endsection
@section('content')
    <section class="content">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">تحديث متطوع</div>
                    <div class="card-body">
                        <form  action="{{route('dashboard.users.update',$user->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <div class="form-group">
                                <label>الاسم</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                            </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit"  class=" btn btn-info"> تعديل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection