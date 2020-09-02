@extends('photomaker/layout/main')

@section('content')

<div class="fixed-bg">
    <img src="{{asset('PhotoMaker/images/1.jpg')}}">
</div>

<div class="main-content">
    <div class="container-fluid">
        <h1 class="main-heading">أعمالنا</h1>

        <div class="row">

        @foreach($users as $data)
            <div class="col-xs-12 col-sm-6 col-md-4 no-padding">
                <a href="{{url('/category')}}" class="img-holder">                
    <img class="img-responsive" src="/images/{{ $data->imgs }}" alt="type of hagama">

                    <div class="hover-content">
                        <h1>اسم القسم</h1>
                    </div>
                </a>
            </div>
        @endforeach
            
        </div>

    </div>
</div>



@stop