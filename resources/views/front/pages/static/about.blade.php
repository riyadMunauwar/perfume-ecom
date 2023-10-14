<x-front.master-layout title="About Us">

    <x-slot name="meta_tags">

        <!-- Primary Meta Tags -->
        <meta name="title" content="About Us">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://laravel.com/">
        <meta property="og:title" content="Laravel - The PHP Framework For Web Artisans">
        <meta property="og:description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
        <meta property="og:image" content="https://laravel.com/img/og-image.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://laravel.com/">
        <meta property="twitter:title" content="Laravel - The PHP Framework For Web Artisans">
        <meta property="twitter:description" content="Laravel is a PHP web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.">
        <meta property="twitter:image" content="https://laravel.com/img/og-image.jpg">

    </x-slot />


    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url({{ asset('assets/images/about-header-bg.jpg') }})">
            <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">

        <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-3 mb-lg-0">
                        <h2 class="title">Who We Are</h2><!-- End .title -->

                        <a href="" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                            <span>VIEW OUR NEWS</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div>

                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .bg-light-2 pt-6 pb-6 -->
    </div><!-- End .page-content -->
  

</x-front.master-layout>
