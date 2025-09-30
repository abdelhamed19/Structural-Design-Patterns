<?php

use Src\Adapter\MessengerClass;
use Src\Adapter\NewServiceMessenger\NewClass;
use Src\Adapter\OldServiceMessenger\OldClass;
use Src\Adapter\Adapters\MessengerAdapterClass;
use Src\Bridge\Grades\GradeOneClass;
use Src\Bridge\Grades\GradeTwoClass;
use Src\Bridge\Reports\HTMLReport;
use Src\Bridge\Reports\XMLReport;

require __DIR__ . '/vendor/autoload.php';

// *** Adapter *** //
// $old = new OldClass('Hello old class', '0123456789');
// $oldAdaptor = new MessengerAdapterClass($old);
// $newClass = new NewClass('Hello new class', '0123456789', '123');

// $old = new MessengerClass($oldAdaptor);
// var_dump($old->sendMessage());
// echo "<br>";
// $new = new MessengerClass($newClass);
// var_dump($new->sendMessage());
// *** Adapter *** //


// *** Bridge *** //
$gradeOneHTML = new GradeOneClass(new HTMLReport());
echo $gradeOneHTML->showReport();
echo "<br>";
$gradeOneXML = new GradeOneClass(new XMLReport());
echo $gradeOneXML->showReport();

$gradeTwoHTML = new GradeTwoClass(new HTMLReport());
echo $gradeTwoHTML->showReport();
echo "<br>";
$gradeTwoXML = new GradeTwoClass(new XMLReport());
echo $gradeTwoXML->showReport();
// *** Bridge *** //