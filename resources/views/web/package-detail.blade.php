@extends('web.layouts.layout')
@section('details')

<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
            <div class="area-bg__inner">
                <div class="container text-center mt-5">
                    <h1 class="b-title-page">package Details</h1>
                    
                    <!-- end .breadcrumb-->

                </div>
            </div>
        </div>

<div class="l-main-content">
    <div class="ui-decor ui-decor_sm-h ui-decor_mirror bg-primary"></div>
    <div class="container">
        <section class="b-goods-f">
            <div class="row">
                <div class="col-lg-8">
                <div class="b-goods-f__slider">
    @if($packageDetail && $packageDetail->media->isNotEmpty())
        <!-- Main Slider (Large Image) -->
        <div class="ui-slider-main js-slider-for" data-aos="fade-up" >
            @foreach($packageDetail->media as $media)
                <img class="slider-main-image" src="{{ Storage::url($media->media_url) }}" alt="Package Image"/>
            @endforeach
        </div>

        <!-- Thumbnail Navigation (Smaller Images) -->
        <div class="ui-slider-nav js-slider-nav">
            @foreach($packageDetail->media as $media)
                <img class="slider-thumbnail" src="{{ Storage::url($media->media_url) }}" alt="Package Image Thumbnail"/>
            @endforeach
        </div>
    @else
        <p>No images available</p>
    @endif
</div>
<h3>{{ $packageDetail->package->name ?? 'N/A' }}</h3>
                    <h5 class="description-grey">{{ $packageDetail->package->short_description ?? 'N/A' }}</h5>
                    
                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="inclusion-tab" data-toggle="tab" href="#inclusion" role="tab">Inclusion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="exclusion-tab" data-toggle="tab" href="#exclusion" role="tab">Exclusion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="note-tab" data-toggle="tab" href="#note" role="tab">Note</a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- Overview Tab -->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <div class="ui-accordion accordion" id="accordion-2">
                                @php 
                                    $days = explode('Day', $packageDetail->description ?? 'No details available');
                                @endphp

                                @foreach($days as $index => $point)
                                    @if(!empty(trim($point)))
                                        @php
                                            $dayNumber = $index; // Generate "Day1", "Day2", etc.
                                            $cleanedPoint = preg_replace('/^\d+:\s*/', '', trim($point)); // Remove number at the beginning
                                        @endphp
                                        <div class="card">
                                            <div class="card-header" id="heading{{ $index }}">
                                                <h3 class="mb-0">
                                                    <button class="ui-accordion__links collapsed" type="button" data-toggle="collapse" 
                                                        data-target="#collapse{{ $index }}" aria-expanded="false" 
                                                        aria-controls="collapse{{ $index }}">
                                                        <span class="ui-accordion__numbers">Day{{ $dayNumber }}</span>
                                                        <i class="ic fas fa-chevron-down"></i>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="collapse{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}" data-parent="#accordion-2">
                                                <div class="card-body">
                                                    {{ $cleanedPoint }} <!-- Shows description without the number -->
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- Inclusion Tab -->
                                        <div class="tab-pane fade" id="inclusion" role="tabpanel">
                                            <ul class="list-services" style="background-color: #d4edda; padding: 15px; border-radius: 5px; list-style: none;"> <!-- Green Background -->
                                                @php
                                                    $inclusions = array_filter(explode('.', $packageDetail->inclusion ?? 'No inclusions listed'), 'trim');
                                                @endphp
                                                @if(count($inclusions) > 0)
                                                    @foreach($inclusions as $inclusion)
                                                        <li style="margin-bottom: 5px;">
                                                            <i class="fa fa-check text-success"></i> {{ trim($inclusion) }}
                                                        </li> <!-- Green Tick Mark -->
                                                    @endforeach
                                                @else
                                                    <li>No inclusions listed</li>
                                                @endif
                                            </ul>
                                        </div>

                                        <!-- Exclusion Tab -->
                                        <div class="tab-pane fade" id="exclusion" role="tabpanel">
                                            <ul class="list-services" style="background-color: #f8d7da; padding: 15px; border-radius: 5px; list-style: none;"> <!-- Red Background -->
                                                @php
                                                    $exclusions = array_filter(explode('.', $packageDetail->exclusion ?? 'No exclusions listed'), 'trim');
                                                @endphp
                                                @if(count($exclusions) > 0)
                                                    @foreach($exclusions as $exclusion)
                                                        <li style="margin-bottom: 5px;">
                                                            <i class="fa fa-times text-danger"></i> {{ trim($exclusion) }}
                                                        </li> <!-- Red Cross Mark -->
                                                    @endforeach
                                                @else
                                                    <li>No exclusions listed</li>
                                                @endif
                                            </ul>
</div>
<!-- Note Tab -->
                        <div class="tab-pane fade" id="note" role="tabpanel">
                            <ul class="list-services">
                                @foreach(explode(',', $packageDetail->note ?? 'No additional notes') as $note)
                                    @if(!empty(trim($note)))
                                        <li>{{ trim($note) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4" data-aos="fade-up">
                    <aside class="l-sidebar">
                        <div class="widget-2 section-sidebar bg-gray">
                            <h3 class="widget-title-2">
                                <span class="widget-title__inner">Book Now</span>
                            </h3>
                            <div class="widget-content">
                                <div class="widget-inner">
                                <form action="{{ route('bookingweb.store') }}" method="POST"  onsubmit="resetForm(event)">
                                    @csrf

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="package" value="{{ optional($packageDetail->package)->name }}">

                                    <div class="form-group">
                                        <input class="form-control" name="first_name" placeholder="First Name" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input class="form-control" type="tel" name="phone" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="travelers_count" placeholder="Peoples Count" required min="1">
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                     
                                    <div class="row">
                                        <!-- Start Date Field -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="start_date" class="description-grey">Start Date</label>
                                                <input class="form-control px-3" type="date" name="start_date" id="start_date_1" required>
                                            </div>
                                        </div>

                                        <!-- End Date Field -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="end_date" class="description-grey">End Date</label>
                                                <input class="form-control px-3" type="date" name="end_date" id="end_date_1" required>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <!-- Accommodation -->
                                    <h6 class="mt-1">Accommodation</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="no_of_rooms" placeholder="No of Rooms" min="1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="no_of_adults" placeholder="No of Adults" min="1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="no_of_child_6_11" placeholder="No of Children (6-11 Yrs)" min="0">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="no_of_child_11_above" placeholder="No of Children (11 & Above)" min="0">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Permit Status -->
                                    
                                    
                                   
                                    
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" name="message" placeholder="Remarks" required></textarea>
                                    </div>
                                    
                                    <button class="btn btn-secondary w-100" type="submit">Book</button>
                                </form>

                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
