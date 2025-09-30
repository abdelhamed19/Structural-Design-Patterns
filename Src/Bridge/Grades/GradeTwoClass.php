<?php
namespace Src\Bridge\Grades;

class GradeTwoClass extends GradeClass
{
    public function showReport()
    {
        return $this->getReport()->showGradeTwoReport();
    }
}