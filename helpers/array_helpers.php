<?php

function removeEmptyFields(array $array): array
{
    $originFields = [];
    if (is_array($array) && count($array) > 0) {
        $originFields = array_filter($array, fn($field) => !empty($field) && strlen($field) > 0 && trim($field));
    }
    return $originFields;
}