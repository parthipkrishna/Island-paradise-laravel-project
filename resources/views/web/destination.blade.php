@extends('web.layouts.layout')
@section('destination-page')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lakshadweep Destinations | Agatti, Bangaram & Kavaratti</title>

  <meta name="description" content="Discover Agatti, Bangaram, and Kavaratti Islands—turquoise lagoons, coral reefs, water sports, and serene beaches in Lakshadweep's top destinations.">

  <meta name="keywords" content="bioluminescent beach Bangaram, tropical island getaways, Lakshadweep destinations">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://iplakshadweep.com/destinations">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Lakshadweep Destinations | Agatti, Bangaram & Kavaratti">
  <meta property="og:description" content="Explore the best of Lakshadweep—Agatti, Bangaram, and Kavaratti. Adventure, nature, and island serenity await you.">
  <meta property="og:image" content="https://iplakshadweep.com/assets/img/logo-light.png">
  <meta property="og:url" content="https://iplakshadweep.com/destinations">
  <meta property="og:type" content="website">
@endsection
@section('destination')

<div class="section-title-page area-bg area-bg_dark area-bg_op_60">
            <div class="area-bg__inner">
                <div class="container text-center mt-5">
                    <h1 class="b-title-page">Our Destinations</h1>
                    
                    <!-- end .breadcrumb-->

                </div>
            </div>
        </div>

<div class="l-main-content">
    <div class="ui-decor ui-decor_mirror ui-decor_sm-h bg-primary"></div>
    <div class="container">
        <div class="fl--events-wrap">
            @forelse($destinations as $destination)
                <div class="fl--events-featured-content-vc">
                    <div class="fl-events--featured-post post-209 events type-events status-publish has-post-thumbnail hentry"  data-aos="fade-right">
                        <div class="fl-events-left-content col-md-6">
                            <div class="image-wrapper">
                                <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" class="fixed-image">
                            </div>
                        </div>
                        <div class="fl-events-right-content col-md-6">
                            <h3 class="fl-entry-title">{{ $destination->name }}</h3>
                            <div class="fl-events-excerpt">
                                <p>{{ $destination->short_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">No destinations available.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
