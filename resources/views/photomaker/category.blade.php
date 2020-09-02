@extends('photomaker/layout/main')

@section('content')


<div class="fixed-bg">
<img src="{{asset('PhotoMaker/images/1.jpg')}}">
</div>


<div class="main-content">
    <div class="container-fluid">
        <h1 class="main-heading">اسم القسم</h1>

        <div class="row">
            @foreach($users as $data)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <a class="fancybox-buttons img-holder small-img" rel="gallery" title="" data-fancybox-group="button" href="{{asset('/images/'. $data->sectionImgs )}}">
                <img class="img-responsive" src="/images/{{ $data->sectionImgs }}" alt="type of category name">
                </a>
            </div>
            @endforeach
        </div>

    </div>
</div>
<script type="text/javascript" src="{{asset('PhotoMaker/js/image-popup/source/jquery.fancybox.js?v=2.1.5')}}"></script>
<script type="text/javascript" src="{{asset('PhotoMaker/js/image-popup/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
<script>
    $(document).ready(function (){
        /*Button helper. Disable animations, hide close button, change title type and content*/

        $('.fancybox-buttons').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons	: {}
            },

            afterLoad : function() {
                this.title = '<a href="#" class="btn btn-fb btn-small"><i class="fa fa-facebook right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-tw btn-small"><i class="fa fa-twitter right-fa"></i> Share</a>' +
                        '<a href="#" class="btn btn-inst btn-small"><i class="fa fa-instagram right-fa"></i> Share</a>';
            }
        });


    });
</script>
 @stop