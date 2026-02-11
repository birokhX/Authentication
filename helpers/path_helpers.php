<?php

function base_path(string $path = ''): string
{
    return BASEPATH . ($path ? DS . trim($path, "/") : '');
}

function asset_path(string $path = ''): string
{
    return base_path("public" . DS . "assets" . DS . $path);
}