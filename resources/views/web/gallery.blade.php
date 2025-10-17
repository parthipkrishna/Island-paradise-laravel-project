@extends('web.layouts.layout')
@section('gallery-page')
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery | Explore the Beauty of Lakshadweep Islands</title>
  <meta name="description" content="Discover the breathtaking beauty of Lakshadweep through our gallery. View stunning photos of beaches, marine life, resorts, and island adventures.">
  <meta name="keywords" content="Lakshadweep gallery, Lakshadweep photos, Lakshadweep islands images, Lakshadweep travel pictures">
  <!-- Canonical URL -->
  <link rel="canonical" href="https://iplakshadweep.com/gallery">
  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Lakshadweep Photo Gallery | Island Paradise">
  <meta property="og:description" content="View scenic images of Lakshadweep's islands, beaches, and tourist experiences.">
  <meta property="og:url" content="https://iplakshadweep.com/gallery">
  <meta property="og:type" content="website">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Lakshadweep Photo Gallery | Island Paradise">
  <meta name="twitter:description" content="Explore high-quality images from Lakshadweep tours and experiences.">
@endsection
@section('Gallery')

<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
    <div class="area-bg__inner">
        <div class="container text-center mt-5">
            <h1 class="b-title-page">Gallery</h1>
        </div>
    </div>
</div>

<div class="l-main-content">
    <div class="ui-decor ui-decor_mirror ui-decor_sm-h bg-primary"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="section-gallery">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="ui-title" data-aos="fade-up">Picture Gallery</h2>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <p data-aos="fade-up">Step into our gallery and explore the vibrant beauty of island life.</p>
                                    <img src="{{ asset('assets/img/decore03.png') }}" alt="photo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ui-gallery js-zoom-gallery">
                        @if($galleryItems->isEmpty())
                            <p class="text-center">No images found.</p>
                        @else
                            <div class="row no-gutters">
                                @foreach($galleryItems as $item)
                                    @if($item->image)
                                        <div class="col-lg-3 col-sm-6"data-aos="fade-up">
                                            <a class="ui-gallery__img js-zoom-gallery__item" href="{{ asset('storage/' . $item->image) }}">
                                                <img class="img-scale" src="{{ asset('storage/' . $item->image) }}" alt="photo">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="row no-gutters mt-3">
                                @foreach($galleryItems as $item)
                                    @if($item->video)
                                        <div class="col-lg-6 col-sm-12 mb-3">
                                            <video controls class="w-100">
                                                <source src="{{ asset('storage/' . $item->video) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Pagination Links -->
                            <div class="justify-content-center text-center mt-4">
                                {{ $galleryItems->links('pagination::bootstrap-4') }}
                            </div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
