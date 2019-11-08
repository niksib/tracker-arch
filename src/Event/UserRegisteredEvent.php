<?php

namespace App\Event;

use DateTime;

class UserRegisteredEvent extends UserBaseEvent
{
    /** @var string */
    protected $source;

    public function __construct(DateTime $time, int $user_id, string $source)
    {
        parent::__construct($time, $user_id);

        $this->source = $source;
    }

    public function toArray(): array
    {
        $data = [
            'time' => $this->getTime()->format(DateTime::W3C),
            'user_id' => $this->getUserId(),
            'source' => $this->getSource()
        ];

        return $data;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
}
