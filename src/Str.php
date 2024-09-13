<?php

namespace Medine;

class Str
{
    public static function studly(string $value): string
    {
        $result = ucwords(str_replace('_', ' ', $value));
        return str_replace(' ', '', $result);
    }
}