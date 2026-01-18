@php
    $categories = [
        [
            'icon' => asset('images/icons/men.png'),
            'title' => "Men's Fashion",
            'link' => '/categories/men-fashion',
        ],
        [
            'icon' => asset('images/icons/women.png'),
            'title' => "Women's Fashion",
            'link' => '/categories/women-fashion',
        ],
        [
            'icon' => asset('images/icons/kids.png'),
            'title' => "Kid's Fashion",
            'link' => '/categories/kids-fashion',
        ],
        [
            'icon' => asset('images/icons/family.png'),
            'title' => 'Family',
            'link' => '/categories/family',
        ],
        [
            'icon' => asset('images/icons/eid.png'),
            'title' => 'Eid Collection',
            'link' => '/categories/eid-collection',
        ],
        [
            'icon' => asset('images/icons/festival.png'),
            'title' => 'Festival Collection',
            'link' => '/categories/festival-collection',
        ],
        [
            'icon' => asset('images/icons/sports.png'),
            'title' => "Sports Wear",
            'link' => '/categories/sports-wear',
        ],
        [
            'icon' => asset('images/icons/lingerie.png'),
            'title' => 'Lingerie',
            'link' => '/categories/lingerie',
        ],
        [
            'icon' => asset('images/icons/wedding.png'),
            'title' => 'Wedding',
            'link' => '/categories/wedding',
        ],
        [
            'icon' => asset('images/icons/textile.png'),
            'title' => 'Home Textile',
            'link' => '/categories/home-textile',
        ],
        [
            'icon' => asset('images/icons/others.png'),
            'title' => 'Others',
            'link' => '/categories/others',
        ],
    ];
@endphp

<ul class="category-list">
    @foreach ($categories as $category)
        <li class="category-item">
            <a href="{{ $category['link'] }}">
                <img
                    src="{{ $category['icon'] }}"
                    alt="{{ $category['title'] }}"
                    class="category-icon"
                    loading="lazy"
                >
                <span class="category-title">{{ $category['title'] }}</span>
                <svg class="chevron-right" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>
        </li>
    @endforeach
</ul>

@push('styles')
<style>
    .category-list {
        list-style: none;
        padding: 0;
        margin: 0;
        background-color: white;
        border: 1px solid var(--border-color);
        width: 100%;
    }

    .category-item {
        border-bottom: 1px solid #eee;
    }

    .category-item:last-child {
        border-bottom: none;
    }

    .category-item a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
        padding: 10px 16px;
        transition: background-color 0.2s;
    }

    .category-item a:hover {
        background-color: #f9f9f9;
    }

    .category-icon {
        width: 24px;
        height: 24px;
        margin-right: 16px;
        object-fit: contain;
    }

    .category-title {
        flex: 1;
        font-size: 12px;
        font-weight: 500;
    }

    .chevron-right {
        color: #999;
        margin-left: auto;
    }
</style>
@endpush