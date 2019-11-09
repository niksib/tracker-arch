<?php

namespace App\Service\Auth;

use App\Entity\User;
use App\Event\UserRegisteredEvent;
use App\Service\Auth\Interfaces\AuthServiceInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;

class AuthService implements AuthServiceInterface
{
    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * Register new user
     * @param Request $request
     * @return User
     * @throws \Exception
     */
    public function register(Request $request): User
    {
        $user = User::createFromRequest($request);

        // Some register logic

        $userRegistered = new UserRegisteredEvent(new \DateTime(), 1, 'local');
        $this->eventDispatcher->dispatch($userRegistered);

        return $user;
    }
}
