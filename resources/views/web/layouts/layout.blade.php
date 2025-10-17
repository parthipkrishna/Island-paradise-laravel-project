<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from pro-theme.com/html/nevica/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 11:29:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/img/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="HandheldFriendly" content="true">
	<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @yield('home-page')
    @yield('about-page')
    @yield('gallery-page')
    @yield('activity-page')
    @yield('tours-packages')
    @yield('destination-page')
    @yield('contact-page')

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })
        (window,document,'script','dataLayer','GTM-KC99WBWS');
    </script>
    <!-- End Google Tag Manager -->

    <!--[if lt IE 9 ]>
<script src="/assets/js/separate-js/html5shiv-3.7.2.min.js' )}} type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->
</head>

<body class="page">
	<!-- Loader-->
	<div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
	<!-- Loader end-->
	<div class="l-theme animated-css" data-header="sticky" data-header-top="200" data-canvas="container">
		<!-- ==========================-->
		<!-- SEARCH MODAL-->
		<!-- ==========================-->
		<div class="header-search open-search">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 col-10 offset-1">
						<div class="navbar-search">
							<form class="search-global">
								<input class="search-global__input" type="text" placeholder="Type to search" autocomplete="off" name="s" value="" />
								<button class="search-global__btn"><i class="icon stroke icon-Search"></i></button>
								<div class="search-global__note">Begin typing your search above and press return to search.</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<button class="search-close close" type="button"><i class="fa fa-times"></i></button>
		</div>
		<!-- ==========================-->
		<!-- MOBILE MENU-->
		<!-- ==========================-->
		<div data-off-canvas="mobile-slidebar left overlay">
    <ul class="navbar-nav">
        <!-- Home -->
        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>

        <!-- About -->
        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>

        <!-- Boats Listing -->
        <li class="nav-item {{ request()->routeIs('packages') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('packages') }}">Tours & Packages</a>
        </li>

        <!-- Tours -->
        <li class="nav-item {{ request()->routeIs('destination') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('destination') }}">Destination</a>
        </li>

        <!-- News (Blog) -->
        <li class="nav-item {{ request()->routeIs('activities') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('activities') }}">Our Businesses</a>
        </li>

        <!-- Contact -->
		<li class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
        </li>
        <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        </li>

    </ul>
</div>
		<header class="header header-slider">
			<div class="top-bar">
				<div class="container-fluid">
					<div class="row justify-content-between align-items-center">
						<div class="col-auto">
							<div class="top-bar__item"><i class="fas fa-phone-square"></i> <a href="tel:+919447679799" class="text-white">Phone: +91 94476 79799</a></div>
							<div class="top-bar__item"><i class="fas fa-envelope-square"></i> <a href="mailto:support@iplakshadweep.com" class="text-white">Email: support@iplakshadweep.com</a></div>
						</div>
						<div class="col-auto">
							<ul class="header-soc list-unstyled">
								<li class="header-soc__item"><a class="header-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
								<li class="header-soc__item"><a class="header-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook-f"></i></a></li>
								<li class="header-soc__item"><a class="header-soc__link" href="#" target="_blank"><i class="ic fab fa-youtube"></i></a></li>
								<li class="header-soc__item"><a class="header-soc__link" href="https://www.instagram.com/iplakshadweep?igsh=MTY2aW5odmFyM252Mw==" target="_blank"><i class="ic fab fa-instagram"></i></a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="header-main">
				<div class="container-fluid">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto mt-4 ">
							<a class="navbar-brand navbar-brand_light scroll" > <img class=" img-fluid normal-logo" src={{asset('assets/img/logowhite.png' )}} alt="logo" /> </a>
							<a class="navbar-brand navbar-brand_dark scroll" ><img class=" img-fluid normal-logo" src={{asset('assets/img/logo-light.png' )}} alt="logo" /></a>
						</div>
						<div class="col-auto d-xl-none">
							<!-- Mobile Trigger Start-->
							<button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
							<!-- Mobile Trigger End-->
						</div>
						<div class="col-xl d-none d-xl-block">
    <nav class="navbar navbar-expand-lg justify-content-end" id="nav">
        <ul class="yamm main-menu navbar-nav">
            <!-- Home -->
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>

            <!-- About Us -->
            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>

            <!-- Our Fleet Dropdown -->
            <li class="nav-item ">
                <a class="nav-link " href="{{ route('packages') }}">Tours & packages</a>

            </li>

            <!-- Our Tours Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('destination') }}">Destination</a>

            </li>



			<li class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
            </li>
			<li class="nav-item {{ request()->routeIs('activites') ? 'active' : '' }}">
                <a class="nav-link " href="{{ route('activities') }}">Our Businesses</a>

            </li>

            <!-- Contact -->
            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('contact') }}">Contact</a>
            </li>
        </ul>

        <!-- Search Icon and Book Now Button -->

        <a href="javascript:void(0);" onclick="openPopup()">
    <button class="header-main__btn btn btn-secondary">Book Now</button>
