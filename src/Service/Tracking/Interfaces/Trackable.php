<?php

namespace App\Service\Tracking\Interfaces;

use App\Event\UserBaseEvent;

interface Trackable
{
    /**
     * Save user event to some service
     * @param UserBaseEvent $userEvent
     */
    public function track(UserBaseEvent $userEvent): void;
}
