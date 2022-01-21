<?php

namespace App\Utilities;

use Carbon\Carbon;

class DateConversion
{
    /**
     * @param $date
     * @return string
     */
    public function convertDate($date)
    {
        $dateArray = explode("/", $date);
        if (count($dateArray) > 1) {
            return Carbon::createFromFormat("m/d/Y", $date)->format("Y-m-d");
        }
        return $date;
    }
}