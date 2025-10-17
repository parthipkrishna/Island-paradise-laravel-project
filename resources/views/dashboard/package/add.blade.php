@extends('layouts.dashboard')
@section('add-package')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Island Paradise</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Package</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Package</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Add Package</h4>
                    <div class="row justify-content-center">
                        @if ($message = session()->get('message'))
                            <div class="alert alert-success text-center w-75">
                                <h6 class="text-center fw-bold">{{ $message }}...</h6>
                            </div>
                        @endif

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
                            <form class="needs-validation" id="packageForm" method="POST" action="{{ route('package.store') }}" enctype="multipart/form-data"  novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label"> Name</label>
                                            <input type="text" name="name"  value="{{ old('name') }}" class="form-control"  id="name"  placeholder="Enter Name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" name="title"  value="{{ old('title') }}" class="form-control"  id="title"  placeholder="Enter title" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Short Description</label>
                                            <textarea class="form-control" value="{{ old('short_description') }}"  name="short_description" row="3" id="example-textarea" required></textarea>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" name="price"  value="{{ old('price') }}" class="form-control"  id="price"  placeholder="Enter Price " required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="location" class="form-label">Location</label>
                                            <input type="text" name="locations"  value="{{ old('locations') }}" class="form-control"  id="location"  placeholder="Enter Locations " required>
                                        </div>

                                        <div class="mb-3 ">
                                            <label for="image" class="form-label">Upload Image</label>
                                            <input type="file" class="form-control" id="image" name="image" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status: </label></br/>
                                        <input  type="checkbox" name="status"  id="switch3"  value="1"  checked  data-switch="success" onchange="this.value = this.checked ? 1 : 0;" />
                                        <label for="switch3" data-on-label="" data-off-label=""></label>
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

