<?php 
namespace Src\Adapter;

use Src\Adapter\Interfaces\MessengerInterface;

class MessengerClass
{
    protected $messageInterface;

    public function __construct(MessengerInterface $messageInterface)
    {
        $this->messageInterface = $messageInterface;
    }

    public function sendMessage()
    {
        return $this->messageInterface->send();
    }

}