@extends('layouts.dashboard')
@section('list-package')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Island Paradise</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Packages</li>
                    </ol>
                </div>
                <h4 class="page-title">Packages</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-5">
                            <a href="{{ route('package.add') }}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add </a>
                        </div>
                        <div class="col-sm-7">
                        </div><!-- end col-->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                                <tr>
                                    <th >Package</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Short Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $item)
                                    <tr>
                                        <td class="table-user">
                                            @if ($item->image)
                                                <img src="{{ env('STORAGE_URL') . '/' . $item->image }}" class="me-2 rounded-circle">
                                            @else
                                                <span class="small text-danger">No Image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('package.view/{id}',$item->id) }}" >
                                                {{ $item->name }}
                                            </a>
                                        </td>
                                        <td>{{ Str::limit($item->title, 25, '...') }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ Str::limit($item->short_description, 25, '...') }}</td>
                                        <td>
                                            @if($item->status == 1)
                                                <button type="button" class="btn btn-soft-success rounded-pill">Active</button>
                                            @else
                                                <button type="button" class="btn btn-soft-danger rounded-pill">Deactive</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#bs-editPackage-modal{{ $item->id }}">
                                                <i class="mdi mdi-square-edit-outline"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-alert-modal{{ $item->id }}">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal-->
                                    <div class="modal fade" id="bs-editPackage-modal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="editPackageLabel{{ $item->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="editPackageLabel{{ $item->id }}">Edit Package</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('package.update/{id}', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <!-- Center Name -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Name</label>
                                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="title" class="form-label">title</label>
                                                                    <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Current Image</label><br>
                                                                    @if ($item->image)
                                                                        <img src="{{ env('STORAGE_URL') . '/' . $item->image }}" class="me-2 img-fluid avatar-xl">
                                                                    @else
                                                                        <span class="small text-danger">No Image</span>
                                                                    @endif
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Upload New Image</label>
                                                                    <input type="file" name="image" class="form-control">
                                                                </div>

                                                            </div>

                                                            <!-- Address -->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="price" class="form-label">Package Price</label>
                                                                    <input type="text" name="price"  value="{{ $item->price }}" class="form-control"  id="price"  placeholder="Enter Package Price " >
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="price" class="form-label">price</label>
                                                                    <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="location" class="form-label">locations</label>
                                                                    <input type="text" class="form-control" id="location" name="locations" value="{{ $item->locations }}">
                                                                </div>


                                                                <div class="mb-3">
                                                                    <label for="example-textarea" class="form-label">Short Description</label>
                                                                    <textarea class="form-control"   name="short_description" rows="4" id="example-textarea" required>{{ $item->short_description }}</textarea>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="status" class="form-label">Status: </label></br/>
                                                                    <input type="hidden" name="status" value="0">
                                                                    <input type="checkbox" name="status" id="switch{{ $item->id }}" value="1"  {{ $item->status == 1 ? 'checked' : '' }}  data-switch="success" />
                                                                    <label for="switch{{ $item->id }}" data-on-label="" data-off-label=""></label>
                                                                </div>

                                                            </div>
                                                        </div>


                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!-- Delete Alert Modal  -->
                                    <div id="delete-alert-modal{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-body p-4">
                                                    <div class="text-center">
                                                        <i class="ri-information-line h1 text-info"></i>
                                                        <h4 class="mt-2">Heads up!</h4>
                                                        <p class="mt-3">Do you want to delete this Package?</p>
                                                        <form action="{{ route('package.delete/{id}', $item->id) }}" method="POST">
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
