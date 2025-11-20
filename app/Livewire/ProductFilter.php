<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class ProductFilter extends Component
{
    use WithPagination;

    #[Url()]
    public $search = '';
    #[Url()]
    public $category = '';

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    #[Computed()]
    public function products()
    {
        $query = Product::query()->with('category');

        // Filter berdasarkan search
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        // Filter berdasarkan kategori
        if ($this->category) {
            $query->whereHas('category', function ($q) {
                $q->where('slug', $this->category);
            });
        }

        // Pagination
        return $query->orderBy('created_at', 'desc')->paginate(10);
    }

    public function activeCategory()
    {
        if ($this->category === null || $this->category=== ''){
            return null;
        }
        return Category::where('slug', $this->category)->first();
    }

    public function render()
    {
    
        $categories = Category::all(); // Bisa di-cache juga jika perlu
        return view('livewire.product-filter', [
            'products' => $this->products(),
            'categories' => $categories,
            'activeCategory' => $this->activeCategory(),
            'wa' => '0876546796928'
        ]);
    }
}