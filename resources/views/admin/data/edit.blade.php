@extends('admin/layout/main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<!-- DataTables -->
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>   المقال{{ $user->id }} تعديل 
           </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin/index')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
        <li><a href="{{Url('admin/gallery')}}"> التحكم فى الأعمال </a></li>
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
            <form method="post" action="{{url('admin/gallery/'.$user->id)}}">
            <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}

        
           <div class="form-group @if($errors->has('imgs')) has-error @endif">
              <label for="inputEmail3" class="col-md-2 control-label">صوره العمل </label>
              <div class="col-md-10">
              <input type="file" class="form-control" name="imgs" value="{{$user->imgs}}">
                <strong class="help-block">{{ $errors->first('imgs') }}</strong> 
              </div>
           </div>
           <div class="text2">
            <div class="col-md-12">
              <button type="submit" class="btn btn-warning">
                <li class="fa fa-globe" style="color: #ffffff"></li>
                تعديل الاعمال
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