<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author',
        'created_by',
        'updated_by',
        'published_at',
        'read_time',
    ];

    protected $dates = ['published_at', 'deleted_at'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // Relasi many-to-many ke kategori
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'article_category');
    }

    // Accessor untuk format tanggal publikasi
    public function getPublishedDateAttribute()
    {
        return $this->published_at 
            ? Carbon::parse($this->published_at)->translatedFormat('d F Y') 
            : null;
    }
}
