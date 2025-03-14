@extends('layouts.master')

@section('title', 'Contact Us | IICG')

@section('content')

<!-- FORM
    ================================================== -->
<section class="section pb-0">

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2">

                <!-- Title -->
                <h6 class="title">
                    Contact form and information
                </h6>

            </div>
            <div class="col-md-10">

                <!-- Heading -->
                <h3 class="mb-4">
                    Have questions? Send us an <span class="text-primary">e-mail</span>
                </h3>

                <!-- Subheading -->
                <p class="text-muted mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis magnam, saepe est voluptas iste
                    obcaecati cum odit alias minus ipsa fuga ratione tempora officia sint neque fugiat similique
                    asperiores perferendis.
                </p>

                <!-- Form -->
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <!-- Name -->
                            <label>Full name</label>
                            <div class="input-group">
                                <input type="text" class="form-control order-1" name="contact-name">
                                <div class="input-group-append order-0">
                                    <div class="input-group-text">
                                        <svg class="input-group-icon icon-offset icon icon-person" viewBox="0 0 106 106"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path transform="translate(3 3)" d="
                              M0 100 A 50 50 0 0 1 50 60 A 20 20 0 0 1 50 0 A 20 20 0 0 1 50 60 A 50 50 0 0 1 100 100">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-md-6">

                            <!-- Email -->
                            <label>Email address</label>
                            <div class="input-group">
                                <input type="email" class="form-control order-1" name="contact-email">
                                <div class="input-group-append order-0">
                                    <div class="input-group-text">
                                        <svg class="input-group-icon icon-offset icon icon-envelope"
                                            viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path transform="translate(3 3)" d="
                              M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- / .form-row -->
                    <div class="form-row">
                        <div class="form-group col-12">

                            <!-- Message -->
                            <label>Your comments</label>
                            <textarea class="form-control" name="contact-message" rows="7"></textarea>

                        </div>
                    </div> <!-- / .form-row -->
                    <div class="form-row">
                        <div class="col-12">

                            <!-- Submit -->
                            <button type="submit" class="btn btn-outline-primary">
                                Send message
                            </button>

                            <!-- Reset -->
                            <button type="reset" class="btn btn-link">
                                Reset form
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</section>

<!-- OFFICES
      ================================================== -->
<section class="section">

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2">

                <!-- Title -->
                <h6 class="title">
                    Our offices
                </h6>

            </div>
            <div class="col-md-10">

                <!-- Heading -->
                <h3 class="mb-4">
                    Want to talk <span class="text-primary">in person</span>? Call us or visit us
                </h3>

                <!-- Subheading -->
                <p class="text-muted mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nam voluptatum facilis, atque
                    officiis possimus totam placeat maiores at tempore nulla corporis rem aliquid iusto ab, distinctio,
                    nostrum cumque asperiores!
                </p>

                <!-- Content -->
                <div class="row">
                    <div class="col-md-6 col-lg-5">

                        <!-- Heading -->
                        <h5>
                            Location:
                        </h5>

                        <!-- Address -->
                        <p class="text-muted">
                            44700 Satdobato, Lalitpur, KTM DASH-5000
                        </p>

                        <!-- Heading -->
                        <h5>
                            Email:
                        </h5>

                        <!-- Address -->
                        <p class="text-muted">
                            <a class="text-primary underlined" href="mailto:admin@domain.com">
                                iicg@dashdash.com
                            </a>
                        </p>

                    </div>
                    <div class="col-md-6 col-lg-5">

                        <!-- Heading -->
                        <h5>
                            Call us:
                        </h5>

                        <!-- Phone -->
                        <p class="text-muted">
                            <a class="text-primary" href="tel:1234567890">
                                985-465-78-90
                            </a>
                        </p>

                        <!-- Heading -->
                        <h5>
                            Skype:
                        </h5>

                        <!-- Phone -->
                        <p class="text-muted">
                            <a class="text-primary" href="tel:1234567890">
                                iicg.skype
                            </a>
                        </p>

                    </div>
                </div> <!-- / .row -->

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

</section>

@endsection