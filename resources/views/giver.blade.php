@extends('layouts.app')
@section('nav')
    <ul class="nav justify-content-end">
        <li class="nav-item active">
            <a class="nav-link" href="/" style="color: whitesmoke"><h4> مطعم </h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard/donations" style="color:white"><h4> متطوع </h4></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/" style=" position: absolute; left: 15px;color: #778899"><h3>et<span>3</span>am</h3></a>
        </li>
    </ul>
    @endsection
@section('content')
    <div class="container">
        <section class="content-header">
            <ol class="breadcrumb">
               <h3> <li class="active" > مطعم </li></h3>
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
                                                <textarea   class="form-control" rows="2" cols="30" name="street_name" required>
                                                </textarea>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right">رقم الهاتف للتواصل </label>
                                                <div class="col-md-6">
                                                <input type="tel" class="form-control" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right">ساعه التبرع</label>
                                                <div class="col-md-6">
                                                <input  type="time"   min="09:00" max="18:00"  class="form-control" name="hour" required>
                                                    <small> ساعات التطوع من الساعه 9 صباحا الي 6 مساء</small>
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