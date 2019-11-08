<?php

namespace App\EventSubscriber;

use App\Event\UserBaseEvent;
use App\Service\Tracking\Interfaces\Trackable;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class UserEventSubscriber
{
    /** @var Trackable */
    private $tracker;
    /** @var ParameterBagInterface */
    private $params;
    /** @var ContainerInterface */
    private $container;

    public function __construct(Trackable $tracker, ParameterBagInterface $params, ContainerInterface $container)
    {
        $this->tracker = $tracker;
        $this->params = $params;
        $this->container = $container;
    }

    /**
     * User events handler
     * @param UserBaseEvent $userEvent
     */
    public function onUserEvent(UserBaseEvent $userEvent): void
    {
        $trackers = $this->params->get('app.trackers') ?? [];

        foreach ($trackers as $tracker) {
            /** @var Trackable $trackerService */
            $trackerService = $this->container->get($tracker['name']);
            $this->tracker->addTracker($trackerService);
        }

        $this->tracker->track($userEvent);
    }
}
