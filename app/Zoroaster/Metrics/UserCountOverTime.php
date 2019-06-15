<?php

namespace App\Zoroaster\Metrics;

use App\User;
use Illuminate\Http\Request;
use KarimQaderi\Zoroaster\Metrics\Trend;

class UserCountOverTime extends Trend
{

    public $label = 'تعداد کابرا در طول زمان';

    /**
     * Calculate the value of the metric.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function calculate(Request $request)
    {
        return $this->countByDays($request, User::class);
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [
            30 => '30 Days',
            1 => '1 Days',
            5 => '5 Days',
            60 => '60 Days',
            90 => '90 Days',
        ];
    }

}
