<?php

namespace App\Widgets\License;

use Illuminate\Contracts\Support\Arrayable;

class LicenseData implements Arrayable
{
    public function __construct(
        public string $text,
        public ?string $image = null,
    ) {}

    public function toArray()
    {
        return [
            'text' => $this->text,
            'image' => $this->image,
        ];
    }
}
