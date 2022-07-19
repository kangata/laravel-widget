<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PageHasWidget extends Pivot
{
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function widget()
    {
        return $this->belongsTo(Widget::class);
    }
}
