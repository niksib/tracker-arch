<?php

namespace App\Service\Tracking;

use App\Event\UserBaseEvent;
use App\Service\Tracking\Interfaces\Trackable;
use Psr\Log\LoggerInterface;

class RabbitTracker implements Trackable
{
    /** @var LoggerInterface  */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Save user event to RabbitMQ
     * @param UserBaseEvent $userEvent
     */
    public function track(UserBaseEvent $userEvent): void
    {
        // Some logic for store event

        $this->logger->info('Store user event in RabbitMQ', $userEvent->toArray());
    }
}
