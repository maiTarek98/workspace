@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>اضافه مقال جديد </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/contact')}}">التحكم فى الاخبار والمقالات </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
          <div class="box-header">
          </div>
          <!-- /.box-header -->
           <div class="box-body">
            <!-- form start -->
        <form action="{{url('admin/contact')}}"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div class="form-group @if($errors->has('companyName')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> عنوان المقال</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="companyName" value="{{old('companyName')}}" placeholder="عنوان  ">
                <strong class="help-block">{{ $errors->first('companyName') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('activityType')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> عنوان المقال</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="activityType" value="{{old('activityType')}}" placeholder="عنوان  ">
                <strong class="help-block">{{ $errors->first('activityType') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('tel')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> عنوان المقال</label>
              <div class="col-md-10">
              <input type="text" class="form-control" name="tel" value="{{old('tel')}}" placeholder="عنوان  ">
                <strong class="help-block">{{ $errors->first('tel') }}</strong> 
              </div>
           </div>
           <div class="form-group @if($errors->has('email')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label"> عنوان المقال</label>
              <div class="col-md-10">
              <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="عنوان  ">
                <strong class="help-block">{{ $errors->first('email') }}</strong> 
              </div>
           </div>
           <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="type1[]" value="type11">
                      تصوير فوتوغرافي
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="type1[]" value="type12">
                      تصوير فوتوغرافي
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="type1[]" value="type13">
                      تصوير فوتوغرافي
                    </label>
                  </div>
                </div>

           <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="servicesType[]" value="servicesType1">
                     أطعمه ومشروبات
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="servicesType[]" value="servicesType2">
                       أثاث

                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="servicesType[]" value="servicesType3"
                      >أشخاص
                    </label>
                  </div>
                </div>

                <div class="form-group">
                <label for="inputEmail3" class="col-md-2 control-label"> عنوان المقال</label>
                 <input type="number" name="type2">
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="type3[]" value="type31">
                       خلفيه مفرغه
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="type3[]" value="type32">
                       خلفيه مركبه
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="type3[]" value="type33">
                      تصوير بالشكل الطبيعي
                    </label>
                  </div>
                </div>
                <div class="form-group @if($errors->has('file')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">صوره العمل </label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="file">
                <strong class="help-block">{{ $errors->first('file') }}</strong> 
              </div>
           </div>
          <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                اضافه مقال جديد
              </button>
            </div>
          </div><!-- /.box-footer -->
        </form>
          </div><!-- /.box-body -->
          </div>
          </div>
          <!-- /.box-header -->
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 
 </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@stop
