@extends('photomaker/layout/main')

@section('content')

<div class="fixed-bg">
    <img src="{{asset('PhotoMaker/images/1.jpg')}}">
</div>
<div class="main-content">
    <div class="container">
        <div class="div-small-padding">
            <h1 class="main-heading">عملائنا</h1>

            <div class="row">
                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn prev-pro margin"><span class="fa fa-angle-right"></span></a>
                </div>

                <div class="col-xs-8 col-sm-10 no-padding">
                    <div id="owl-demo-products" class="owl-carousel-clients">
                    @foreach($users as $data)
                        <div class="item">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="images/logo-1.jpg">
                            <img class="img-responsive" src="/PhotoMaker/images/{{ $data->imgs }}" alt="type of customers">
                            </a>
                        </div>   
                        @endforeach
                    
                    </div>
                </div>

                <div class="col-xs-2 col-sm-1 no-padding text-center">
                    <a class="owl-btn next-pro margin"><span class="fa fa-angle-left"></span></a>
                </div>
            </div>
        </div>

    </div>
</div>

@stop