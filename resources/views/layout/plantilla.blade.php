<!DOCTYPE html>
<html lang="es-MX">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Veterinaria El Cachorro</title>

    <!--

    Breezed Template

    https://templatemo.com/tm-543-breezed

    -->
    <!-- Additional CSS Files -->
    @vite(["resources/js/app.js", "resources/css/app.scss"])

    <link rel="stylesheet" href="{{ asset('css/templatemo-breezed.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{asset('images/logo1.png')}}" alt="El Cachorro">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="/acerca">Acerca</a></li>
                        <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                        <li class="submenu">
                            <a href="javascript:">Drop Down</a>
                            <ul>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Features</a></li>
                                <li><a href="">FAQ's</a></li>
                                <li><a href="">Blog</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                        <li class="scroll-to-section"><a href="/auth/login">Ingresar</a></li>
                    </ul>
                    <div class="search-icon"><a href="#search"><i class="fa fa-search"></i></a></div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Search Area ***** -->
<div id="search">
    <button type="button" class="close">×</button>
    <form id="contact" action="#" method="get">
        <fieldset>
            <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
        </fieldset>
        <fieldset>
            <button type="submit" class="main-button">Search</button>
        </fieldset>
    </form>
</div>

@yield('content')

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="left-text-content">
                    <p>Copyright &copy; 2020 Breezed Co., Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com">TemplateMo</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><p>Follow Us</p></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa-brands fa-facebook-f"></i>
                            </a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa-brands fa-twitter"></i>
                            </a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa-brands fa-linkedin"></i>
                            </a></li>
                        <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa-brands fa-dribbble"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>



<!-- Plugins -->
<script src="{{asset('js/owl-carousel.js')}}"></script>
<script src="{{asset('js/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/imgfix.min.js')}}"></script>
<script src="{{asset('js/slick.js')}}"></script>
<script src="{{asset('js/lightbox.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('js/custom.js')}}"></script>

<script>

    $(function() {
        let selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>

</body>
</html>
