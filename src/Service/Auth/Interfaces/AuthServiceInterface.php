<?php

namespace App\Service\Auth\Interfaces;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;

interface AuthServiceInterface
{
    /**
     * Register new user
     * @param Request $request
     * @return User
     * @throws \Exception
     */
    public function register(Request $request): User;
}
