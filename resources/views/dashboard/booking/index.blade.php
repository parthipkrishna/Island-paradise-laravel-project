@extends('layouts.dashboard')
@section('list-booking')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Island Paradise</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Booking</li>
                    </ol>
                </div>
                <h4 class="page-title">Booking</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="row mb-2 align-items-end">
    <!-- Add Button -->
                        <div class="col-md-2">
                            <a href="{{ route('booking.add') }}" class="btn btn-danger w-100">
                                <i class="mdi mdi-plus-circle me-2"></i> Add
                            </a>
                        </div>
                        <!-- Date Filter Form -->
                        <div class="col-md-6">
                            <form method="GET" action="{{ route('booking') }}">
                                <div class="row g-2">
                                    @php
                                        $startDate = request('start_date', now()->toDateString()); 
                                        $endDate = request('end_date', now()->addDays(30)->toDateString());
                                    @endphp

                                    <div class="col-md-5">
                                        <input type="date" id="start_date" name="start_date" class="form-control" value="{{ $startDate }}" placeholder="From Date">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $endDate }}" placeholder="To Date">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary w-100">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Export Button -->
                        <div class="col-md-3 text-end">
                            <a href="{{ route('export') }}" class="btn btn-light w-100">
                                <i class="mdi mdi-download"></i> Export
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                                <tr>
                                    <th >Tourist Name</th>
                                    <th>Package Name</th>
                                    <th>Package Price</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>Checkin Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking_main as $user)
                                    <tr>
                                        <td>{{ $user['tourist_name'] }}</td>
                                        <td>
                                            <a href="{{ route('booking.view/{id}',$user['id']) }}" >
                                                <span class="fw-semibold">{{ Str::limit($user['package_name'], 25, '...') }}</span>
                                            </a>
                                        </td>
                                        <td>{{ $user['package_price'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['phone_number'] }}</td>
                                        <td>{{ $user['start_date'] ??'N/A' }}</td>

                                        <td>
                                            @if($user['status'] == 'pending')
                                                <button type="button" class="btn btn-soft-danger rounded-pill">Pending</button>
                                            @elseif($user['status'] == 'confirmed')
                                                <button type="button" class="btn btn-soft-success rounded-pill">Confirmed</button> <!-- Green -->
                                            @elseif($user['status'] == 'upcoming')
                                                <button type="button" class="btn btn-soft-primary rounded-pill">Upcoming</button>
                                            @elseif($user['status'] == 'inprogress')
                                                <button type="button" class="btn btn-soft-warning rounded-pill">Inprogress</button> <!-- Yellow -->
                                            @elseif($user['status'] == 'completed')
                                                <button type="button" class="btn btn-soft-purple rounded-pill">Completed</button> <!-- Purple -->
                                            @elseif($user['status'] == 'canceled')
                                                <button type="button" class="btn btn-soft-danger rounded-pill">Canceled</button> <!-- Red -->
                                            @endif
                                        </td>

                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#bs-editBooking-modal{{ $user['id'] }}">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-alert-modal{{ $user['id'] }}">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal-->
                                    <div class="modal fade" id="bs-editBooking-modal{{ $user['id'] }}" tabindex="-1" role="dialog" aria-labelledby="editBookingLabel{{ $user['id'] }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="editBookingLabel{{ $user['id'] }}">Edit Booking</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('booking.update/{id}', $user['id']) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="mb-3">
                                                                <label for="booking-status" class="form-label">Booking Status</label>
                                                                <select class="form-select" id="booking-status" name="status">
                                                                    <option value="pending" {{ $user['status'] == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                    <option value="confirmed" {{ $user['status'] == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                                    <option value="upcoming" {{ $user['status'] == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                                                                    <option value="inprogress" {{ $user['status'] == 'inprogress' ? 'selected' : '' }}>In progress</option>
                                                                    <option value="completed" {{ $user['status'] == 'completed' ? 'selected' : '' }}>Completed</option>
                                                                    <option value="canceled" {{ $user['status'] == 'canceled' ? 'selected' : '' }}>Canceled</option>
                                                                </select>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="example-textarea" class="form-label">Note</label>
                                                                <textarea class="form-control" value="{{ old('note') }}"  name="note"  rows="3" id="example-textarea" ></textarea>
                                                            </div>

                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!-- Delete Alert Modal  -->
                                    <div id="delete-alert-modal{{ $user['id'] }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-body p-4">
                                                    <div class="text-center">
                                                        <i class="ri-information-line h1 text-info"></i>
                                                        <h4 class="mt-2">Heads up!</h4>
                                                        <p class="mt-3">Do you want to delete this Booking?</p>
                                                        <form action="{{ route('booking.delete/{id}', $user['id']) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger my-2">Delete</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
