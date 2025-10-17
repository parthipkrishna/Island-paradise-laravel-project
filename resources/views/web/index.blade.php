@extends('web.layouts.layout')
@section('home-page')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Island Paradise Lakshadweep | Beaches, Resorts & Adventures</title>
    
    <meta name="description" content="Book your dream trip to Island Paradise Lakshadweep—AC cottages, wooden huts, snorkeling, kayaking, and guided tours across Agatti, Bangaram & Kavaratti.">
    <meta name="keywords" content="Lakshadweep travel deals, beach vacation packages, private island vacations, Lakshadweep tourism packages, Bangaram resort cottages, water sports Lakshadweep, Agatti to Kavaratti island tours">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://iplakshadweep.com/">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Island Paradise Lakshadweep | Beaches, Resorts & Adventures">
    <meta property="og:description" content="Explore Lakshadweep with AC beach cottages, water adventures, and serene island tours.">
    <meta property="og:image" content="http://iplakshadweep.com/assets/img/logo-light.png">
    <meta property="og:url" content="https://iplakshadweep.com/">
    <meta property="og:type" content="website">
@endsection
@section('index')

    <div class="b-main-slider slider-pro" id="main-slider" data-slider-width="100%" data-slider-height="920px" data-slider-arrows="false" data-slider-buttons="false">
        <div class="sp-slides">
            <!-- Slide 1-->
            <div class="b-main-slider__slide b-main-slider__slide-1 sp-slide"><img class="sp-image" src="{{ asset('assets/img/banner_img2.png') }}" alt="slider" />
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                                <div class="b-main-slider__title-wrap">
                                    <div class="b-main-slider__slogan">Endless Wonders Await You</div>
                                    <div class="b-main-slider__title">Step into a world of endless wonders and unforgettable adventures</div>
                                    <div class="b-main-slider__label text-secondary">Explore Now</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1-->
            <div class="b-main-slider__slide b-main-slider__slide-2 sp-slide"><img class="sp-image" src="{{ asset('assets/img/banner_img1.png') }}" alt="slider" />
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="sp-layer" data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400">
                                <div class="b-main-slider__title-wrap">
                                    <div class="b-main-slider__slogan">Explore the World, One Journey</div>
                                    <div class="b-main-slider__title">Discover the world, one trip at a time.</div>
                                    <div class="b-main-slider__label text-secondary">Explore Now</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end .b-main-slider-->
    <div class="b-about">
        <div class="container">
            <div class="b-main-filter" id="findTabContent">
                <div class="tab-pane fade" id="content-usedCars">
                    <div class="row align-items-end no-gutters">
                        <div class="b-main-filter__main col-lg">
                            <div class="b-main-filter__inner row no-gutters">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"  data-aos="fade-up" data-aos-duration="3000">
                <div class="col-lg-6 ">
                    <div class="text-left">
                        <h1 class="ui-title">Lakshadweep Awaits: Serenity, Adventure & More</h1>
                        <div class="ui-content">
                            <p>Nestled in the Arabian Sea, Lakshadweep is a tropical paradise of crystal-clear waters, white sandy beaches, and vibrant marine life. Perfect for nature lovers and thrill-seekers, it offers serenity, adventure, and cultural charm, making it an unforgettable destination for travelers seeking tranquility and excitement.</p>
                            <ul class="arrow-list">
                                <li><i class="fas fa-long-arrow-alt-right"></i>Pristine beaches, turquoise waters</li>
                                <li><i class="fas fa-long-arrow-alt-right"></i>Thrilling water sports adventures</li>
                                <li><i class="fas fa-long-arrow-alt-right"></i>Rich marine biodiversity experience</li>
                                <li><i class="fas fa-long-arrow-alt-right"></i>Peaceful escape, cultural charm</li>
                            </ul>
                            <div class="gap25"></div> </div>
                    </div>
                </div>
                <div class="col-lg-6"> <img src={{asset('assets/img/4444.png' )}} alt="photo" class="about-image"> </div>
            </div>
        </div>
    </div>
    <!-- end .b-services-->
    <div class="section-advantages mb-5">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="3000">
                <div class="col-lg-4">
                    <div class="b-advantages">
                        <div class="ic fas fa-water text-secondary"></div>
                        <div class="b-advantages__main">
                            <div class="b-advantages__title">Unmatched Scenic Beauty</div>
                            <div class="decore01"></div>
                            <div class="b-advantages__info">Experience breathtaking landscapes, crystal-clear waters, and pristine beaches in a paradise like no other.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="b-advantages">
                        <div class="ic fas fa-suitcase-rolling text-secondary"></div>
                        <div class="b-advantages__main">
                            <div class="b-advantages__title">Exclusive Travel Deals</div>
                            <div class="decore01"></div>
                            <div class="b-advantages__info">Enjoy unbeatable prices, special packages, and exclusive discounts for a dream vacation at stunning island destinations worldwide.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="b-advantages">
                        <div class="ic fas fa-hands-helping text-secondary"></div>
                        <div class="b-advantages__main">
                            <div class="b-advantages__title">Personalized Service </div>
                            <div class="decore01"></div>
                            <div class="b-advantages__info">Experience tailor-made travel plans, dedicated support, and seamless services designed to make your island getaway truly unforgettable.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-goods">
        <div class="section-default section-goods__inner bg-dark">
            <div class="ui-decor ui-decor_mirror ui-decor_center"></div>
            <div class="container">
                <div class="text-center">
                    <h2 class="ui-title ui-title_light">Your Perfect Island Escape!</h2>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <p>Discover your dream getaway with our exclusive travel packages designed to fit every budget and preference.</p> <img src={{asset('assets/img/decore03.png' )}} alt="photo"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-goods__list text-center">
                <div class="row "data-aos="fade-up" data-aos-duration="3000" >
                    @forelse($packages as $package)
                        <div class="col-xl-3 col-md-6">
                            <div class="b-goods">
                                <a class="b-goods__img" href="{{ route('details', ['id' => $package->id]) }}">
                                    <img class="img-scale" src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" />
                                </a>
                                <div class="b-goods__main">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <a class="b-goods__title" href="{{ route('details', ['id' => $package->id]) }}">{{ $package->name }}</a>
                                            <div class="b-goods__info">{{ $package->description }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="b-goods__price text-primary">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center text-muted">No packages available.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section class="section-goods-offers">
        <div class="row" data-aos="fade-up" data-aos-duration="3000" >
            <div class="col-12 col-md-6 col-lg-4">
                <div class="text-left offers-left">
                    <h2 class="ui-title">Water Sports<br>
                    Activities</h2> <img src={{asset('assets/img/decore02.png' )}} alt="photo">
                    <div class="offers-left-text">
                        <p>Lakshadweep offers thrilling water sports like scuba diving, snorkeling, kayaking, and parasailing. Explore vibrant coral reefs, crystal-clear waters, and adventure-filled experiences in this tropical paradise.</p>  </div>
                    </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <div class="b-offers-slider ui-slider_arr-prim js-slider" data-slick="{&quot;slidesToShow&quot;: 3, &quot;slidesToScroll&quot;: 1, &quot;dots&quot;: false, &quot;arrows&quot;: true, &quot;autoplay&quot;: true,   &quot;responsive&quot;: [{&quot;breakpoint&quot;: 992, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                    <div class="b-offers-nevica">
                        <div class="b-offers-nevica-photo mb-3"> <img src={{asset('assets/img/kayaking.png' )}} alt="photo"> </div>
                        <h6>Kayaking</h6>
                        <div class="decore01"></div>
                        <p>Kayaking in Lakshadweep offers a serene adventure, allowing you to paddle through calm waters, explore secluded coves, and immerse yourself in the island’s breathtaking natural beauty.</p>
                    </div>
                    <!-- end .b-offers-->
                    <div class="b-offers-nevica">
                        <div class="b-offers-nevica-photo mb-3"> <img src={{asset('assets/img/snorkeling.png' )}} alt="photo"> </div>
                        <h6>Snorkeling</h6>
                        <div class="decore01"></div>
                        <p>Snorkeling in Lakshadweep offers an unforgettable experience, with vibrant coral reefs, colorful marine life, and crystal-clear waters, making it a must-do adventure for nature lovers.</p>
                    </div>
                    <!-- end .b-offers-->
                    <div class="b-offers-nevica">
                        <div class="b-offers-nevica-photo mb-3"> <img src={{asset('assets/img/scubadiving.png' )}} alt="photo"> </div>
                        <h6>Scuba Diving</h6>
                        <div class="decore01"></div>
                        <p>Scuba diving in Lakshadweep offers an unforgettable experience, where you can explore vibrant coral reefs, swim alongside exotic marine life, and immerse yourself in the breathtaking underwater world.</p>
                    </div>
                    <!-- end .b-offers-->

                    <!-- end .b-offers-->
                </div>
            </div>
        </div>
    </section>
    <section class="section-video section-default section-goods__inner bg-dark ">
        <div class="ui-decor ui-decor_mirror ui-decor_center"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-10">
                    <div class="video-info">
                        <h4>Let’s call for more Updates</h4>
                        <h5>Still Searching ? Your perfect Adventure Awaits</h5>
                        <ul>
                            <li><i class="fas fa-phone-square"></i><a href="tel:+919447679799" class="text-white"> Call Us Today: +91 94476 79799</a>,<a href="tel:+919496605550" class="text-white"> +919496605550</a></li>
                            <li><i class="fas fa-envelope-square"></i><a href="mailto:support@iplakshadweep.com" class="text-white">Email: support@iplakshadweep.com</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-gallery" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="text-center">
                <h2 class="ui-title">Gallery</h2>
            </div>
        </div>

        <div class="ui-gallery js-zoom-gallery">
            @if($galleryItems->isEmpty())
                <p class="text-center">No images found.</p>
            @else
                <div class="row no-gutters">
                    @foreach($galleryItems as $item)
                        <div class="col-lg-3 col-sm-6 mb-3">
                            <a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset('storage/' . $item->image) }}">
                                <img class="img-scale" src="{{ asset('storage/' . $item->image) }}" alt="Gallery Image">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section class="section-form" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="text-left">
                        <h2 class="ui-title">Booking Form</h2>
                        <p>Plan your dream getaway with ease! Book your perfect tour package today and explore breathtaking destinations, unforgettable experiences, and seamless travel.</p> <img src={{asset('assets/img/decore03.png' )}} alt="photo">
                        <form action="{{ route('bookingweb.store') }}" method="POST" onsubmit="resetForm(event)">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row row-form-b">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="first_name" placeholder="First Name" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control custom-select-dropdown" name="package" required>
                                            <option value="" selected disabled>Select a Package</option>
                                            @forelse($packages as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @empty
                                                <option value="" disabled>No packages available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <!-- Start Date Field -->
                                <div class="container-fluid">
                                    <div class="row ">
                                        <!-- Start Date Field -->
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <label for="start_date" class="description-grey">Start Date</label>
                                                <input class="form-control" type="date" name="start_date" id="start_date_1" required>
                                            </div>
                                        </div>

                                        <!-- End Date Field -->
                                        <div class="col-md-6 col-6">
                                            <div class="form-group">
                                                <label for="end_date" class="description-grey">End Date</label>
                                                <input class="form-control" type="date" name="end_date" id="end_date_1" required>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accommodation Section -->
                                <div class="col-12">
                                    <h6 class="mt-1">Accommodation</h6>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="no_of_rooms" placeholder="No of Rooms" min="1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="no_of_adults" placeholder="No of Adults" min="1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="no_of_child_6_11" placeholder="No of Children (6-11 Yrs)" min="0">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="no_of_child_11_above" placeholder="No of Children (11 & Above)" min="0">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" name="message" placeholder="Remarks" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="b-main-filter__btn btn btn-secondary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="text-left title-padding-m-top">
                        <h2 class="ui-title">Island Paradise FAQ’s</h2>
                        <p>Got questions about your Lakshadweep adventure?
                            <br>Our FAQ section is here to help you find quick solutions to common queries. </p> <img src={{asset('assets/img/decore03.png' )}} alt="photo"> </div>
                                <div class="ui-accordion accordion" id="accordion-1">
                                    <div id="accordion-1">
                                        <div class="card">
                                            <div class="card-header" id="heading1">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                        <span class="ui-accordion__number">01</span>Do I need a permit to visit Lakshadweep?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse1" aria-labelledby="heading1" data-parent="#accordion-1">
                                                <div class="card-body">
                                                Yes, all visitors (including Indian nationals) need an entry permit issued by the Lakshadweep Administration. The permit is usually arranged by the tour operator or resort.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="heading2">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                        <span class="ui-accordion__number">02</span>How do I reach Lakshadweep?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse2" aria-labelledby="heading2" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    Flight: Direct flights from Kochi, Goa & Bangalore. Ship: Passenger ships from Kochi to different islands, taking 11-18 hours.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="heading3">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                        <span class="ui-accordion__number">03</span>Are water sports activities safe in Lakshadweep?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse3" aria-labelledby="heading3" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    Yes, all water sports activities in Lakshadweep are conducted under the supervision of trained professionals, ensuring safety and fun for all participants.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="heading4">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                        <span class="ui-accordion__number">04</span>Is Lakshadweep suitable for family vacations?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse4" aria-labelledby="heading4" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    Absolutely! Lakshadweep offers a peaceful environment, stunning beaches, and family-friendly activities, making it an ideal destination for families to relax and bond.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="heading5">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                        <span class="ui-accordion__number">05</span>What types of accommodations are available?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse5" aria-labelledby="heading5" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    Lakshadweep offers Resorts, Guesthouses, Beach huts, and Home Stays on select islands like Bangaram, Agatti, and Kavaratti.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="heading6">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                        <span class="ui-accordion__number">06</span>Is vegetarian and non-vegetarian food available?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse6" aria-labelledby="heading6" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    Yes, both vegetarian and non-vegetarian meals are available. Seafood is a specialty, and most resorts serve South Indian and Lakshadweep cuisine.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="heading7">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                                        <span class="ui-accordion__number">07</span>Is alcohol available in Lakshadweep?
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div class="collapse" id="collapse7" aria-labelledby="heading7" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    Alcohol is prohibited on all islands except Bangaram Island, where it is available at the resort.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end .accordion-->
                            </div>
                        </div>
                    </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let startDateInput = document.getElementById("start_date");
            let endDateInput = document.getElementById("end_date");

            startDateInput.addEventListener("change", function () {
                let startDate = new Date(this.value);

                if (!isNaN(startDate.getTime())) { // Ensure it's a valid date
                    startDate.setDate(startDate.getDate() + 1); // Add 1 day
                    let endDate = startDate.toISOString().split('T')[0]; // Convert to YYYY-MM-DD format
                    endDateInput.value = endDate;
                    endDateInput.min = endDate; // Prevent selecting past dates
                }
            });
        });
    </script>

@endsection
