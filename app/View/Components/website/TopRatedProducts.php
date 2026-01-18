<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class TopRatedProducts extends Component
{
    public array $products;
    public string $title;

    public function __construct(string $title = 'Top Rated Products')
    {
        $this->title = $title;
        
        $this->products = [
            [
                'id' => 9,
                'name' => 'Premium Cotton Polo Shirt',
                'price' => 899.99,
                'original_price' => 1199.99,
                'rating' => 5,
                'rating_count' => 456,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 10,
                'name' => 'Classic Denim Jacket',
                'price' => 1299.99,
                'original_price' => 1599.99,
                'rating' => 5,
                'rating_count' => 389,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 11,
                'name' => 'Casual Cotton Shorts',
                'price' => 549.99,
                'original_price' => 699.99,
                'rating' => 5,
                'rating_count' => 234,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 12,
                'name' => 'Sports Track Pants',
                'price' => 799.99,
                'original_price' => 999.99,
                'rating' => 5,
                'rating_count' => 567,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ]
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.website.top-rated-products');
    }
}