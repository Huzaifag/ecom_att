<!-- resources/views/components/blog-section.blade.php -->
<section class="blog-section py-5">
    <div class="container">
        <!-- Blog Cards Grid -->
        <div class="row g-4 justify-content-center">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card h-100 d-flex flex-column">
                        <div class="position-relative p-2">
                            <img src="{{ asset('images/website/products/' . $blog['image']) }}" alt="{{ $blog['title'] }}"
                                class="blog-card-img">
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 class="blog-title">
                                {{ $blog['title'] }}
                            </h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="blog-date">{{ $blog['date'] }}</p>
                                <a href="{{ $blog['link'] }}" class="btn btn-read-more mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4">
        <!-- Blog Cards Grid -->
        <div class="row g-4 justify-content-center">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card h-100 d-flex flex-column">
                        <div class="position-relative p-2">
                            <img src="{{ asset('images/website/products/' . $blog['image']) }}"
                                alt="{{ $blog['title'] }}" class="blog-card-img">
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 class="blog-title">
                                {{ $blog['title'] }}
                            </h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="blog-date">{{ $blog['date'] }}</p>
                                <a href="{{ $blog['link'] }}" class="btn btn-read-more mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
    <style>
        .blog-card {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #EBEBEB;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .blog-card-img {
            height: 420px;
            object-fit: cover;
            width: 100%;
        }

        .polo-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 1.8rem;
            font-weight: 900;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            letter-spacing: 1px;
        }

        .malvi-logo {
            position: absolute;
            top: 20px;
            right: 20px;
            height: 50px;
            opacity: 0.9;
        }

        .card-body {
            padding: 1rem;
        }

        .blog-title {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.4;
            color: #333;
            margin-bottom: 0.8rem;
        }

        .blog-date {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
        }

        .btn-read-more {
            background-color: #008080;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.3rem 1.8rem;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .btn-read-more:hover {
            background-color: #006666;
            color: white;
        }
    </style>
@endpush
