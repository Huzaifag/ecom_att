<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class ProductCard extends Component
{
    public array $product;

    public function __construct(array $product)
    {
        $this->product = $product;
    }

    public function render(): View|Closure|string
    {
        return view('components.website.product-card');
    }
}