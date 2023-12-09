<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Illuminate\Support\Carbon;

class DashboardGraphDataFetch extends Controller
{
    public function __invoke()
    {
        $x=1;
        $final_week_values = [];
        while ($x <= 7) {
            $final_day_val=0;
            $day_value_array=Expense::whereDate('created_at','  =', Carbon::today()->subDays($x))->get();
            foreach ($day_value_array as $val) {
                $final_day_val= $final_day_val + $val->Ammount;
            }
            if (Carbon::today()->subDays($x)->weekday() == 1) {
                $final_week_values[sizeof($final_week_values)] =  ['MON',$final_day_val];
            }elseif (Carbon::today()->subDays($x)->weekday() == 2) {
                $final_week_values[sizeof($final_week_values)] =  ['TUE',$final_day_val];
            }elseif (Carbon::today()->subDays($x)->weekday() == 3) {
                $final_week_values[sizeof($final_week_values)] =  ['WED',$final_day_val];
            }elseif (Carbon::today()->subDays($x)->weekday() == 4) {
                $final_week_values[sizeof($final_week_values)] =  ['THU',$final_day_val];
            }elseif (Carbon::today()->subDays($x)->weekday() == 5) {
                $final_week_values[sizeof($final_week_values)] =  ['FRI',$final_day_val];
            }elseif (Carbon::today()->subDays($x)->weekday() == 6) {
                $final_week_values[sizeof($final_week_values)] =  ['SAT',$final_day_val];
            }elseif (Carbon::today()->subDays($x)->weekday() == 7) {
                $final_week_values[sizeof($final_week_values)] =  ['SUN',$final_day_val];
            }
            $x++;
        }
        echo json_encode($final_week_values);
        //echo json_encode();
    }
}
