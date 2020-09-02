@extends('photomaker/layout/main')

@section('content')

<div class="fixed-bg">
    <img src="{{asset('PhotoMaker/images/1.jpg')}}">
</div>

<div class="main-content">
    <div class="container">
        <h1 class="main-heading">تواصل معنا</h1>
        @include('admin.layout.includes.massage')

        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <form action="{{url('photomaker/contact')}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group @if($errors->has('companyName')) has-error @endif">
                        <input type="text" class="form-control" name="companyName" value="{{old('companyName')}}" placeholder="الاسم/الشركه  ">
                        <strong class="help-block">{{ $errors->first('companyName') }}</strong>
                    </div>
                    <div class="form-group @if($errors->has('activityType')) has-error @endif">
                        <input type="text" class="form-control" name="activityType" value="{{old('activityType')}}" placeholder="نوع النشاط  ">
                        <strong class="help-block">{{ $errors->first('activityType') }}</strong>
                    </div>
                    <div class="form-group @if($errors->has('tel')) has-error @endif">
                        <input type="text" class="form-control" name="tel" value="{{old('tel')}}" placeholder="رقم التواصل  ">
                        <strong class="help-block">{{ $errors->first('tel') }}</strong>
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="البريد الاليكتروني  ">
                        <strong class="help-block">{{ $errors->first('email') }}</strong>
                    </div>

                    <label>نوع الخدمة</label>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="box black-box margin-bottom">
                                <div class="main-label">
                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="type1[]" value="تصوير_فوتوغرافي">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير فوتوغرافي</span>
                                    </label>
                                </div>

                                <div class="check-open">

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="أطعمه_مشروبات">
                                        <span class="checkbox-icon"></span>
                                        <span>أطعمة ومشروبات</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="أثاث">
                                        <span class="checkbox-icon"></span>
                                        <span>أثاث</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="فنادق">
                                        <span class="checkbox-icon"></span>
                                        <span>فنادق</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="عقار">
                                        <span class="checkbox-icon"></span>
                                        <span>عقار</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="أجهزه_الكترونيه">
                                        <span class="checkbox-icon"></span>
                                        <span>أجهزه اليكترونيه</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="أشخاص">
                                        <span class="checkbox-icon"></span>
                                        <span>أشخاص</span>
                                    </label>
                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="servicesType[]" value="توثيق_مناسبات">
                                        <span class="checkbox-icon"></span>
                                        <span>توثيق مناسبات</span>
                                    </label>
                                    <label>عدد الصور</label>
                                    <input type="number" name="type2">

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="type3[]" value="خلفيه_مفرغه">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مفرغة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="type3[]" value="خلفيه_مركبه">
                                        <span class="checkbox-icon"></span>
                                        <span>خلفية مركبة</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="type3[]" value="تصوير_بالشكل_الطبيعي">
                                        <span class="checkbox-icon"></span>
                                        <span>تصوير بالشكل الطبيعي</span>
                                    </label>

                                    <label class="checkbox-holder">
                                        <input type="checkbox" name="type3[]" value="تصوير-ممثلين">
                                        <span class="checkbox-icon"></span>
                                        <span>الممثلين ( تصوير الأشخاص)</span>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>

                    <label>صوره العمل </label>
                    
                    <div class="form-group @if($errors->has('file')) has-error @endif">
                        <input type="file" class="form-control" name="file">
                        <strong class="help-block">{{ $errors->first('file') }}</strong>

                    </div>
                        <button type="submit" style="background: none;" class="btn btn-white btn-block" >
                            ارسال
                        </button>
                </form>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="box black-box text-center">
                    <h3 class="main-heading">تفاصيل الاتصال</h3>

                    <p><i class="fa fa-envelope-o right-fa"></i> Info@pmstu.com</p>
                    <p><i class="fa fa-phone right-fa"></i> 0123456789</p>
                </div>
                <div class="box black-box text-center">
                    <h3 class="main-heading">إشترك معنا</h3>

                    <form action="{{url('photomaker/contact')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group @if($errors->has('email')) has-error @endif">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="البريد الاليكتروني  ">
                        <strong class="help-block">{{ $errors->first('email') }}</strong>
                    </div>
                    <input type="submit" class="btn btn-white btn-block" value="إشترك معنا">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>



@stop