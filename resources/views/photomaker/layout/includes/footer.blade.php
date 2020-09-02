
<!--===============================
    FOOTER
===================================-->

<footer class="navbar-fixed-bottom text-center">
    <div class="container">

        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>

    </div>
</footer>


<!--===============================
    SCRIPT
===================================-->

<script src="{{asset('PhotoMaker/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('PhotoMaker/js/bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function (){
        $('.check-open').slideUp(0);

        $('.main-label .checkbox-holder').click(function (){
            if($(this).find('input').is(':checked')) {
                $(this).parents('.main-label').next('.check-open').stop().slideDown();
            } else {
                $(this).parents('.main-label').next('.check-open').stop().slideUp();
            }
        });
    });
</script>
<script src="{{asset('PhotoMaker/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('PhotoMaker/js/script.js')}}"></script>
</body>
</html>