<?php

namespace App\Event;

use DateTime;

class UserBannedEvent extends UserBaseEvent
{
    /** @var string */
    protected $reason;

    public function __construct(DateTime $time, int $user_id, string $reason)
    {
        parent::__construct($time, $user_id);

        $this->reason = $reason;
    }

    public function toArray(): array
    {
        $data = [
            'time' => $this->getTime()->format(DateTime::W3C),
            'user_id' => $this->getUserId(),
            'reason' => $this->getReason()
        ];

        return $data;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
}
