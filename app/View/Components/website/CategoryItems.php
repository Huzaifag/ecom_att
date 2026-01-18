<?php

namespace App\View\Components\Website;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class CategoryItems extends Component
{
    public array $categories;
    public string $title;

    public function __construct(string $title = 'Shop By Category')
    {
        $this->title = $title;

        $this->categories = [
            ['name' => 'Men', 'slug' => 'men', 'image' => 'men.png'],
            ['name' => 'Women', 'slug' => 'women', 'image' => 'men.png'],
            ['name' => 'Kids', 'slug' => 'kids', 'image' => 'men.png'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'image' => 'men.png'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'image' => 'men.png'],
            ['name' => 'Accessories', 'slug' => 'accessories', 'image' => 'men.png'],
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.website.category-items');
    }
}