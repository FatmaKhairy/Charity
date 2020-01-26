@extends('layouts.app')
@section('nav')
    <ul class="nav justify-content-end">
        <li class="nav-item active">
            <a class="nav-link" href="/" style="color: #e2e3e5">مطعم</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard" style="color: #e2e3e5">متطوع</a>
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
        <section class="content-header">
            <ol class="breadcrumb">
               <h3> <li class="active"> مطعم </li></h3>
            </ol>
        </section>
           <section class="content">
                <div class="row justify-content-right">
                    {{--first form --}}
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-header">التبرع بنفسك</div>
                               <div class="card-body">
                                      <form >
                                    @csrf
                                    <div class="form-group row">
                                        <label  class="col-md-4 col-form-label text-md-right">المحافظه</label>
                                        <div class="col-md-6">
                                            <select  name="governorate_id" class="form-control " id="GovSelect" >
                                                <option value="" class="form-control"></option>
                                                @foreach($governs as $govern)
                                                    <option value="{{$govern->id}}"
                                                            data-gov="{{$govern->cities}}"
                                                            >
                                                        {{$govern->governorate_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">الحي</label>
                                        <div class="col-md-6">
                                            <select  name="city_id" class="form-control " id="options">

                                            </select>
                                        </div>
                                    </div>
                                    {{-- خرجنا الليست بوكسز بره الفورم--}}
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <button id="mySelf"  class="form-control btn btn-primary"
                                                    disabled="disabled"
                                                      data-url="/boxes"
                                                     data-method="get"
                                            >التبرع بنفسك
                                            </button>

                                        </div>
                                    </div>
                                </form>
                                   <div class="form-group row" style="display: none" id="foodPlace">
                                       <label> <h2> اماكن تواجد صندوق الطعام</h2>
                                       </label>
                                       <div class="col-md-6">
                                          <ul id="boxes">

                                          </ul>
                                       </div>
                                   </div>
                            </div>
                        </div>
                    </div>
                    {{--end first form --}}
                    {{--secend form --}}
                    <div class="col-md-6">
                         <div class="card">
                             <div class="card-header">التبرع بواسطه متطوع</div>
                             <div class="card-body">
{{--                                 @include('partials._errors')--}}
                                        <form method="POST" action="/donation">
                                        @csrf
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label text-md-right">المحافظه</label>
                                            <div class="col-md-6">
                                                <select name="governorate_name" class="form-control" id="secGovSelect" required>
                                                    <option value="" class="form-control"></option>
                                                    @foreach($governs as $govern)
                                                        <option value="{{$govern->id}}"   data-gov="{{$govern->cities}}"
                                                                class="form-control">
                                                            {{$govern->governorate_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right">الحي</label>
                                            <div class="col-md-6">
                                                <select name="city_name" class="form-control " id="secOptions" required>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right">العنوان التفصيل </label>
                                            <div class="col-md-6">
                                                <textarea  required class="form-control" name="street_name">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <input type="submit" class="form-control btn btn-info" value="{{ 'ارسال'}}">
                                            </div>
                                        </div>
                                    </form>
                                  </div>
                        </div>
                    </div>
                        {{--end sec form --}}
                </div>


        </section>

    </div><!-- end of content wrapper -->

@endsection