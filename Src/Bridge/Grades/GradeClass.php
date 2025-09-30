<?php 
namespace Src\Bridge\Grades;

use Src\Bridge\Reports\ReportInterface;

abstract class GradeClass
{
    private $report;
    public function __construct(ReportInterface $report)
    {
        $this->report = $report;
    }

    /**
     * Get the value of report
     */ 
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Set the value of report
     *
     * @return  self
     */ 
    public function setReport($report)
    {
        $this->report = $report;

        return $this;
    }

    abstract public function showReport();
}