{{--@extends('frontend.layouts.app')--}}

{{--@section('title', app_name() . ' | '.__('navs.general.home'))--}}

{{--@section('content')--}}
    {{--<div class="row mb-4">--}}
        {{--<div class="col">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<i class="fas fa-home"></i> {{ __('navs.general.home') }}--}}
                {{--</div>--}}
                {{--<div class="card-body">--}}
                    {{--{{ __('strings.frontend.welcome_to', ['place' => app_name()]) }}--}}
                {{--</div>--}}
            {{--</div><!--card-->--}}
        {{--</div><!--col-->--}}
    {{--</div><!--row-->--}}

    {{--<div class="row mb-4">--}}
        {{--<div class="col">--}}
            {{--<example-component></example-component>--}}
        {{--</div><!--col-->--}}
    {{--</div><!--row-->--}}

    {{--<div class="row">--}}
        {{--<div class="col">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<i class="fab fa-font-awesome-flag"></i> Font Awesome {{ __('strings.frontend.test') }}--}}
                {{--</div>--}}
                {{--<div class="card-body">--}}
                    {{--<i class="fas fa-home"></i>--}}
                    {{--<i class="fab fa-facebook"></i>--}}
                    {{--<i class="fab fa-twitter"></i>--}}
                    {{--<i class="fab fa-pinterest"></i>--}}
                {{--</div><!--card-body-->--}}
            {{--</div><!--card-->--}}
        {{--</div><!--col-->--}}
    {{--</div><!--row-->--}}
{{--@endsection--}}
        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PhD Club - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')}}" rel='stylesheet' type='text/css'>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic')}}" rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/creative.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PhD Club</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>A Strong Networking Site For PhD Holders</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">If you are a PhD holder, this is the perfect place for you to join. Hundreds of people are waiting to know your story.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">We've got what you need!</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">We are a community of hundred thousand people who are willing to take our society to the next level. And that only can be possible if we can work together. And what is more better than collaborating with the best minds in the country.</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="/register">Get Started!</a>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="/login">Log in</a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Features of PhD Club</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Study Materials</h3>
                    <p class="text-muted mb-0"> Get the best Thesis paper around the country.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Ready to Work</h3>
                    <p class="text-muted mb-0">Find your next research partner.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Up to Date</h3>
                    <p class="text-muted mb-0">Get the best upto date knowledge base.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Made with Love</h3>
                    <p class="text-muted mb-0">We put our passion to make this true. Now it's your turn.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section class="bg-dark text-white">--}}
    {{--<div class="container text-center">--}}
        {{--<h2 class="mb-4">Free Download at Start Bootstrap!</h2>--}}
        {{--<a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5">Need to know more about us. Reach to us through below medium</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com">info@phdclub.net</a>
                </p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                {{--<i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>--}}
                <i class="fa fa-square-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="/contact">Contact Form</a>
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Bootstrap core JavaScript -->

<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


<!-- Plugin JavaScript -->
<script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollreveal.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>


<!-- Custom scripts for this template -->
<script type="text/javascript" src="{{ asset('js/creative.min.js') }}"></script>


</body>

</html>
