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
            <a class="nav-link" href="{{route('dashboard.volunteer.index')}}" style="color: #e2e3e5">الصفحه الشخصيه</a>
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
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>التبرعات <b>{{$donations->total()}}</b></h2></div>
{{--                    <div class="col-sm-4">--}}
{{--                        <div class="search-box">--}}
{{--                            <form action="{{route('dashboard.donations')}}" method="get" class="form-group" style="display: inline-block">--}}
{{--                                <div>--}}
{{--                                    <select name="governorate_id" class="form-control" id="secGovSelect" required>--}}
{{--                                        <option value="" class="form-control"></option>--}}
{{--                                        @foreach($govs as $govern)--}}
{{--                                            <option value="{{$govern->id}}"   data-gov="{{$govern->cities}}" class="form-control">--}}
{{--                                                {{$govern->governorate_name}}--}}
{{--                                            </option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <select name="city_id" class="form-control " id="secOptions" required> </select>--}}
{{--                                </div>--}}
{{--                                <div style="width: 100px">--}}
{{--                                    <button type="submit" class="btn btn-secondary  form-control" style="background-color: #85144b">ابحث</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 20px">المحافظه</th>
                    <th style="width: 30px">الحي</th>
                    <th style="width: 200px">الشارع</th>
                    <th style="width: 50px">الهاتف</th>
                    <th style="width: 20px">الوقت</th>
                    <th style="width: 150px">التارخ</th>
                    <th style="width: 200px">الحاله</th>
                </tr>
                </thead>
                <tbody>
                @if($donations->count() >0)
                @foreach($donations as $index=>$donation)
                  <tr>
                      <td>{{$index+1}}</td>
                       <td>{{$donation->governorate_name}}</td>
                       <td>{{$donation->city_name}}</td>
                       <td>{{$donation->street_name}}</td>
                      <td>{{$donation->phone}}</td>
                      <td>{{$donation->hour}}</td>
                       <td>{{$donation->created_at}}</td>
                       <td>
                         @if(auth()->user()->hasPermission('delete-donations'))
                          <form style="display: inline-block" action="{{route('dashboard.donations.destroy',$donation->id)}}" method="post">
                             {{csrf_field()}}
                              {{method_field('delete')}}
                              <button type="submit" class="btn btn-danger btn-sm" >حذف التبرع</button>
                            </form>
                         @endif
                             <button class="btn btn-outline-success btn-sm takeDon"
                                  data-user="{{$user}}"
                                  data-donation="{{$donation}}"
                                  data-url="volunteerAddDon"
                                  data-method="get"
                                 >التطوع لوصول التبرع</button>
                       </td>
                            </tr>
            @endforeach
                    @else
                    <tr>
                        <td colspan="8"><h2>لا يوجد اي تبرع حاليا </h2></td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        {{$donations->appends(request()->query())->links()}}
    </div>
@endsection