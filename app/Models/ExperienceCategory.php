<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ExperienceCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'description',
        'is_active',
    ];

    protected static function booted(): void
    {
        static::creating(function (ExperienceCategory $category) {
            $category->slug = $category->slug ?? Str::slug($category->name);
        });
    }

    // Relasi yang benar: satu kategori punya banyak pengalaman
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'experience_category_id', 'id');
    }
}
