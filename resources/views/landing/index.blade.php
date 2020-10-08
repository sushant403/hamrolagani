@extends('layouts.master')

@section('title', 'IICG')

@section('content')

<!-- HERO
    ================================================== -->
<section class="section section-full pt-7">

    <!-- Overlay -->
    <div class="bg-overlay"></div>

    <!-- Triangles -->
    <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
    <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5 pt-7 pt-lg-0 align-self-center">

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Preheading -->
                            <div class="mb-3 mb-md-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="3" data-animation-trigger="load">
                                <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm text-white">
                                    Finance
                                </a>
                            </div>

                            <!-- Heading -->
                            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="1" data-animation-trigger="load">
                                Nepal walks towards the new Entrepreneurial Spirit
                            </h1>

                            <!-- Subheading -->
                            <p class=" text-muted mb-5" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="2" data-animation-trigger="load">
                                <a href="">
                                    Continue Reading <i class="fas fa-arrow-right ml-3"></i>
                                </a>
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <!-- Preheading -->
                            <div class="mb-3 mb-md-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="3" data-animation-trigger="load">
                                <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm text-white">
                                    Technology
                                </a>
                            </div>

                            <!-- Heading -->
                            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="1" data-animation-trigger="load">
                                Google to Colab with Burgeon Tech
                            </h1>

                            <!-- Subheading -->
                            <p class=" text-muted mb-5" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="2" data-animation-trigger="load">
                                <a href="">
                                    Continue Reading <i class="fas fa-arrow-right ml-3"></i>
                                </a>
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <!-- Preheading -->
                            <div class="mb-3 mb-md-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="3" data-animation-trigger="load">
                                <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm text-white">
                                    Fintech
                                </a>
                            </div>

                            <!-- Heading -->
                            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="1" data-animation-trigger="load">
                                Luxury Life intended in the new Era of Finance.
                            </h1>

                            <!-- Subheading -->
                            <p class=" text-muted mb-5" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="2" data-animation-trigger="load">
                                <a href="">
                                    Continue Reading <i class="fas fa-arrow-right ml-3"></i>
                                </a>
                            </p>
                        </div>
                        <div class="swiper-slide">
                            <!-- Preheading -->
                            <div class="mb-3 mb-md-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="3" data-animation-trigger="load">
                                <a href="{{ url('/') }}" class="btn btn-outline-light btn-sm text-white">
                                    Blockchain
                                </a>
                            </div>

                            <!-- Heading -->
                            <h1 class="text-white mb-4" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="1" data-animation-trigger="load">
                                The Future of Digital Currency
                            </h1>

                            <!-- Subheading -->
                            <p class=" text-muted mb-5" data-toggle="animation" data-animation="fadeUp"
                                data-animation-order="2" data-animation-trigger="load">
                                <a href="">
                                    Continue Reading <i class="fas fa-arrow-right ml-3"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination "></div>
                </div>


                <p class="text-white mb-4" data-toggle="animation" data-animation="fadeUp" data-animation-order="2"
                    data-animation-trigger="load">
                    <a href="">
                        Explore Case Studies <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                </p>
                <!-- Button -->
                <div class="mb-5 mb-md-0" data-toggle="animation" data-animation="fadeUp" data-animation-order="3"
                    data-animation-trigger="load">
                    <a href="{{ url('/') }}" class="btn btn-outline-light text-black bg-white">
                        Get Expert Opinion | Subscribe
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-7 align-self-center d-none d-md-flex justify-content-end">
                <img src="/images/hero.png">
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->

</section>

@endsection