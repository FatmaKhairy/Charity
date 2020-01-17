@extends('layouts.app')
@section('nav')
<ul class="nav justify-content-end">
    <li class="nav-item active">
        <a class="nav-link" href="/" style="color: #e2e3e5">مطعم</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/voluntary" style="color: #e2e3e5">متطوع</a>
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
<<<<<<< HEAD
           <section class="content">
                <div class="row justify-content-right">
                    {{--first form --}}
                    <div class="col-md-6">
                         <div class="card">
                              <div class="card-header">التبرع بنفسك</div>
                               <div class="card-body">
                                      <form  action="" method="get" id="a">
                                    @csrf
                                    <div class="form-group row">
                                        <label  class="col-md-4 col-form-label text-md-right">المحافظه</label>
                                        <div class="col-md-6">
                                            <input   list="governorates"  class="form-control" name="governorate" value="{{old('governorate')}}" required  autofocus>
                                            <datalist id="Agovernorates">
                                                <option value="Internet Explorer">
                                                <option value="Firefox">
                                                <option value="Chrome">
                                                <option value="Opera">
                                                <option value="Safari">
                                            </datalist>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">الحي</label>
                                        <div class="col-md-6">
                                            <input  list="regions" class="form-control" name="region" value="{{old('region')}}" required  autofocus>
                                            <datalist id="Aregions">
                                                <option value="Internet Explorer">
                                                <option value="Firefox">
                                                <option value="Chrome">
                                                <option value="Opera">
                                                <option value="Safari">
                                            </datalist>
                                        </div>
=======
        <section class="content">
            <div class="row">
                <div class="col-md-2"></div>
                
                <div class="col-md-4">
                    <button type="button" id="mySelf" class="form-control btn btn-primary active">التبرع بنفسك </button>
                </div>
                <div class="col-md-4">
                    <button type="button"  id="notMe" class="form-control btn btn-info">التبرع بواسطه متطوع </button>
                </div>
            </div>
            <div class="row justify-content-right">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">التبرع باطعام</div>

                        <div class="card-body">
                            <form method="POST" action="">
                                @csrf
                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right">المحافظه</label>
                                    <div class="col-md-6">
                                        <input   list="governorates"  class="form-control" name="governorate" value="{{old('governorate')}}" required  autofocus placeholder="اختر المحافظه">
                                        <datalist id="governorates">
                                            <option value="Internet Explorer">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">الحي</label>
                                    <div class="col-md-6">
                                        <input  list="regions" class="form-control" name="region" value="{{old('region')}}" required  autofocus placeholder="اختر الحي">
                                        <datalist id="regions">
                                            <option value="Internet Explorer">
                                            <option value="Firefox">
                                            <option value="Chrome">
                                            <option value="Opera">
                                            <option value="Safari">
                                        </datalist>
>>>>>>> 2f5e63cf4413bb4a48914242b3e030b2a379d44e
                                    </div>
                                    <div class="form-group row" style="display: none" id="foodPlace">
                                        <label class="col-md-4 col-form-label text-md-right"> اماكن تواجد صندوق الطعام </label>
                                        <div class="col-md-6">
                                            <ul>
                                                  <li><data value="place1">Cherry Tomato</data></li>
                                                  <li><data value="place2">Beef Tomato</data></li>
                                                  <li><data value="place3">Snack Tomato</data></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <button type="submit" id="mySelf" class="form-control btn btn-primary disabled">التبرع بنفسك </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{--end first form --}}
                    {{--secend form --}}
                    <div class="col-md-6">
                         <div class="card">
                             <div class="card-header">التبرع بواسطه متطوع</div>
                             <div class="card-body">
                                        <form method="POST" action="">
                                        @csrf
                                        <div class="form-group row">
                                            <label  class="col-md-4 col-form-label text-md-right">المحافظه</label>
                                            <div class="col-md-6">
                                                <input   list="governorates"  class="form-control" name="governorate" value="{{old('governorate')}}" required  autofocus>
                                                <datalist id="governorates">
                                                    <option value="Internet Explorer">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right">الحي</label>
                                            <div class="col-md-6">
                                                <input  list="regions" class="form-control" name="region" value="{{old('region')}}" required  autofocus>
                                                <datalist id="regions">
                                                    <option value="Internet Explorer">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right">العنوان التفصيل </label>
                                            <div class="col-md-6">
                                                <textarea  class="form-control" name="street" required autofocus>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <button type="submit" class="form-control btn btn-info" id="send">{{ 'ارسال'}} </button>
                                            </div>
                                        </div>
                                    </form>
                                  </div>
                        </div>
                    </div>
                        {{--end sec form --}}
                </div>
            </div>
        </section>

    </div><!-- end of content wrapper -->

@endsection