</a>
    </nav>
</div>
					</div>
				</div>
			</div>
		</header>
        <!-- end .header-->
		<div id="popupForm" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
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

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="form-group">
                                <label for="start_date" class="description-grey">Start Date</label>
                                <input class="form-control" type="date" name="start_date" id="start_date">
                            </div>
                        </div>

                        <div class="col-md-6 col-6">
                            <div class="form-group">
                                <label for="end_date" class="description-grey">End Date</label>
                                <input class="form-control" type="date" name="end_date" id="end_date">
                            </div>
                        </div>
                    </div>
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

                <div class="col-md-12">
                    <button class="b-main-filter__btn btn btn-secondary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

        @yield('index')

        @yield('about')
        @yield('tours&packages')
        @yield('details')
        @yield('destination')
        @yield('Gallery')
        @yield('otheractivities')
		@yield('destination_details')
        @yield('contact')












        <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-section">
							<img class="img-fluid" src={{asset('assets/img/logo-light.png' )}} alt="Logo">
							<div class="footer-info mt-3">Island Paradise Lakshadweep LLP offers luxury, eco-friendly tours, adventure activities, and local product promotions, showcasing Lakshadweep’s beauty while supporting sustainable tourism and community growth.</div>
						</div>

					</div>
					<div class="col-lg-3 col-md-6">
						<section class="footer-section footer-section_link pl-5">
							<h3 class="footer-section__title">DESTINATIONS</h3>
							<ul class="footer-list list-unstyled">
								<li><a href="{{ route('destination') }}">Agatti</a></li>
								<li><a href="{{ route('destination') }}">Bangaram</a></li>
								<li><a href="{{ route('destination') }}">Kavaratti</a></li>
								<li><a href="{{ route('destination') }}">Kalpeni</a></li>
								<li><a href="{{ route('destination') }}">Kadmat</a></li>
								<li><a href="{{ route('destination') }}">Minicoy</a></li>
						</ul>

						</section>
					</div>
					<div class="col-lg-3 col-md-6">
						<section class="footer-section footer-section_link footer-section_link_about">
							<h3 class="footer-section__title">PACKAGE</h3>
							<ul class="footer-list list-unstyled">
								<li><a href="{{ route('packages') }}">Bangaram Luxury Wooden Hut Package</a></li>
								<li><a href="{{ route('packages') }}">Bangaram Resort AC Cottage Package</a></li>
								<li><a href="{{ route('packages') }}">Agatti, Thinnakara, Kalpitti Island & Sanbanks</a></li>
								<li><a href="{{ route('packages') }}">Kavaratti & Agatti Island Package</a></li>
							</ul>

						</section>
					</div>
					<div class="col-lg-3 col-md-6">
						<section class="footer-section">
							<h3 class="footer-section__title">Get In Touch</h3>
							<div class="footer-contacts">
								<div class="footer-contacts__item"><i class="ic icon-location-pin"></i>Island Paradise Lakshadweep LLP G5, Ex- Porterage Building,
																										Near Mattancherry Wharf Gate,
																										IG Road, Willingdon Island
																										Cochin, Kerala, India - 682 003.
																										</div>
								<div class="footer-contacts__item"><i class="ic icon-envelope"></i><a href="support@iplakshadweep.com">support@iplakshadweep.com</a></div>
								<div class="footer-contacts__item"><i class="ic icon-earphones-alt"></i> Phone: <a class="footer-contacts__phone" href="tel:+17553028549">+919447679799</a> </div>
							</div>
							<ul class="footer-soc list-unstyled">
								<li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-twitter"></i></a></li>
								<li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-facebook-f"></i></a></li>
								<li class="footer-soc__item"><a class="footer-soc__link" href="https://www.instagram.com/iplakshadweep?igsh=MTY2aW5odmFyM252Mw==" target="_blank"><i class="ic fab fa-instagram"></i></a></li>
								<li class="footer-soc__item"><a class="footer-soc__link" href="#" target="_blank"><i class="ic fab fa-youtube"></i></a></li>
							</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">© 2025 Innerix Technologys LLP All rights reserved.</div>
			</div>
		</footer>
		<!-- .footer-->
	</div>
	<!-- end layout-theme-->
	<!-- ++++++++++++-->
	<!-- MAIN SCRIPTS-->
	<!-- ++++++++++++-->
	<script src={{asset('assets/libs/jquery-3.3.1.min.js' )}}></script>
	<script src={{asset('assets/libs/jquery-migrate-1.4.1.min.js' )}}></script>
	<!-- Bootstrap-->
	<script src={{asset('assets/plugins/popever/popper.min.js' )}}></script>
	<script src={{asset('assets/libs/bootstrap-4.1.3/js/bootstrap.min.js' )}}></script>
	<!---->
	<!-- Color scheme-->
	<script src={{asset('assets/plugins/switcher/js/dmss.js' )}}></script>
	<!-- Select customization & Color scheme-->
	<script src={{asset('assets/libs/bootstrap-select.min.js' )}}></script>
	<!-- Pop-up window-->
	<script src={{asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js' )}}></script>
	<!-- Headers scripts-->
	<script src={{asset('assets/plugins/headers/slidebar.js' )}}></script>
	<script src={{asset('assets/plugins/headers/header.js' )}}></script>
	<!-- Mail scripts-->
	<script src={{asset('assets/plugins/jqBootstrapValidation.js' )}}></script>
	<script src={{asset('assets/plugins/contact_me.js' )}}></script>
	<!-- Progress numbers-->
	<script src={{asset('assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js' )}}></script>
	<script src={{asset('assets/plugins/rendro-easy-pie-chart/jquery.waypoints.min.js' )}}></script>
	<!-- Animations-->
	<script src={{asset('assets/plugins/scrollreveal/scrollreveal.min.js' )}}></script>
	<!-- Scale images-->
	<script src={{asset('assets/plugins/ofi.min.js' )}}></script>
	<!-- Main slider-->
	<script src={{asset('assets/plugins/slider-pro/jquery.sliderPro.min.js' )}}></script>
	<!-- Sliders-->
	<script src={{asset('assets/plugins/slick/slick.js' )}}></script>
	<!-- Slider number-->
	<script src={{asset('assets/plugins/noUiSlider/wNumb.js' )}}></script>
	<script src={{asset('assets/plugins/noUiSlider/nouislider.min.js' )}}></script>
	<!-- User customization-->
	<script src={{asset('assets/js/custom.js' )}}></script>

    <script>
        function openPopup() {
            let popup = document.getElementById("popupForm");
            popup.style.display = "block";
            popup.scrollTop = 0; // Reset scroll to top when opening
        }

        function closePopup() {
            document.getElementById("popupForm").style.display = "none";
        }

        // Close popup when clicking outside the form
        window.onclick = function(event) {
            let popup = document.getElementById("popupForm");
            if (event.target === popup) {
                popup.style.display = "none";
            }
        };
    </script>
    <script>
        function resetForm(event) {
            event.preventDefault(); // Prevent default form submission
            let form = event.target;

            // Perform form submission using AJAX
            fetch(form.action, {
                method: form.method,
                body: new FormData(form)
            }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    form.reset(); // Reset the form
                    alert("Booking submitted successfully!");
                } else {
                    alert("Error: " + data.message);
                }
            }).catch(error => console.error("Error:", error));
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll("[id^='start_date']").forEach((startDateInput) => {
                let endDateInput = document.getElementById(startDateInput.id.replace("start_date", "end_date"));

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
        });
    </script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KC99WBWS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>


<!-- Mirrored from pro-theme.com/html/nevica/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 11:31:00 GMT -->
</html>
