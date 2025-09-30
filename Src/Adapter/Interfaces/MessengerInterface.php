<?php

namespace Src\Adapter\Interfaces;

interface MessengerInterface
{
    public function validateNumber();
    public function validateMessage();
    public function send();
}
