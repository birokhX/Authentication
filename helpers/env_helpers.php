<?php

function env(string $key, $default = null): string
{
    return $_ENV[$key] ?? $default;
}