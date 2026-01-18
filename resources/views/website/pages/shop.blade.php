@extends('website.layout.main')
@section('content')
    <section class="hero-section container-fluid my-4">
        <div class="row justify-content-between align-items-start gy-4">
            <!-- Filters Sidebar -->
            <div class="col-md-3 filters bg-white p-4 shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold mb-0">Filter</h5>
                    <a href="#" class="text-muted small">Reset</a>
                </div>

                <!-- Price Range -->
                <div class="pb-4 border-bottom">
                    <h6 class="fw-semibold mb-3">Price</h6>
                    <input type="range" class="form-range custom-range" min="0" max="500" value="250"
                        id="priceRange">
                    <div class="text-muted small fw-semibold mt-2">
                        Price range from 0৳ to 500৳
                    </div>
                </div>

                <!-- Collapsible Sizes -->
                <div class="mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 collapsible-header" data-bs-toggle="collapse" data-bs-target="#collapseSizes" aria-expanded="true" aria-controls="collapseSizes" role="button">
                        <h6 class="fw-semibold mb-0">Sizes</h6>
                        <i class="bi bi-dash-lg collapse-icon"></i>
                    </div>
                    <div class="collapse show" id="collapseSizes">
                        <div class="d-flex flex-column gap-2">
                            @foreach (['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size)
                                <div class="form-check">
                                    <input class="form-check-input custom-checkbox" type="checkbox" value="{{ $size }}"
                                        id="size{{ $size }}">
                                    <label class="form-check-label"
                                        for="size{{ $size }}">
                                        {{ $size }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Collapsible Color -->
                <div class="mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-3 collapsible-header" data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="true" aria-controls="collapseColor" role="button">
                        <h6 class="fw-semibold mb-0">Color</h6>
                        <i class="bi bi-dash-lg collapse-icon"></i>
                    </div>
                    <div class="collapse show" id="collapseColor">
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorBlack" autocomplete="off">
                                <label class="color-swatch black" for="colorBlack" title="Black"></label>
                                <small class="d-block text-center text-muted mt-1">Black</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorRed" autocomplete="off">
                                <label class="color-swatch red" for="colorRed" title="Red"></label>
                                <small class="d-block text-center text-muted mt-1">Red</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorWhite" autocomplete="off">
                                <label class="color-swatch white" for="colorWhite" title="White"></label>
                                <small class="d-block text-center text-muted mt-1">White</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorPurple" autocomplete="off">
                                <label class="color-swatch purple" for="colorPurple" title="Purple"></label>
                                <small class="d-block text-center text-muted mt-1">Purple</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorYellow" autocomplete="off">
                                <label class="color-swatch yellow" for="colorYellow" title="Yellow"></label>
                                <small class="d-block text-center text-muted mt-1">Yellow</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorBrown" autocomplete="off">
                                <label class="color-swatch brown" for="colorBrown" title="Brown"></label>
                                <small class="d-block text-center text-muted mt-1">Brown</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorPink" autocomplete="off">
                                <label class="color-swatch pink" for="colorPink" title="Pink"></label>
                                <small class="d-block text-center text-muted mt-1">Pink</small>
                            </div>
                            <div class="color-swatch-wrapper">
                                <input type="checkbox" class="btn-check" id="colorCustom" autocomplete="off">
                                <label class="color-swatch custom" style="background-image: url({{ asset('/images/website/custom.jpg') }})" for="colorCustom" title="Custom"></label>
                                <small class="d-block text-center text-muted mt-1">Custom</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Image / Banner -->
            <div class="col-md-9 hero-image-v2 position-relative">
                <img src="{{ asset('/images/website/hero-2.png') }}" alt="Mega Sale"
                    class="w-100 h-100 object-fit-cover rounded">
            </div>
        </div>
    </section>
    <section class="new-arrivals container-fluid mb-4">
        <x-website.all-products />
    </section>
    <section class="newsletter">
        @include('website.component.newsletter')
    </section>
@endsection

@push('styles')
    <style>
        /* Custom Range Slider - Teal color */
        .custom-range {
            height: 6px;
            background: #e9ecef;
            border-radius: 5px;
        }

        .custom-range::-webkit-slider-thumb {
            background: #008080;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(0, 128, 128, 0.2);
        }

        .custom-range::-moz-range-thumb {
            background: #008080;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: none;
            box-shadow: 0 0 0 4px rgba(0, 128, 128, 0.2);
        }

        /* Custom Checkbox for Sizes */
        .custom-checkbox:checked + label {
            background-color: #008080 !important;
            color: white !important;
            border-color: #008080 !important;
        }

        .custom-checkbox:focus + label {
            box-shadow: 0 0 0 0.2rem rgba(0, 128, 128, 0.25);
        }

        /* Color Swatches */
        .color-swatch {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid transparent;
            display: block;
            cursor: pointer;
            transition: all 0.2s;
        }

        .color-swatch-wrapper input:checked + .color-swatch {
            border-color: #008080;
            box-shadow: 0 0 0 3px rgba(0, 128, 128, 0.3);
            transform: scale(1.1);
        }

        .black { background-color: #000000; }
        .red { background-color: #ff0000; }
        .white { background-color: #ffffff; border: 1px solid #dee2e6; }
        .purple { background-color: #800080; }
        .yellow { background-color: #ffff00; }
        .brown { background-color: #a52a2a; }
        .pink { background-color: #ffc0cb; }
        .custom { 
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
        }


        /* Collapse icon rotation */
        .collapsible-header {
            cursor: pointer;
        }

        .collapse-icon {
            transition: transform 0.3s ease;
            font-weight: bold;
            color: #6c757d;
        }

        .collapsible-header[aria-expanded="false"] .collapse-icon {
            transform: rotate(-90deg);
        }

        .collapsible-header[aria-expanded="true"] .collapse-icon {
            transform: rotate(0deg);
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .filters {
                order: 2;
            }

            .hero-image-v2 {
                order: 1;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Optional: Ensure icon updates correctly (Bootstrap handles it via aria-expanded, but this reinforces)
        document.querySelectorAll('.collapsible-header').forEach(header => {
            header.addEventListener('click', function () {
                const icon = this.querySelector('.collapse-icon');
                if (this.getAttribute('aria-expanded') === 'true') {
                    icon.style.transform = 'rotate(-90deg)';
                } else {
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    </script>
@endpush