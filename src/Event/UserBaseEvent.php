<?php

namespace App\Event;

use DateTime;
use Symfony\Contracts\EventDispatcher\Event;

abstract class UserBaseEvent extends Event
{
    /** @var DateTime */
    protected $time;
    /** @var int */
    protected $user_id;

    public function __construct(DateTime $time, int $user_id)
    {
        $this->time = $time;
        $this->user_id = $user_id;
    }

    abstract public function toArray(): array;

    /**
     * @return DateTime
     */
    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }
}
