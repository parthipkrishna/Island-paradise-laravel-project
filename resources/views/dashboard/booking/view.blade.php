@extends('layouts.dashboard')
@section('view-booking')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Island Paradise</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Booking</a></li>
                        <li class="breadcrumb-item active">Booking Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Booking Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="page-title">Booking Details</h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="booking_type" class="form-label">Booking Type</label>
                                        <input type="text" name="booking_type" value="{{ $booking->booking_type }}" class="form-control"  id="booking_type"  placeholder="Enter Number of Days" disabled>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">User Name</label>
                                        <input type="text" name="name"  value="{{ $user->name}}" class="form-control"  id="name"  placeholder="Enter booking name"  required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Booking Phone Number</label>
                                        <input type="text" name="phone_number"  value="{{ $user->phone_number }}" class="form-control"  id="phone_number"  placeholder="Enter booking phone_number" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="number_of_days" class="form-label">Number of Days</label>
                                        <input type="text" name="number_of_days" value="{{ $booking->number_of_days }}" class="form-control"  id="number_of_days"  placeholder="Enter Number of Days" >
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="number_of_days" class="form-label">Permit Status</label>
                                        <input type="text" name="number_of_days" value="{{ $booking->permit_status }}" class="form-control"  id="number_of_days"  placeholder="Enter Number of Days" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="number_of_days" class="form-label">Permit application Number</label>
                                        <input type="text" name="number_of_days" value="{{ $booking->permit_application_no  ?? 0 }}" class="form-control"  id="number_of_days"  placeholder="Enter Number of Days" >
                                    </div>
                                    
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Booking Package</label>
                                        <input type="text" name="title"  value="{{ $package->title }}" class="form-control"  id="title"  placeholder="Enter booking title" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label"> Email</label>
                                        <input type="text" name="email"  value="{{ $user->email }}" class="form-control"  id="email"  placeholder="Enter booking email"  required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="start_date" class="form-label">booking started date</label>
                                        <input type="date" name="start_date" value="{{ $booking->start_date }}" class="form-control"  id="start_date"  placeholder="Enter booking started date" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="travelers_count" class="form-label">Number of Travelrs</label>
                                        <input type="text" name="travelers_count" value="{{ $booking->travelers_count  ?? 0}}" class="form-control"  id="travelers_count"   required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="number_of_days" class="form-label">Number of Adults</label>
                                        <input type="text" name="number_of_days" value="{{ $booking->no_of_adults ?? 0}}" class="form-control"  id="number_of_days"  placeholder="Enter Number of Days" >
                                    </div>
                                    
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Subject</label>
                                        <input type="text" name="subject"  value="{{ $booking->subject }}" class="form-control"  id="name"  placeholder="Enter booking name"  required>

                                    </div>
                                 
                                    <div class="mb-3">
                                        <label for="example-textarea" class="form-label">Note</label>
                                        <input type="text" name="note"  value="{{ $booking->note }}" class="form-control"  id="name"  placeholder="Enter booking name"  required>

                                    </div>
                                    <div class="mb-3">
                                        <label for="end_date" class="form-label">booking end date</label>
                                        <input type="date" name="end_date" value="{{ $booking->end_date }}" class="form-control"  id="end_date"  placeholder="Enter booking end date" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="number_of_days" class="form-label">Number of child 11 above</label>
                                        <input type="text" name="number_of_days" value="{{ $booking->no_of_child_11_above ?? 0 }}" class="form-control"  id="number_of_days"  placeholder="Enter Number of Days" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="number_of_days" class="form-label">Permit application Number</label>
                                        <input type="text" name="number_of_days" value="{{ $booking->permit_application_no  ?? 0 }}" class="form-control"  id="number_of_days"  placeholder="Enter Number of Days" >
                                    </div>
                                    
                                    

                                </div>
                            </div>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->





    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="page-title">Note Details</h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="custom-styles-preview">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Note</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if ($notes->isEmpty())
                                                <tr>
                                                    <td colspan="3" class="text-center">No Notes Found</td>
                                                </tr>
                                            @else
                                                @foreach ($notes as $index => $item)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $item->note }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y, h:i A') }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end preview -->
                    </div> <!-- end tab-content -->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->



@endsection
