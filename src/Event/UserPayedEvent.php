<?php

namespace App\Event;

use DateTime;

class UserPayedEvent extends UserBaseEvent
{
    /** @var int */
    protected $amount;

    public function __construct(DateTime $time, int $user_id, int $amount)
    {
        parent::__construct($time, $user_id);

        $this->amount = $amount;
    }

    public function toArray(): array
    {
        $data = [
            'time' => $this->getTime()->format(DateTime::W3C),
            'user_id' => $this->getUserId(),
            'amount' => $this->getAmount()
        ];

        return $data;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
