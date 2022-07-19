<?php

namespace App\Models;

use App\Constants\WidgetTypeConstant as Type;
use App\Widgets\PageContent\PageContentDataFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array',
    ];

    protected $fillable = [
        'name',
        'type',
        'file',
        'data',
        'sort_number',
        'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSort($query)
    {
        return $query->orderBy('sort_number');
    }

    public function typeIsPageContent()
    {
        return $this->type == Type::PAGE_CONTENT;
    }

    public function loadData()
    {
        if ($this->typeIsPageContent()) {
            $this->pivot->load('page');

            $this->data = PageContentDataFactory::make([
                'content' => $this->pivot->page->content,
            ]);
        }
    }
}
