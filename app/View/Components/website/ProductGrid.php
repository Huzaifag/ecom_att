<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class ProductGrid extends Component
{
    public array $products;
    public string $title;
    public bool $showViewAllButton;
    public string $viewAllText;
    public ?string $viewAllLink;

    public function __construct(
        string $title = 'Products',
        array $products = [],
        bool $showViewAllButton = true,
        string $viewAllText = 'View All Products',
        ?string $viewAllLink = null
    ) {
        $this->title = $title;
        $this->products = $products;
        $this->showViewAllButton = $showViewAllButton;
        $this->viewAllText = $viewAllText;
        $this->viewAllLink = $viewAllLink;
    }

    public function render(): View|Closure|string
    {
        return view('components.website.product-grid');
    }
}