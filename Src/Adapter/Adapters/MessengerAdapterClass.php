<?php

namespace Src\Adapter\Adapters;

use Src\Adapter\Interfaces\MessengerInterface;
use Src\Adapter\OldServiceMessenger\OldClass;

class MessengerAdapterClass implements MessengerInterface
{
    protected $oldClass;

    public function __construct(OldClass $oldClass)
    {
        $this->oldClass = $oldClass;
    }

    public function validateNumber()
    {
        return $this->oldClass->validateNumberOldWay();
    }

    public function validateMessage()
    {
        return $this->oldClass->validateMessageOldWay();
    }

    public function send()
    {
        return $this->oldClass->send();
    }
}
