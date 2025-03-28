<!DOCTYPE html>
<html lang="en">
<head style="color: #1c7430">
    <title>laravel</title>
    @include('home.css')
</head>

<body>

<!--==========================
  Header
============================-->
@include('home.header')
<!--==========================
  Intro Section
============================-->
<section>
    <img src="img/intro-bg.jpg" alt="intro">
    <div class="intro-container wow fadeIn">

        <p class="mb-4 pb-0">Nairobi, Kenya</p>

        <a href=""
           data-autoplay="true"></a>

    </div>
</section>

<main id="main">

    <!--==========================
      About Section
    ============================-->


    <!--==========================
      Speakers Section
    ============================-->

    <!--==========================
      Schedule Section
    ============================-->
    @include('home.event')

    @include('home.about')

    <!--==========================
      Venue Section
    ============================-->
    @include('home.venue')

    <!--==========================
      Hotels Section
    ============================-->

    <!--==========================
      Gallery Section
    ============================-->
    @include('home.gallery')
    <!--==========================
      Sponsors Section
    ============================-->


    <!--==========================
      F.A.Q Section
    ============================-->
    @include('home.faq')

    <!--==========================
      Buy Ticket Section
    ============================-->

    <!--==========================
      Contact Section
    ============================-->
    @include('home.contact')

</main>


<!--==========================
  Footer
============================-->
@include('home.footer')

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset("lib/jquery/jquery.min.js")}}"></script>
<script src="{{asset("lib/jquery/jquery-migrate.min.js")}}"></script>
<script src="{{asset("lib/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("lib/easing/easing.min.js")}}"></script>
<script src="{{asset("lib/superfish/hoverIntent.js")}}"></script>
<script src="{{asset("lib/superfish/superfish.min.js")}}"></script>
<script src="{{asset("lib/wow/wow.min.js")}}"></script>
<script src="{{asset("lib/venobox/venobox.min.js")}}"></script>
<script src="{{asset("lib/owlcarousel/owl.carousel.min.js")}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset("contactform/contactform.js")}}"></script>

<!-- Template Main Javascript File -->
<script src="{{asset("js/main.js")}}"></script>
</body>

</html>
