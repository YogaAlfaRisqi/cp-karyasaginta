<?php

namespace App\Models;

use App\Models\User;
use App\Models\ExperienceCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'experience_category_id',
        'title',
        'subtitle',
        'slug',
        'summary',
        'content',
        'image',
        'gallery',
        'location',
        'partner',
        'start_date',
        'end_date',
        'is_current',
        'views',
        'is_published',
        'tags',
    ];

    protected $casts = [
        'gallery' => 'array',
        'tags' => 'array',
        'is_current' => 'boolean',
        'is_published' => 'boolean',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    /* ------------------------------------
     |  BOOTED: Auto Generate Slug
     |------------------------------------ */
    protected static function booted(): void
    {
        static::creating(function (Experience $experience) {
            if (empty($experience->slug)) {
                $experience->slug = Str::slug($experience->title);
            }
        });
    }

    /* ------------------------------------
     |  ACCESSORS: Safe Fallback for JSON Fields
     |------------------------------------ */
    public function getGalleryAttribute($value)
    {
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : [];
    }

    public function getTagsAttribute($value)
    {
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : [];
    }

    /* ------------------------------------
     |  RELATIONSHIPS
     |------------------------------------ */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(ExperienceCategory::class, 'experience_category_id');
    }

    /* ------------------------------------
     |  SCOPES (Optional, for Query Optimization)
     |------------------------------------ */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeRecent($query)
    {
        return $query->latest('start_date');
    }

    /* ------------------------------------
     |  HELPERS (Optional)
     |------------------------------------ */
    public function formattedDate(): ?string
    {
        if (!$this->start_date) {
            return null;
        }

        $start = $this->start_date->translatedFormat('F Y');
        $end = $this->is_current
            ? 'Sekarang'
            : ($this->end_date ? $this->end_date->translatedFormat('F Y') : null);

        return $end ? "$start - $end" : $start;
    }

    public function incrementViews(): void
    {
        $this->increment('views');
    }
}
