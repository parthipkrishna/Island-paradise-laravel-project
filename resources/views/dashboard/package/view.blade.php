@extends('layouts.dashboard')
@section('view-package')


    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Island Paradise</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Package</a></li>
                        <li class="breadcrumb-item active">Package Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Package Details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @foreach ($package_main as $item)

                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h4 class="page-title">{{ $item['title'] }}</h4>
                            </div>

                            <div class="col-sm-6" style="text-align: right;">
                                <a href="" class="action-icon btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#bs-editPackageDetail-modal{{ $item['package_id'] }}"><i class="mdi mdi-square-edit-outline"></i> Edit </a>
                            </div><!-- end col-->
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane show active" id="custom-styles-preview">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Description</label>
                                            <textarea class="form-control" rows="3" name="description" id="example-textarea" required>{{ $item['description'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Inclusion </label>
                                            <textarea class="form-control" rows="3" name="inclusion" id="example-textarea" >{{ $item['inclusion'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Exclusion</label>
                                            <textarea class="form-control" rows="3" name="exclusion" id="example-textarea" >{{ $item['exclusion'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-textarea" class="form-label">Note</label>
                                            <textarea class="form-control" rows="3" name="note" id="example-textarea" >{{ $item['note'] }}</textarea>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->


                        <!-- Edit Modal-->
                        <div class="modal fade" id="bs-editPackageDetail-modal{{ $item['package_id'] }}" tabinrole="dialog" aria-labelledby="editPackageDetailLabel{{ $item['package_id'] }}" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="editPackageDetailLabel{{ $item['package_id'] }}">Edit Package</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('package.detail.add/{id}',$item['package_id']) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-textarea" class="form-label">Description</label>
                                                        <textarea class="form-control" rows="3" name="description" id="example-textarea" required>{{ $item['description'] }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-textarea" class="form-label">Inclusion </label>
                                                        <textarea class="form-control" rows="3" name="inclusion" id="example-textarea" >{{ $item['inclusion'] }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-textarea" class="form-label">Exclusion</label>
                                                        <textarea class="form-control" rows="3" name="exclusion" id="example-textarea" >{{ $item['exclusion'] }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="example-textarea" class="form-label">Note</label>
                                                        <textarea class="form-control" rows="3" name="note" id="example-textarea" >{{ $item['note'] }}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                    @endforeach

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="page-title">Package Media</h4>
                        </div>

                        <div class="col-sm-6" style="text-align: right;">
                            <a href="#" class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#bs-addPackageMedia-modal"><i class="mdi mdi-plus-circle me-2"></i> Add </a>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Media Type</th>
                                    <th style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($package_media as $item)
                                    <tr>
                                        <td class="table-user">
                                            @if ($item->media_url)
                                                <img src="{{ env('STORAGE_URL') . '/' . $item->media_url }}" class="me-2 rounded-circle" style="width: 40px; height: 40px; object-fit: cover;" alt="Image">
                                            @else
                                                <span class="small text-danger">No image available</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="fw-semibold">{{ $item->media_type }}</span>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#delete-alert-modal{{ $item->id}}">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>


                                    <!-- Delete Alert Modal  -->
                                    <div id="delete-alert-modal{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-body p-4">
                                                    <div class="text-center">
                                                        <i class="ri-information-line h1 text-info"></i>
                                                        <h4 class="mt-2">Heads up!</h4>
                                                        <p class="mt-3">Do you want to delete this Media Item?</p>
                                                        <form action="{{ route('packagemedia.delete/{id}', $item->id) }}" method="POST">
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


                                <!-- Add PackageMedia Modal -->
                                <div class="modal fade" id="bs-addPackageMedia-modal" tabindex="-1" role="dialog" aria-labelledby="addPackageMediaLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addPackageMediaLabel">Add Package Media</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" method="POST" action="{{ route('packagemedia.store/{id}',$package->id) }}" enctype="multipart/form-data" novalidate>
                                                    @csrf
                                                    <div class="row">
                                                        <!-- Image Upload Section -->
                                                        <div class="mb-3" id="image-upload-section" >
                                                            <label for="image" class="form-label">Image</label>
                                                            <div class="dropzone" id="ImageDropzone" data-plugin="dropzone">
                                                                <div class="fallback">
                                                                    <input name="image" type="file" accept="image/*" />
                                                                </div>
                                                                <div class="dz-message needsclick">
                                                                    <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                                                                    <h4>Drop files here or click to upload.</h4>
                                                                </div>
                                                            </div>
                                                            <!-- Preview -->
                                                            <div class="dropzone-previews mt-3" id="file-previews"></div>
                                                        </div>
                                                    </div>

                                                    <!-- Submit Button -->
                                                    <div class="text-start">
                                                        <button type="reset" class="btn btn-danger">Reset</button>
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
