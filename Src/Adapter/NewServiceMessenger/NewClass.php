<?php

namespace Src\Adapter\NewServiceMessenger;

use Src\Adapter\Interfaces\MessengerInterface;

class NewClass implements MessengerInterface
{
    protected $message;

    protected $number;

    protected $clientId;

    public function __construct($message, $number, $clientId)
    {
        $this->message = $message;
        $this->number = $number;
        $this->clientId = $clientId;
    }

    public function validateNumber()
    {
        return strlen($this->number) > 5;
    }

    public function validateMessage()
    {
        return strlen($this->message) > 7;
    }

    public function send()
    {
        if ($this->validateNumber() && $this->validateMessage()) {
            return "Message {$this->message} is being sent by new services to {$this->number} with client id {$this->clientId}";
        }
        return "Error sending {$this->message} by new services to {$this->number}";
    }
}
