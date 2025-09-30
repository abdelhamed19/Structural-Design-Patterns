<?php
namespace Src\Bridge\Grades;

class GradeOneClass extends GradeClass
{
    public function showReport()
    {
        return $this->getReport()->showGradeOneReport();
    }
}