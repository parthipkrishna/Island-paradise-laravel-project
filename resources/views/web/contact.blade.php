
@extends('web.layouts.layout')
@section('contact-page')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact Island Paradise Lakshadweep | Get in Touch</title>

  <meta name="description" content="Have questions or ready to book your Lakshadweep trip? Contact us today via our form. View our location on the Lakshadweep map and plan your island escape.">

  <meta name="keywords" content="Contact Lakshadweep travel agency, Island Paradise Lakshadweep contact, Lakshadweep tour inquiries">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://iplakshadweep.com/contact">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Contact Island Paradise Lakshadweep | Plan Your Trip">
  <meta property="og:description" content="Reach out to Island Paradise Lakshadweep for tour bookings, travel assistance, and island holiday planning.">
  <meta property="og:image" content="https://iplakshadweep.com/assets/img/logo-light.png">
  <meta property="og:url" content="https://iplakshadweep.com/contact">
  <meta property="og:type" content="website">
@endsection

@section('contact')

    <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
        <div class="area-bg__inner">
            <div class="container text-center">
                <h1 class="b-title-page">CONTACT US</h1><!-- end .breadcrumb-->
            </div>
        </div>
    </div>
    <!-- end .b-title-page-->
    <div class="l-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="map" id=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2011860.7418310577!2d71.61287477576515!3d9.982494331333823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b9fcd65cae4973d%3A0x17bd7416842ce9aa!2sLakshadweep!5e0!3m2!1sen!2sin!4v1740728740043!5m2!1sen!2sin" width="450" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
                <div class="col-md-6">
                    <section class="section-form-contacts" data-aos="fade-up" data-aos-duration="3000">
                        <h2 class="ui-title-inner">Send a Message</h2>
                        <p>We’d love to hear from you! Reach out for inquiries, bookings, or more information about our exclusive Lakshadweep tours.</p>

                        <!-- Success message -->
                        @if(session('success'))
                            <div id="success" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('send.email') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="name" type="tel" name="phone" placeholder="Phone" required/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" rows="5" name="message" placeholder="Message" required></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Send Message</button>
                        </form>
                    </section><!-- end .b-form-contact-->
                </div>
            </div>
        </div>
    </div>
    <style>
        @media (min-width: 768px) and (max-width: 991px)  {
            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: unset !important;
                max-width: unset !important;
            }
        }
    </style>

@endsection
