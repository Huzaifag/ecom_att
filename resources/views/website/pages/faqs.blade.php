@extends('website.layout.main')

@push('styles')
<style>
    /* Custom Styles to match the image exactly */
    .faq-header {
        text-align: center;
        font-weight: 700;
        color: #333;
        margin-bottom: 2rem;
    }

    .faq-banner {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 15px;
        margin-bottom: 3rem;
        /* Fallback background if image fails */
        background-color: #f0f0f0;
    }

    /* Accordion Customization */
    .accordion-item {
        border: 1px solid #e9ecef;
        border-radius: 10px !important;
        margin-bottom: 15px;
        overflow: hidden;
        background: #fff;
    }

    .accordion-button {
        background-color: #fff;
        color: #333;
        font-weight: 600;
        box-shadow: none !important;
        padding: 1.2rem 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .accordion-button:not(.collapsed) {
        color: #333;
        background-color: #fff;
        box-shadow: none;
    }

    /* Hide default Bootstrap arrow */
    .accordion-button::after {
        display: none;
    }

    /* Custom Icon Box */
    .icon-box {
        background-color: #009688; /* Teal color from image */
        color: white;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        font-weight: bold;
        font-size: 18px;
        line-height: 1;
    }

    /* Answer Area */
    .accordion-body {
        background-color: #f0fdf4; /* Very light green hint for active answer */
        border-top: 1px solid #eee;
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        padding: 1.5rem;
    }
</style>
@endpush

@section('content')

<div class="container py-5">
    
    {{-- Heading --}}
    <h2 class="faq-header">Frequently Asked Questions</h2>

    {{-- Banner Image --}}
    <img src="https://images.unsplash.com/photo-1544654290-7d92822a0887?auto=format&fit=crop&q=80&w=1000" 
         alt="FAQ Banner" 
         class="img-fluid faq-banner shadow-sm">

    {{-- Accordion Section --}}
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="accordion" id="faqAccordion">

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I earn?
                            <span class="icon-box">-</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <strong>Answer:</strong> By visiting our website, you can "Add to Cart" the product of your choice and confirm the order by going to the Checkout option with your name, address, and phone number.
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long does it take to receive the product?
                            <span class="icon-box">+</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Standard delivery typically takes 3-5 business days depending on your location.
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Can I order with cash on delivery?
                            <span class="icon-box">+</span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, Cash on Delivery (COD) is available for most locations nationwide.
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            What should I do if the product size does not match?
                            <span class="icon-box">+</span>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Please contact our support team within 48 hours of delivery to initiate a return or size exchange request.
                        </div>
                    </div>
                </div>

                <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Can the product be exchanged?
                            <span class="icon-box">+</span>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, products can be exchanged if they are unused and in original packaging within 7 days.
                        </div>
                    </div>
                </div>

                 <div class="accordion-item shadow-sm">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Can custom designs be provided?
                            <span class="icon-box">+</span>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We accept custom design requests for bulk orders. Please contact sales for more details.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<section class="newsletter">
    @include('website.component.newsletter')
</section>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // jQuery logic to toggle the +/- icons
        $('.accordion-collapse').on('show.bs.collapse', function () {
            // Find the button associated with this item and change icon to -
            $(this).prev('.accordion-header').find('.icon-box').text('-');
        });

        $('.accordion-collapse').on('hide.bs.collapse', function () {
            // Find the button associated with this item and change icon to +
            $(this).prev('.accordion-header').find('.icon-box').text('+');
        });
    });
</script>
@endpush