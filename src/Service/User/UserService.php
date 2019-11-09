<?php

namespace App\Service\User;

use App\Event\UserBannedEvent;
use App\Service\User\Interfaces\UserServiceInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class UserService implements UserServiceInterface
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
    public function ban(int $userId): bool
    {
        // Get user logic

        // Some ban logic

        $userBanned = new UserBannedEvent(new \DateTime(), $userId, 'bad boy');
        $this->eventDispatcher->dispatch($userBanned);

        return true;
    }
}