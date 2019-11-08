<?php

namespace App\Entity;

use Symfony\Component\HttpFoundation\Request;

class User
{
    public static function createFromRequest(Request $request)
    {
        $user = new self;

        return $user;
    }
}
