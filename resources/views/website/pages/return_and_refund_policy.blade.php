@extends('website.layout.main')
@push('styles')
    <style>
        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
        }

        .section-image img {
            width: 100%;
            max-height: 370px;
            border-radius: 20px;
            object-fit: cover;
            object-position: center;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            /* margin-top: 20px; */
        }
    </style>
@endpush
@section('content')
    <section class="container-fluid padding-x-80">
        <h1 class="section-title ">Return and Refund Policy</h1>
        <div class="row justify-content-center">
            <div class="col-md-12 section-image text-center">
                <img src="{{ asset('images/website/return_refund.png') }}" alt="Return and Refund Policy">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="mt-2">We want you to be satisfied with every one of our products. We have introduced an easy return and refund
                    policy for your convenience.</p>
                <h2>Return and Exchange Policy:</h2>
                <p>1. We always aim to achieve the ultimate satisfaction of our customers. And following this, we have tried
                    our best to create a return and exchange policy that is suitable for our valued customers, with detailed
                    instructions.</p>
                <h2>Please read the following return and exchange policy:</h2>
                <p>1. If there is any problem after receiving the product (i.e., the size you ordered is not the size you
                    received), you must inform us within 6 hours of receiving the product and the delivery man has the
                    opportunity to check the product, please check it (if there is any problem after delivery, complaints
                    will not be accepted).</p>
                <p>2. If there is a problem, we have changed it many times until now but we also have to go through a
                    procedure. So please check it in front of the seller, if the product is not checked, please inform us
                    within 24 hours, you will definitely get an exchange, subject to being in the truck. A certain charge
                    applies.</p>
                <h2>There are certain conditions that must be followed for the exchange.</h2>
                <p>2. The product must be in original condition, as it was sent to me. Must have (flash and instants)</p>
                <p>3. The customer must file a complaint within 24 hours of receiving the product.</p>
                <p>4. Do not tear off the lotus butter extracts and streamings from the product, or destroy the product.
                    Must be intact.</p>
                <p>5. The customer must pay the exchange charge for the exchange. The exchange charge is applicable to the
                    city. 90 taka in Chittaurgarh and 100 taka outside Dhaka city)</p>
                <p>6. In the case of size yu, it will be delivered within 24 hours.</p>
                <p>You must receive the product, you must inform us of the problem within 6 hours of receiving it, otherwise
                    we will resend the product to you, you will receive the new product and return the product to the
                    delivery man.</p>
                <p>7. Any complaint regarding defects after receiving the product is not acceptable, in front of the
                    delivery man. Please check it and we will definitely check it before sending it.</p>
                <p>8. We do not refund any product sold, if necessary, you can exchange it for another product of the same
                    amount. Delivery charges and exchange charges apply.</p>
                <p>9. If MSLV Fashion supplies a defective product or the wrong size to the customer, we will of course
                    exchange it at our own discretion and expense. In both cases, we must be informed with proof within 26
                    days of receiving the product.</p>
            </div>
        </div>
    </section>
    <section class="newsletter">
        @include('website.component.newsletter')
    </section>
@endsection