<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class AllProducts extends Component
{
    public array $products;

    public function __construct(string $title = 'New Arrival')
    {
        
        $this->products = [
            [
                'id' => 1,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 4,
                'rating_count' => 234,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 2,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 5,
                'rating_count' => 156,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 3,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 4,
                'rating_count' => 189,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 4,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 5,
                'rating_count' => 267,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 5,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 4,
                'rating_count' => 145,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 6,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 5,
                'rating_count' => 198,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 7,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 4,
                'rating_count' => 223,
                'image' => 'product.png',
                'brand' => [
                    'name' => 'POLO',
                    'logo' => 'polo-logo.png'
                ]
            ],
            [
                'id' => 8,
                'name' => '100% Cotton Basic T-Shirt Combo Pack',
                'price' => 749.99,
                'original_price' => 999.99,
                'rating' => 5,
                'rating_count' => 176,
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
        return view('components.website.all-products');
    }
}