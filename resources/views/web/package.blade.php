@extends('web.layouts.layout')
@section('tours-packages')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lakshadweep Tour Packages | Agatti, Bangaram, Kavaratti</title>

  <meta name="description" content="Explore Lakshadweep with our curated island tour packages. Book Bangaram huts, Agatti adventures, and Kavaratti escapes with water sports and beach stays.">

  <meta name="keywords" content="Agatti island package, island hopping Lakshadweep, luxury beach huts, AC cottage Lakshadweep">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://iplakshadweep.com/package">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Lakshadweep Tour Packages | Agatti, Bangaram, Kavaratti">
  <meta property="og:description" content="Discover Lakshadweep with luxury beach stays, AC cottages, water adventures, and island tours to Agatti, Bangaram, and Kavaratti.">
  <meta property="og:image" content="https://iplakshadweep.com/assets/img/logo-light.png">
  <meta property="og:url" content="https://iplakshadweep.com/package">
  <meta property="og:type" content="website">
@endsection
@section('tours&packages')

<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
        <div class="container text-center mt-5">
            <h1 class="b-title-page">Packages</h1>
        </div>
    </div>
</div>

<div class="l-main-content">
    <div class="container">
        <div class="ui-decor ui-decor_mirror ui-decor_sm-h bg-primary"></div>

        <div class="fl--events-wrap">
            @forelse($packages as $package)
                <div class="fl--events-featured-content-vc">
                    <div class="fl-events--featured-post post-209 events type-events status-publish has-post-thumbnail hentry" data-aos="fade-left">
                        <div class="fl-events-left-content col-md-6">
                            <div class="image-wrapper">
                                <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" class="package-image">
                            </div>
                        </div>
                        <div class="fl-events-right-content col-md-6">
                            <h3 class="fl-entry-title">
                                <a href="{{ route('details', ['id' => $package->id]) }}" class="text-decoration-none">
                                    {{ $package->name }}
                                </a>
                            </h3>
                            <div class="fl-events-excerpt">
                                <p class="text-muted">{{ $package->short_description }}</p>
                            </div>
                            <div class="fl-events-excerpt">
                                <p class="text-muted">{{ $package->locations }}</p>
                            </div>
                            @if(!empty($package->price) && is_numeric($package->price) && $package->price > 0)
                                <div class="fl-events-excerpt d-flex align-items-center mb-3">
                                    <span class="fw-bold text-success fs-4 description-grey ">Price: 
                                        ₹ {{ number_format((float) $package->price) }}
                                    </span>
                                </div>
                            @else
                                <div class="fl-events-excerpt d-flex align-items-center mb-3 description-grey">
                                    <span class="fw-bold text-danger fs-4 description-grey ">
                                    Get a Custom Quote
                                    </span>
                                </div>
                            @endif

                            <a class="btn btn-primary btn-sm" href="{{ route('details', ['id' => $package->id]) }}">
                                View Details
                            </a>
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

@endsection