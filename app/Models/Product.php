<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'admin_phone',
        'category_id',
        'created_by',
        'updated_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters)
    {
        return $query
            ->when(
                $filters['kategori'] ?? null,
                fn($q, $kategori) =>
                $q->where('category_id', $kategori)
            )
            ->when(
                $filters['search'] ?? null,
                fn($q, $search) =>
                $q->where('name', 'like', "%{$search}%")
            );
    }
}
