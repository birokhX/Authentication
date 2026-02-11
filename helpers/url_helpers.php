<?php

function url(string $url = ''): string
{
    return env('APP_URL') . ($url ? trim($url, "/") : '');
}