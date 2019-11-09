<?php

namespace App\Service\User\Interfaces;

interface UserServiceInterface
{
    /**
     * Ban user account
     * @param int $userId
     * @return bool
     * @throws \Exception
     */
    public function ban(int $userId): bool;
}