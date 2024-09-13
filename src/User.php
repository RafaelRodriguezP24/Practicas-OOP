<?php

namespace Medine;

class User extends Model
{
    public function getFirstNameAttribute($value): string
    {
        return strtoupper($value);
    }

}

