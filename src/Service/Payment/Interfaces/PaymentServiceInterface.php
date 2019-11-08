<?php

namespace App\Service\Payment\Interfaces;

interface PaymentServiceInterface
{
    /**
     * Ban user account
     * @param int $userId
     * @return bool
     * @throws \Exception
     */
    public function pay(int $userId): bool;
}
