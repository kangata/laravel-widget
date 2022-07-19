<?php

namespace App\Widgets\PageContent;

use Illuminate\Contracts\Support\Arrayable;

class PageContentData implements Arrayable
{
    public function __construct(
        public string $content,
    ) {}

    public function toArray()
    {
        return [
            'content' => $this->content,
        ];
    }
}
