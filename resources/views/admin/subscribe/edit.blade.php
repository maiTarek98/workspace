@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>   المقال{{ $user->postTitle }} تعديل 
           </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/services')}}"> التحكم فى المدن </a></li>
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
            <form method="post" action="{{url('admin/services/'.$user->id)}}">
            <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}

        <div class="form-group @if($errors->has('postTitle')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">عنوان</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="postTitle" value="{{$user->postTitle}}" placeholder="عنوان">
                <strong class="help-block">{{ $errors->first('postTitle') }}</strong>
              </div>  
           </div>
           <div class="form-group @if($errors->has('content')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">محتوي المقال  </label>
              <div class="col-md-10">
                <textarea class="form-control" name="content" placeholder="محتوي المقال " rows="6">{{$user->content}}</textarea>
                <strong class="help-block">{{ $errors->first('content') }}</strong>
              </div>  
           </div>
    
           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                تعديل المقال
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