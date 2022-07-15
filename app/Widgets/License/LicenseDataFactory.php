<?php

namespace App\Widgets\License;

class LicenseDataFactory
{
    public static function make(array $payload)
    {
        return new LicenseData(
            text: data_get($payload, 'text'),
            image: data_get($payload, 'image'),
        );
    }
}
