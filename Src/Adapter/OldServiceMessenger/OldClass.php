<?php

namespace Src\Adapter\OldServiceMessenger;

use Src\Adapter\Interfaces\MessengerInterface;

class OldClass
{
    protected $message;
    protected $number;

    public function __construct($message, $number)
    {
        $this->message = $message;
        $this->number = $number;
    }

    public function validateNumberOldWay()
    {
        return strlen($this->number) > 8;
    }

    public function validateMessageOldWay()
    {
        return strlen($this->message) > 8;
    }

    public function send()
    {
        if ($this->validateNumberOldWay() && $this->validateMessageOldWay()) {
            return "Message {$this->message} is being sent by old services to {$this->number}";
        }
        return "Error sending {$this->message} by old services to {$this->number}";
    }
}
