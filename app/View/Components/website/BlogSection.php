<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;

class BlogSection extends Component
{
    public array $blogs;

    public function __construct()
    {
        $this->blogs = [
            [
                'title' => "Men's Premium Blank T-shirt green | Organic Ringspun Combed Compact Cotton | 100% Cotton Basic T-Shirt Combo Pack",
                'date' => 'June 02, 2025',
                'image' => 'product.png',
                'logo' => 'https://dummyimage.com/60x30/008b8b/fff&text=Malvi+Logo',
                'link' => '#',
            ],
            [
                'title' => "Women's Summer Dress | Floral Print | 100% Cotton",
                'date' => 'May 15, 2025',
                'image' => 'product.png',
                'logo' => 'https://dummyimage.com/60x30/008b8b/fff&text=Malvi+Logo',
                'link' => '#',
            ],
            [
                'title' => "Kids' Trendy Outfit | Soft Cotton | New Arrival",
                'date' => 'April 28, 2025',
                'image' => 'product.png',
                'logo' => 'https://dummyimage.com/60x30/008b8b/fff&text=Malvi+Logo',
                'link' => '#',
            ],
        ];
    }

    public function render()
    {
        return view('components.website.blog-section');
    }

    public function data(): array
    {
        return [
            'blogs' => $this->blogs,
        ];
    }
}
