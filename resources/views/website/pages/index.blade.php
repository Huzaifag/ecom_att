@extends('website.layout.main')
@section('content')
    <section class="hero-section container-fluid my-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-3 categories" id="category-dropdown-content">
                @include('website.component.categories-list')
            </div>
            <div class="col-md-12 hero-image" id="hero-image">
                <img src="{{ asset('/images/website/hero.png') }}" alt="Hero Image" >
            </div>
        </div>
        <x-website.service-cards />
    </section>
    <section class="category-items container-fluid mb-4">
        <x-website.category-items title="Shop By Category" />
    </section>
    <section class="new-arrivals container-fluid mb-4">
        <x-website.new-arrivals title="New Arrival" />
    </section>
    <section class="featured-products container-fluid mb-4"
        style="background-image: url('{{ asset('images/website/vector12.png') }}'); background-size: cover; background-position: center;">
        <x-website.featured-products title="Promo Product" />
    </section>
    <section class="best-seller-products container-fluid mb-4">
        <x-website.best-seller-products title="Best Sellers" />
    </section>
    <section class="top-rated-products container-fluid mb-4">
        <x-website.top-rated-products title="Top Rated" />
    </section>
    <section class="hero-section container-fluid my-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-12 hero-image"
                style="background-image: url({{ asset('/images/website/offer-banner.png') }}); background-size: cover; background-position: center; min-height: 470px; border-radius: 15px;">
                <div class="decription-section">
                    <h3>GET 30% OFF YOUR ORDER OF $100</h3>
                    <h2>BEST MEN’S COLLECTION</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <button>Buy Now</button>
                </div>
            </div>
        </div>
    </section>

    <section class="top-rated-products container-fluid mb-4">
        <x-website.top-rated-products title="Special Offer" />
    </section>
    <section class="newsletter">
        @include('website.component.newsletter')
    </section>    
@endsection
