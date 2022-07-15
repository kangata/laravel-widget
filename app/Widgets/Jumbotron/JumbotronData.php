<?php

namespace App\Widgets\Jumbotron;

use Illuminate\Contracts\Support\Arrayable;

class JumbotronData implements Arrayable
{
    public function __construct(
        public string $title,
        public string $description,
        public ?string $image = null,
    ) {}

    public function toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
        ];
    }
}
