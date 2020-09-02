@extends('photomaker/layout/main')

@section('content')


<div class="fixed-bg">
    <img src="{{asset('PhotoMaker/images/1.jpg')}}">
</div>

<div class="main-content">
    <div class="container">
        <h1 class="main-heading">خدماتنا</h1>
        @foreach($users as $data)
        <div class="border-bottom">
            <h1><strong> {{$data->postTitle}}</strong></h1>
            <p>{{$data->content}}</p>            
        </div>
        @endforeach


        

    </div>
</div>
   


  

@stop