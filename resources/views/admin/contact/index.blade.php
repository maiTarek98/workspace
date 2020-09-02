@extends('admin/layout/main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <!-- DataTables -->
    <section class="content-header">
      <h1>عرض بيانات المتصلين </h1>
      <ol class="breadcrumb">
        <li><a href="{{Url('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            @include('admin.layout.includes.massage') 
          <!-- /.box-header -->
          <div class="box-body">
             <table id="example3" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th class="text-center"> اسم الشركه</th>
                  <th class="text-center"> نوع النشاط  </th>
                  <th class="text-center">  رقم التواصل</th>
                  <th class="text-center">  البريد الاليكتروني  </th>
                  <th class="text-center"> نوع الخدمه  </th>
                  <th class="text-center">  نوع الصوره   </th>
                  <th class="text-center">  عدد الصور  </th>
                  <th class="text-center">  نوع الخلفيه   </th>
                  <th class="text-center">   الصور  </th>
                  <th class="text-center"> أنشأ في</th>
                  <th class="text-center">الحذف</th>
                </tr>
              </thead>
            </tbody>
            <tbody>
              @php $count = 1; @endphp
              @foreach($users as $data)
              <tr>
                <td class="text-center ex3">{{$count}}</td>
                <td class="text-center ex3"> {{ $data->companyName}}</td>
                <td class="text-center ex3"> {{ $data->activityType }}</td>
                <td class="text-center ex3"> {{ $data->tel }}</td>
                <td class="text-center ex3"> {{ $data->email }}</td>
                <td class="text-center ex3"> {{ $data->servicesType }}</td>
                <td class="text-center ex3"> {{ $data->type1 }}</td>
                <td class="text-center ex3"> {{ $data->type2 }}</td>
                <td class="text-center ex3"> {{ $data->type3 }}</td>
                <td class="text-center ex3">
                 <img class="img-responsive" style="width:100px;height:70px;" src="/PhotoMaker/images/{{ $data->file }}" alt="type of hagama">
            </td>     
                <td class="text-center ex3"> {{ $data->created_at }}</td>
                <td class="text-center ex3">
                  <form method="post" action="{{url('admin/contact/'.$data->id)}}">
                  {{csrf_field()}}
                <a class="btn btn-danger fa fa-trash-o"data-id="{{$data->id}}" data-toggle="modal" data-target="#delete-data{{$data->id}}"></a>
                <!-- Modal -->
                <div class="modal modal-danger fade" id="delete-data{{$data->id}}" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                         <h4 class="modal-title text-center" id="exampleModalLabel">Approve Delete</h4>
                      </div>
                    
                      <div class="modal-body">
                        <h3 class="text-center ">
                           Do You Want to Delete  :  {{ $data->companyName }} ? </h3>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline"  data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="_method" value="delete">

                        <button class="btn btn-outline danger delete pull-right">Delete</button>
                            </form>   
                      </div>
                      
                    </div>
                  </div>
                </div>

            </td>
            
            </tr>
            @php $count ++; @endphp
            @endforeach
          </tbody>
        </table>
       
        </div><!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop