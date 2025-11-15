<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use App\Models\Product;
use App\Models\Category;

class ProductFilter extends Component
{
    use WithPagination;

    #[Url(as: 'q')]
    public $search = '';
    
    #[Url(as: 'category')]
    public $selectedCategory = '';

    // Method untuk reset filter
    public function resetFilters()
    {
        $this->reset(['search', 'selectedCategory']);
        $this->resetPage();
    }

    // Reset pagination saat search berubah
    public function updatedSearch()
    {
        $this->resetPage();
    }

    // Reset pagination saat category berubah
    public function updatedSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        

        $products = Product::query()
            ->when($this->search, function($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->when($this->selectedCategory, function($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->with('category')
            ->latest()
            ->paginate(12);

        $categories = Category::orderBy('name')->get();

        return view('livewire.product-filter', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}