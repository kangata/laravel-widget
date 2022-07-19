<?php

namespace App\Widgets\Banner;

class BannerDataFactory
{
    public static function make(array $payload): BannerData
    {
        return new BannerData(
            title: data_get($payload, 'title'),
            description: data_get($payload, 'description'),
            image: data_get($payload, 'image'),
            link: data_get($payload, 'link'),
        );
    }
}
