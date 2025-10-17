<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Island Paradise Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashboard/logo/IMG_8731.PNG') }}">

        <!-- Daterangepicker css -->
        <link href="{{asset('dashboard/assets/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">

        <!-- Vector Map css -->
        <link href="{{asset('dashboard/assets/vendor/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Theme Config Js -->
        <script src="{{asset('dashboard/assets/js/hyper-config.js')}}"></script>

        <!-- App css -->
        <link href="{{ asset('dashboard/assets/css/app-saas.min.css') }}" rel="stylesheet"  type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{asset('dashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Datatables css -->
        <link href="{{asset('dashboard/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashboard/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- file upload css -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/dropzone/dropzone.min.css') }}">

        <!-- Select2 css -->
        <link href="{{ asset('dashboard/assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Quill css -->
        {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" /> --}}
        <link rel="stylesheet" href="assets/vendor/quill/text-editor.css">
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
        <!-- Material Design Icons CSS -->
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" rel="stylesheet">

        <!--icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    </head>
    <body>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-lg-2 gap-1">
                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="{{ route('/home') }}" class="logo-light">
                                <span class="logo-lg">
                                    <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="logo" >
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="small logo">
                                </span>
                            </a>
                            <!-- Logo Dark -->
                            <a href="{{ route('/home') }}" class="logo-dark">
                                <span class="logo-lg">
                                    <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="dark logo">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="small logo">
                                </span>
                            </a>
                        </div>
                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                        <!-- Topbar Search Form -->
                    </div>
                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ !empty( auth()->user()->profile_image) ? env('STORAGE_URL') . '/' . str_replace('public/', '', auth()->user()->profile_image) : asset('dashboard/assets/images/avathar.png') }}"
                                        alt="admin-image" width="40" height="40" class="rounded-circle">
                                </span>

                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <h5 class="my-0">{{ auth()->user()->name }}</h5>
                                    <h6 class="my-0 fw-normal">Admin</h6>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="{{ route('admin-profile') }}" class="dropdown-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <form action="{{ route('admin-logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item border-0 bg-transparent w-100 text-start">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </button>
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== style="height: 90px; width: 50%; margin-top: 10px;"-->
            <div class="leftside-menu">
                <!-- Brand Logo Light -->
                <a href="{{ route('users.show') }}" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="logo" style="height: 150px;">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="small logo">
                    </span>
                </a>
                <!-- Brand Logo Dark -->
                <a href="{{ route('users.show') }}" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="dark logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('dashboard/logo/IMG_8731.PNG') }}" alt="small logo">
                    </span>
                </a>
                <!-- Sidebar Hover Menu Toggle Button -->
                <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </div>

                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="#">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name mt-2"></span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title">User Management</li>
                        <li class="side-nav-item">
                            <a href="{{ route('users.show') }}" class="side-nav-link">
                                <i class="fa-solid fa-users"></i>
                                <span> Users </span>
                            </a>
                        </li>

                        <li class="side-nav-title">Website Management</li>
                        {{-- <li class="side-nav-item"> --}}
                            {{-- <a href="{{ route('admin-home') }}" class="side-nav-link"> --}}
                                {{-- <i class="uil-home-alt"></i> --}}
                                {{-- <span> Home </span> --}}
                            {{-- </a> --}}
                        {{-- </li> --}}
                        <li class="side-nav-item">
                            <a href="{{ route('packages.admin') }}" class="side-nav-link">
                                <i class="fa-solid fa-plane-departure"></i>
                                <span> Packages </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('destination.admin') }}" class="side-nav-link">
                                <i class="fa-solid fa-torii-gate"></i>
                                <span> Destination </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('admin-gallery') }}" class="side-nav-link">
                                <i class="fa-solid fa-image"></i>
                                <span> Gallery </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('booking') }}" class="side-nav-link">
                                <i class="fa-solid fa-address-book"></i>
                                <span> Bookings </span>
                            </a>
                        </li>
                    </ul>
                    <!--- End Sidemenu -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->
            <!-- ============================================================== -->
            <!-- Start Page Content Here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        @yield('home')
                        @yield('add-user')
                        @yield('list-user')
                        @yield('gallery')
                        @yield('add-gallery')
                        @yield('packages')
                        @yield('add-package')
                        @yield('list-package')
                        @yield('view-package')
                        @yield('list-destination')
                        @yield('list-booking')
                        @yield('add-booking')
                        @yield('view-booking')

                        @yield('admin-home')
                        @yield('admin-profile')
                    </div>
                    <!-- container -->
                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Innerix Technologies LLP
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('dashboard/assets/js/vendor.min.js')}}"></script>

        <!-- Daterangepicker js -->
        <script src="{{asset('dashboard/assets/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>

        <!-- Apex Charts js -->
        <script src="{{asset('dashboard/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Vector Map Js -->
        <script src="{{asset('dashboard/assets/vendor/jsvectormap/js/jsvectormap.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
        <script src="{{asset('dashboard/assets/vendor/jsvectormap/maps/world.js')}}"></script>

        <!-- Dashboard App js -->
        <script src="{{asset('dashboard/assets/js/pages/demo.dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('dashboard/assets/js/app.min.js')}}"></script>

        <!-- Datatables js -->
        <script src="{{ asset('dashboard/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

        <!-- Datatable Demo Aapp js -->
        <script src="{{ asset('dashboard/assets/js/pages/demo.datatable-init.js') }}"></script>

        <!-- Datatable js -->
        <script src="{{ asset('dashboard/assets/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js') }}"></script>
        <!-- Product Demo App js -->
        <script src="{{ asset('dashboard/assets/js/pages/demo.products.js') }}"></script>

        <!-- Code Highlight js -->
        <script src="{{ asset('dashboard/assets/vendor/highlightjs/highlight.pack.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/vendor/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/hyper-syntax.js') }}"></script>

        <!-- Dropzone File Upload js -->
        <script src="{{ asset('dashboard/assets/vendor/dropzone/dropzone-min.js') }}"></script>

        <!-- File Upload Demo js -->
        <script src="{{ asset('dashboard/assets/js/ui/component.fileupload.js') }}"></script>

        <!-- plugin js -->
        <script src="{{ asset('dashboard/assets/vendor/dropzone/min/dropzone.min.js') }}"></script>

        <!--  Select2 Js -->
        <script src="{{ asset('dashboard/assets/vendor/select2/js/select2.min.js') }}"></script>

        <!-- Initialize Quill editor -->
        <script src="{{asset('dashboard/assets/vendor/quill/text-editor.js') }}"></script>

        <!-- Include the Quill library -->
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

        <!-- Chart.js-->
        <script src="{{'assets/vendor/chart.js/chart.min.js'}}"></script>
        <!-- Sparkline Chart js -->
        <script src="{{ asset('dashboard/assets/vendor/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <!-- Sparkline Chart Demo js -->
        <script src="{{ asset('dashboard/assets/js/pages/demo.sparkline.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.datatable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "info": true
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                var validator = $("#userForm").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        phone_number: {
                            required: true,
                            digits: true,
                            minlength: 10,
                            maxlength: 15
                        },
                        user_role: {
                            required: true
                        },
                        password: {
                            required: true,
                            minlength: 6
                        },
                        profile_image: {
                            extension: "jpg|jpeg|png|gif"
                        }
                    },
                    messages: {
                        name: {
                            required: "Name is required",
                            minlength: "Name must be at least 3 characters long"
                        },
                        email: {
                            required: "Email is required",
                            email: "Enter a valid email"
                        },
                        phone_number: {
                            required: "Phone number is required",
                            digits: "Only numbers are allowed",
                            minlength: "Phone number must be at least 10 digits",
                            maxlength: "Phone number cannot exceed 15 digits"
                        },
                        user_role: {
                            required: "Please select a user role"
                        },
                        password: {
                            required: "Password is required",
                            minlength: "Password must be at least 6 characters"
                        },
                        profile_image: {
                            extension: "Only image files (JPG, PNG, GIF) are allowed"
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.addClass("text-danger").insertAfter(element);
                    },
                    highlight: function(element) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("is-invalid").addClass("is-valid");
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });

                // ✅ Force validation when clicking Create button
                $("#createUserBtn").click(function () {
                    if (!$("#userForm").valid()) {
                        validator.focusInvalid(); // Move focus to first invalid field
                    }
                });
            });
        </script>


        <script>
            $(document).ready(function () {
                $("#bookingForm").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        phone_number: {
                            required: true,
                            digits: true,
                            minlength: 10,
                            maxlength: 15
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        package_id: {
                            required: true,
                            min: 1 // Ensures a valid package is selected
                        },
                        subject: {
                            required: true
                        },
                        start_date: {
                            required: true,
                            date: true
                        },
                        end_date: {
                            required: true,
                            date: true
                        },
                        no_of_rooms: {
                            required: true,
                            
                        }
                    },
                    messages: {
                        name: {
                            required: "Name is required",
                            minlength: "Name must be at least 3 characters long"
                        },
                        phone_number: {
                            required: "Phone number is required",
                            digits: "Only numbers are allowed",
                            minlength: "Phone number must be at least 10 digits",
                            maxlength: "Phone number cannot exceed 15 digits"
                        },
                        email: {
                            required: "Email is required",
                            email: "Enter a valid email"
                        },
                        package_id: {
                            required: "Please select a package",
                            min: "Please choose a valid package"
                        },
                        subject: {
                            required: "Subject is required"
                        },
                        start_date: {
                            required: "Start date is required",
                            date: "Enter a valid date"
                        },
                        end_date: {
                            required: "End date is required",
                            date: "Enter a valid date"
                        },
                        no_of_rooms: {
                            required: "Number of rooms required",
                            
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.addClass("text-danger").insertAfter(element);
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                var validator = $("#packageForm").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        title: {
                            required: true,
                            minlength: 3
                        },
                        short_description: {
                            required: true,
                            minlength: 10
                        },
                        price: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Name is required",
                            minlength: "Name must be at least 3 characters long"
                        },
                        title: {
                            required: "Title is required",
                            minlength: "Title must be at least 3 characters long"
                        },
                        short_description: {
                            required: "Short description is required",
                            minlength: "Description must be at least 10 characters"
                        },
                        price: {
                            required: "Price is required",
                        },
                    },
                    errorPlacement: function(error, element) {
                        error.addClass("text-danger").insertAfter(element);
                    },
                    highlight: function(element) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("is-invalid").addClass("is-valid");
                    },
                    onkeyup: function(element) {
                        $(element).valid(); // Validate while typing
                    },
                    onfocusout: function(element) {
                        $(element).valid(); // Validate when moving out of the field
                    }
                });

                // ✅ Show error messages immediately when clicking submit if fields are empty
                $("#packageForm button[type='submit']").click(function (event) {
                    if (!$("#packageForm").valid()) {
                        validator.focusInvalid(); // Move focus to first invalid field
                        event.preventDefault(); // Prevent form submission if invalid
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                var validator = $("#destinationForm").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        location: {
                            required: true,
                            minlength: 3
                        },
                        short_description: {
                            required: true,
                            minlength: 10
                        },
                        image: {
                            required: true,
                            // extension: "jpg|jpeg|png|gif"
                        }
                    },
                    messages: {
                        name: {
                            required: "Name is required",
                            minlength: "Name must be at least 3 characters long"
                        },
                        location: {
                            required: "Location is required",
                            minlength: "Location must be at least 3 characters long"
                        },
                        short_description: {
                            required: "Description is required",
                            minlength: "Description must be at least 10 characters"
                        },
                        // image: {
                            // required: "Please upload an image",
                            // extension: "Only image files (JPG, PNG, GIF) are allowed"
                        // }
                    },
                    errorPlacement: function(error, element) {
                        error.addClass("text-danger").insertAfter(element);
                    },
                    highlight: function(element) {
                        $(element).addClass("is-invalid").removeClass("is-valid");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("is-invalid").addClass("is-valid");
                    },
                    onkeyup: function(element) {
                        $(element).valid(); // Validate while typing
                    },
                    onfocusout: function(element) {
                        $(element).valid(); // Validate when moving out of the field
                    }
                });

                // ✅ Show error messages immediately when clicking submit if fields are empty
                $("#destinationForm button[type='submit']").click(function (event) {
                    if (!$("#destinationForm").valid()) {
                        validator.focusInvalid(); // Move focus to first invalid field
                        event.preventDefault(); // Prevent form submission if invalid
                    }
                });
            });
        </script>

        <!-- Initialize Quill editor -->
        <script>
            var editor = new Quill('#editor', {
                theme: 'snow',
                placeholder: 'Write something...',
                // Any other configuration you need
            });

            var editor2 = new Quill('#editor2', {
                theme: 'snow',
                placeholder: 'Write something...',
                // Any other configuration you need
            });

        </script>

        <script>
            // Toggle file upload section based on media type
            document.getElementById('media_type').addEventListener('change', function() {
                const mediaType = this.value;

                if (mediaType === 'VIDEO') {
                    document.getElementById('image-upload-section').style.display = 'none';
                    document.getElementById('youtube-upload-section').style.display = 'none';
                    document.getElementById('video-upload-section').style.display = 'block';
                } else if (mediaType === 'IMAGE') {
                    document.getElementById('image-upload-section').style.display = 'block';
                    document.getElementById('video-upload-section').style.display = 'none';
                    document.getElementById('youtube-upload-section').style.display = 'none';
                } else if (mediaType === 'YOUTUBE') {
                    document.getElementById('youtube-upload-section').style.display = 'block';
                    document.getElementById('image-upload-section').style.display = 'none';
                    document.getElementById('video-upload-section').style.display = 'none';
                } else {
                    // In case no option is selected, hide both sections
                    document.getElementById('image-upload-section').style.display = 'none';
                    document.getElementById('video-upload-section').style.display = 'none';
                    document.getElementById('youtube-upload-section').style.display = 'none';
                }
            });

            // Initialize with default setting based on current selection (if any)
            document.addEventListener('DOMContentLoaded', function() {
                const mediaType = document.getElementById('media_type').value;

                if (mediaType === 'VIDEO') {
                    document.getElementById('video-upload-section').style.display = 'block';
                    document.getElementById('image-upload-section').style.display = 'none';
                    document.getElementById('youtube-upload-section').style.display = 'none';
                } else if (mediaType === 'IMAGE') {
                    document.getElementById('image-upload-section').style.display = 'block';
                    document.getElementById('video-upload-section').style.display = 'none';
                    document.getElementById('youtube-upload-section').style.display = 'none';
                } else if (mediaType === 'YOUTUBE') {
                    document.getElementById('image-upload-section').style.display = 'none';
                    document.getElementById('video-upload-section').style.display = 'none';
                    document.getElementById('youtube-upload-section').style.display = 'block';
                } else {
                    document.getElementById('image-upload-section').style.display = 'none';
                    document.getElementById('video-upload-section').style.display = 'none';
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.select2').select2({
                    placeholder: "Choose ...",
                    allowClear: true
                });
            });
        </script>

        <script>

            $(document).ready(function() {
                $('.select2').select2();  // Initialize on page load
                // Reinitialize on modal open (if dropdown is inside a modal)
                $('#editCourseModal').on('shown.bs.modal', function() {
                    $('.select2').select2();
                });
                // Reinitialize if dropdown is loaded dynamically
                $(document).on('DOMNodeInserted', function() {
                    $('.select2').select2();
                });
            });
        </script>


    </body>

</html>
