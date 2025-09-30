<?php

namespace Src\Bridge\Reports;

class XMLReport implements ReportInterface
{
    public function showGradeOneReport()
    {
        return "Grade one XML Report";
    }

    public function showGradeTwoReport()
    {
         return "Grade two XML Report";
    }

    public function showGradeThreeReport()
    {
         return "Grade three XML Report";
    }
}
