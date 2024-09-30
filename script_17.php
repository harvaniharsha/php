<?php
function isLeapyear($year)
{
    if(($year % 4==0 && $year%100!=0) || ($year%400==0))
    {
        $year=2024;
        if(isLeapyear($year))
        {
            echo "leap year";
        }
        else
        {
            echo "not leap year";
        }
    }
}
?>