<?php

namespace App\Widgets\Jumbotron;

class JumbotronDataFactory
{
    public static function make(array $payload)
    {
        return new JumbotronData(
            title: data_get($payload, 'title'),
            description: data_get($payload, 'description'),
            image: data_get($payload, 'image'),
        );
    }
}
