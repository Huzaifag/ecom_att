@extends('website.layout.main')

@push('styles')
<style>
    /* --- Theme Variables & Global Styles --- */
    :root {
        --bg-light-blue: #f4faff; /* Light blue background from image */
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
        --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .team-section {
        background-color: var(--bg-light-blue);
        padding: 80px 0;
    }

    .team-header {
        max-width: 800px;
        margin: 0 auto 50px auto;
        text-align: center;
    }

    .team-header h2 {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 20px;
        font-size: 32px;
    }

    .team-header p {
        color: #555;
        font-size: 14px;
        line-height: 1.6;
    }

    /* --- Team Card Styling --- */
    .team-card {
        background: #fff;
        border: none;
        border-radius: 15px;
        padding: 40px 25px;
        text-align: center;
        box-shadow: var(--card-shadow);
        transition: transform 0.3s ease;
        height: 100%;
        margin-bottom: 30px;
    }

    .team-card:hover {
        transform: translateY(-5px);
    }

    .member-img-wrapper {
        width: 130px;
        height: 130px;
        margin: 0 auto 20px auto;
        position: relative;
    }

    .member-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .member-name {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 5px;
        font-size: 18px;
    }

    .member-designation {
        color: var(--text-muted);
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 15px;
        display: block;
    }

    .member-bio {
        color: var(--text-muted);
        font-size: 12px;
        line-height: 1.5;
        margin-bottom: 0;
    }
</style>
@endpush

@section('content')

<section class="team-section">
    <div class="container">
        
        <div class="team-header">
            <h2>Meet the SoftStyle Team</h2>
            <p>
                1. If there is any problem after receiving the product (i.e., the size you ordered is not the size you received), 
                you must inform us within 6 hours of receiving the product and the delivery man has the opportunity to check the product, 
                please check it (if there is any problem after delivery, complaints will not be accepted).
            </p>
        </div>

        <div class="row">
            @php
                // Mock data to match the 8 cards in the image
                $teamMembers = array_fill(0, 8, [
                    'name' => 'Mohd Asad',
                    'role' => 'Senior Executive Officer',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt'
                ]);
            @endphp

            @foreach($teamMembers as $index => $member)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-card">
                        <div class="member-img-wrapper">
                            {{-- Replace with actual image paths. Using indices to vary placeholders for demo --}}
                            <img src="https://i.pravatar.cc/150?u={{ $index }}" class="member-img" alt="{{ $member['name'] }}">
                        </div>
                        <h5 class="member-name">{{ $member['name'] }}</h5>
                        <span class="member-designation">{{ $member['role'] }}</span>
                        <p class="member-bio">{{ $member['bio'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<section class="newsletter">
    @include('website.component.newsletter')
</section>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // You can add animations or scroll-reveal effects here using jQuery if needed
    });
</script>
@endpush