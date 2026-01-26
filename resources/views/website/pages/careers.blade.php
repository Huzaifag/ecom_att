@extends('website.layout.main')

@push('styles')
<style>
    :root {
        --primary-teal: #00898a;
        --light-bg: #f4faff;
        --text-dark: #253D4E;
        --text-muted: #7e7e7e;
        --card-border: #ececec;
    }

    /* --- Hero Section --- */
    .careers-hero {
        background-color: var(--light-bg);
        padding: 80px 0;
        text-align: center;
    }
    .careers-hero h1 {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 20px;
    }
    .careers-hero p {
        color: var(--text-muted);
        max-width: 700px;
        margin: 0 auto 30px;
        line-height: 1.6;
    }
    .btn-view-jobs {
        background-color: var(--primary-teal);
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        font-weight: 600;
        border: none;
    }

    /* --- Job Openings Section --- */
    .jobs-section {
        padding: 60px 0;
    }
    .section-label {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 30px;
    }
    .job-card {
        border: 1px solid var(--card-border);
        border-radius: 12px;
        padding: 25px;
        height: 100%;
        transition: transform 0.3s ease;
    }
    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }
    .job-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
        line-height: 1.4;
    }
    .job-meta {
        font-size: 13px;
        color: var(--text-muted);
        margin-bottom: 15px;
    }
    .job-meta i {
        color: var(--primary-teal);
        margin-right: 5px;
    }
    .job-desc {
        font-size: 13px;
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 20px;
    }
    .btn-apply {
        background-color: var(--primary-teal);
        color: white;
        font-size: 13px;
        padding: 8px 20px;
        border-radius: 6px;
        border: none;
    }

    /* --- Life At SoftStyle Section --- */
    .life-section {
        padding: 60px 0;
        background-color: #fff;
    }
    .life-title {
        font-weight: 700;
        color: var(--text-dark);
        font-size: 32px;
        margin-bottom: 20px;
    }
    .life-desc {
        color: var(--text-muted);
        line-height: 1.8;
        font-size: 14px;
    }
    .feature-card {
        border: 1px solid var(--card-border);
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 24px;
        height: calc(100% - 24px);
    }
    .feature-card.active {
        background-color: var(--primary-teal);
        color: white;
    }
    .feature-card.active .feature-title, 
    .feature-card.active .feature-text {
        color: white;
    }
    .feature-icon {
        font-size: 20px;
        margin-bottom: 15px;
        display: block;
    }
    .feature-title {
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 16px;
        color: var(--text-dark);
    }
    .feature-text {
        font-size: 13px;
        color: var(--text-muted);
        line-height: 1.5;
    }
</style>
@endpush

@section('content')

<section class="careers-hero">
    <div class="container">
        <h1>Are you ready to join our teams</h1>
        <p>Looking for a reliable and quality fashion supplier for your business?<br>
           SOFTSTYLE offers great partnership and wholesale opportunities.</p>
        <button class="btn-view-jobs" id="scrollToJobs">View Job Openings</button>
    </div>
</section>

<section class="jobs-section" id="jobs-list">
    <div class="container">
        <h5 class="section-label">4 Job Openings</h5>
        <div class="row g-4">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-lg-4 col-md-6">
                <div class="job-card">
                    <h6 class="job-title">Sr Data Architect, Data Lake & Analytics, ProServe SDT North</h6>
                    <div class="job-meta">
                        <span class="me-3"><i class="fas fa-map-marker-alt"></i> Stockholm, SWE</span>
                        <span><i class="fas fa-calendar-alt"></i> 21 June 2029</span>
                    </div>
                    <p class="job-desc">Are you a Data Analytics specialist? Do you have Data Warehousing and/or Hadoop/Data Lake experience? Do you like to solve the most complex and high scale (billions + records) data challenges in the world today?</p>
                    <form method="GET" class="d-inline-block" action="{{ url('/apply-now') }}">
                        <button class="btn btn-apply">Apply Now</button>
                    </form>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<section class="life-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <p class="text-muted mb-1">Your Life At</p>
                <h2 class="life-title">SoftStyle</h2>
                <p class="life-desc">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-card active">
                            <span class="feature-icon"><i class="fas fa-building"></i></span>
                            <h6 class="feature-title">Large Beautiful Office</h6>
                            <p class="feature-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <span class="feature-icon text-teal"><i class="fas fa-building"></i></span>
                            <h6 class="feature-title">Large Beautiful Office</h6>
                            <p class="feature-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <span class="feature-icon text-teal"><i class="fas fa-clock"></i></span>
                            <h6 class="feature-title">Early Location</h6>
                            <p class="feature-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <span class="feature-icon text-teal"><i class="fas fa-graduation-cap"></i></span>
                            <h6 class="feature-title">Education Opportunities</h6>
                            <p class="feature-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
            </div>
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
        // Scroll to jobs logic
        $('#scrollToJobs').on('click', function() {
            $('html, body').animate({
                scrollTop: $("#jobs-list").offset().top - 50
            }, 600);
        });

        // Hover effect for feature cards
        $('.feature-card').hover(function() {
            $('.feature-card').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
@endpush