<?php

namespace App\Service\Tracking;

use App\Event\UserBaseEvent;
use App\Service\Tracking\Interfaces\Trackable;
use Psr\Log\LoggerInterface;

class ApiTracker implements Trackable
{
    /** @var LoggerInterface  */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Save user event to external API
     * @param UserBaseEvent $userEvent
     */
    public function track(UserBaseEvent $userEvent): void
    {
        // Some logic for store event

        $this->logger->info('Store user event in external API', $userEvent->toArray());
    }
}
