@extends('photomaker/layout/main')

@section('content')


<div id="owl-demo" class="owl-carousel owl-theme">

    @foreach($users as $data)
    <div class="item"><img class="img-responsive" style="width:100px;height:70px;" src="/images/{{ $data->slidePhoto }}" alt="type of hagama">
</div>

        @endforeach
</div>

<div class="hidden">
    <a class="btn owl-btn next"><span class="fa fa-angle-right"></span></a>
    <a class="btn owl-btn prev"><span class="fa fa-angle-left"></span></a>
</div>


  

@stop