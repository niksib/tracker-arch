<?php

namespace App\Service\Tracking;

use App\Event\UserBaseEvent;
use App\Service\Tracking\Interfaces\Trackable;

class TrackingService implements Trackable
{
    /** @var Trackable[] */
    private $trackers = [];

    /**
     * Handle all trackers
     * @param UserBaseEvent $userEvent
     */
    public function track(UserBaseEvent $userEvent): void
    {
        foreach ($this->trackers as $tracker) {
            $tracker->track($userEvent);
        }

        $this->clearTrackers();
    }

    /**
     * Collect trackers for usage
     * @param Trackable $tracker
     */
    public function addTracker(Trackable $tracker): void
    {
        $this->trackers[] = $tracker;
    }

    /**
     * Clear trackers array
     */
    public function clearTrackers(): void
    {
        $this->trackers = [];
    }
}
