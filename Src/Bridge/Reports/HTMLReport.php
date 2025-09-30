<?php

namespace Src\Bridge\Reports;

class HTMLReport implements ReportInterface
{
    public function showGradeOneReport()
    {
        return "<h1>Report for Grade one</h1>";
    }
    public function showGradeTwoReport()
    {
        return "<h1>Report for Grade two</h1>";
    }
    public function showGradeThreeReport()
    {
        return "<h1>Report for Grade three</h1>";
    }
}
