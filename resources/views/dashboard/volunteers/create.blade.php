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
    <section class="content">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">اضافه متطوع</div>
                    <div class="card-body">
                        <form method="post" action="{{route('dashboard.users.store')}}">
                            @csrf
                           <div class="form-group">
                               <label>الاسم</label>
                               <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                           </div>
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                            </div>
                            <div class="form-group">
                                <label>الباسورد</label>
                                <input type="password" name="password" class="form-control" value="{{old('password')}}" required>
                            </div>
                            <div class="form-group">
                                <button type="submit"  class=" btn btn-info"> اضافه</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
