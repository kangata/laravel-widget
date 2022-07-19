<?php

namespace App\Widgets\License;

class LicenseDataFactory
{
    public static function make(array $payload): LicenseData
    {
        return new LicenseData(
            text: data_get($payload, 'text'),
            image: data_get($payload, 'image'),
        );
    }
}
