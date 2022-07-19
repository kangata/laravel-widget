<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeOfSlug($query, string $slug)
    {
        return $query->where('slug', $slug);
    }

    public function widgets()
    {
        return $this->belongsToMany(Widget::class, 'page_has_widgets')
            ->using(PageHasWidget::class)
            ->withPivot('sort_number');
    }
}
