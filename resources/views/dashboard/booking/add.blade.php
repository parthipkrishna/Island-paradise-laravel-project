@extends('layouts.dashboard')
@section('add-booking')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Island Paradise</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Booking</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Booking</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Add Booking</h4>
                    <div class="row justify-content-center">
                         {{-- Display general messages --}}
                         @if ($message = session()->get('message'))
                            <div class="alert alert-success text-center w-75">
                                <h6 class="text-center fw-bold">{{ $message }}...</h6>
                            </div>
                        @endif
                        {{-- Display validation error messages --}}
                        @if ($errors->any())
                            <div class="alert alert-danger text-center w-75">
                                @foreach ($errors->all() as $error)
                                    <h6 class="text-center fw-bold">{{ $error }}</h6>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" id="bookingForm" method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">User Name<span style="color:red">*</span></label>
                                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Enter name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="phone_number" class="form-label">Phone Number</label>
                                            <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" id="phone_number" placeholder="Enter phone number" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">Package<span style="color:red">*</span></label>
                                            <select class="form-select mb-3" name="package_id" required>
                                                <option selected>Select Package</option>
                                                @foreach ($packages as $item)
                                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label"> Email</label>
                                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Enter email" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Subject</label>
                                            <textarea class="form-control" name="subject" id="example-textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Note</label>
                                            <textarea class="form-control" name="note" id="example-textarea"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="number_of_days" class="form-label">Number of Days</label>
                                            <input type="text" name="number_of_days" value="{{ old('number_of_days') }}" class="form-control" id="number_of_days" placeholder="Enter Number of Days">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="start_date" class="form-label">Booking Start Date</label>
                                            <input type="date" name="start_date" value="{{ old('start_date') }}" class="form-control" id="start_date" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="end_date" class="form-label">Booking End Date</label>
                                            <input type="date" name="end_date" value="{{ old('end_date') }}" class="form-control" id="end_date" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="travelers_count" class="form-label">Number of Travelers</label>
                                            <input type="text" name="travelers_count" value="{{ old('travelers_count') }}" class="form-control" id="travelers_count" placeholder="Enter no. of Travelers">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="no_of_rooms" class="form-label">Number of Rooms</label>
                                            <input type="number" name="no_of_rooms" value="{{ old('no_of_rooms') }}" class="form-control" id="no_of_rooms" placeholder="Enter number of rooms">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="no_of_adults" class="form-label">Number of Adults</label>
                                            <input type="number" name="no_of_adults" value="{{ old('no_of_adults') }}" class="form-control" id="no_of_adults" placeholder="Enter number of adults">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="no_of_child_6_11" class="form-label">Children (6-11 Years)</label>
                                            <input type="number" name="no_of_child_6_11" value="{{ old('no_of_child_6_11') }}" class="form-control" id="no_of_child_6_11" placeholder="Enter number of children (6-11 years)">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="no_of_child_11_above" class="form-label">Children (11+ Years)</label>
                                            <input type="number" name="no_of_child_11_above" value="{{ old('no_of_child_11_above') }}" class="form-control" id="no_of_child_11_above" placeholder="Enter number of children (11+ years)">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="permit_status" class="form-label">Permit Status</label>
                                            <select class="form-select" name="permit_status">
                                                <option value="">Select Permit Status</option>
                                                <option value="Applied">Applied</option>
                                                <option value="Not Applied">Not Applied</option>
                                                <option value="LTC">LTC</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="permit_application_no" class="form-label">Permit Application No.</label>
                                            <input type="text" name="permit_application_no" value="{{ old('permit_application_no') }}" class="form-control" id="permit_application_no" placeholder="Enter permit application number">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status: <span style="color:red">*</span></label></br/>
                                            <input type="checkbox" name="status" id="switch3" value="1" checked data-switch="success" onchange="this.value = this.checked ? 1 : 0;">
                                            <label for="switch3" data-on-label="" data-off-label=""></label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-start">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>

                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->


@endsection
