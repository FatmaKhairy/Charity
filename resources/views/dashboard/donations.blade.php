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
            <a class="nav-link" href="{{route('dashboard.volunteer')}}" style="color: #e2e3e5">الصفحه الشخصيه</a>
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
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 style="font-weight:bold;color: #85144b;font-size:30px;float: right">التبرعات</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <form class="form-group" style="display: inline-block">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input  class="form-control" name="search-gov" value="">
                                            </div>
                                            <div class="col-md-4">
                                                <input  class=" form-control" name="search-city" value="">
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="btn btn-secondary  form-control" style="background-color: #85144b">ابحث</button>
                                            </div>
                                        </div>
                                        </form>

                                    </div>
                                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">المحافظه</th>
                    <th style="width: 20px">الحي</th>
                    <th style="width:200px">الشارع</th>
                    <th style="width:200px">التارخ</th>
                    <th style="width:250px">الحاله</th>
                </tr>
                </thead>
                <tbody>
           @foreach($donations as $index=>$donation)
                  <tr>
                      <td>{{$index+1}}</td>
                       <td>{{$donation->governorate_name}}</td>
                       <td>{{$donation->city_name}}</td>
                       <td>{{$donation->street_name}}</td>
                       <td>{{$donation->created_at}}</td>
                       <td>
                         @if(auth()->user()->hasPermission('delete-donations'))
                          <form style="display: inline-block" action="{{route('dashboard.donations.destroy',$donation->id)}}" method="post">
                             {{csrf_field()}}
                              {{method_field('delete')}}
                              <button type="submit" class="btn btn-danger btn-sm">حذف التبرع</button>
                            </form>
                         @endif
                             @if(auth()->user()->hasPermission('update-donations'))
                             <a href="{{route('dashboard.donations.edit',$donation->id)}}" class="btn btn-success btn-sm" style="color: white"
                             > تعديل التبرع</a>
                             @endif
                             <form action="{{route('dashboard.volunteer')}}" method="get" style="display: inline-block">
                                 <button type="submit" class="btn btn-primary btn-sm">التطوع لوصول التبرع</button>
                             </form>
                       </td>
                            </tr>
            @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection