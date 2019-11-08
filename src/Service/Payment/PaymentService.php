<?php

namespace App\Service\Payment;

use App\Event\UserPayedEvent;
use App\Service\Payment\Interfaces\PaymentServiceInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class PaymentService implements PaymentServiceInterface
{
    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * Ban user account
     * @param int $userId
     * @return bool
     * @throws \Exception
     */
    public function pay(int $userId): bool
    {
        // Get user logic

        // Some ban logic

        $userBanned = new UserPayedEvent(new \DateTime(), $userId, 100);
        $this->eventDispatcher->dispatch($userBanned);

        return true;
    }
}
