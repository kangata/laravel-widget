<?php

namespace App\Widgets\PageContent;

class PageContentDataFactory
{
    public static function make(array $payload): PageContentData
    {
        return new PageContentData(
            content: data_get($payload, 'content'),
        );
    }
}
