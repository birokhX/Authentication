<?php

function debug(...$vars): void
{
    echo "<pre style='max-width: 100%; background-color: #333; color: green; padding: 0.7rem; border-radius: 0.5rem'>";
    foreach ($vars as $var) {
        print_r($var);
    }
    echo "</pre>";
}
function dd(...$vars): void
{
    debug($vars);
    die();
}