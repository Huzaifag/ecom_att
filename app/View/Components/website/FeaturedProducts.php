<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class FeaturedProducts extends Component
{
    public array $products;
    public string $title;

    public function __construct(string $title = 'Featured Products')
    {
        $this->title = $title;
        
        $this->products = [
            [
                'id' => 13,
                'name' => 'Designer Hoodie Collection',
                'price' => 1199.99,
                'original_price' => 1499.99,
                'rating' => 4,
                'rating_count' => 298,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 14,
                'name' => 'Formal Shirt Combo',
                'price' => 999.99,
                'original_price' => 1299.99,
                'rating' => 4,
                'rating_count' => 445,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 15,
                'name' => 'product.png',
                'price' => 1599.99,
                'original_price' => 1999.99,
                'rating' => 5,
                'rating_count' => 678,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 16,
                'name' => 'Winter Jacket',
                'price' => 2199.99,
                'original_price' => 2799.99,
                'rating' => 4,
                'rating_count' => 234,
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
        return view('components.website.featured-products');
    }
}