<?php

namespace App\Widgets\Banner;

use Illuminate\Contracts\Support\Arrayable;

class BannerData implements Arrayable
{
    public function __construct(
        public string $title,
        public string $description,
        public ?string $image = null,
        public ?string $link = null,
    ) {}

    public function toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'link' => $this->link,
        ];
    }
}
