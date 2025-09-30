<?php

use Src\Adapter\MessengerClass;
use Src\Adapter\NewServiceMessenger\NewClass;
use Src\Adapter\OldServiceMessenger\OldClass;
use Src\Adapter\Adapters\MessengerAdapterClass;

require __DIR__ . '/vendor/autoload.php';

$old = new OldClass('Hello old class', '0123456789');
$oldAdaptor = new MessengerAdapterClass($old);
$newClass = new NewClass('Hello new class', '0123456789', '123');

$old = new MessengerClass($oldAdaptor);
var_dump($old->sendMessage());
echo "<br>";
$new = new MessengerClass($newClass);
var_dump($new->sendMessage());