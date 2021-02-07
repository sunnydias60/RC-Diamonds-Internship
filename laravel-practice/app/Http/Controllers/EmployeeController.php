<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function employeeView(){
        return view('employee');
    }

    public function success(){
        $ab =  $_GET['success_value'];
        $successdisplay = DB::table('employees')
                        -> join('calls','calls.employee_id', '=' , 'employees.id')
                        -> join('call_outcome', 'calls.call_outcome_id',  '=' , 'call_outcome.id')
                        -> select('employees.first_name', 'employees.last_name', 'calls.start_time', 'calls.end_time', 'call_outcome.outcome_text')
                        -> where('call_outcome.id', $ab)
                        -> get();

                        return $successdisplay;
    }

    public function show(){
        $show = DB::table('employee')
                    -> select('*')
                    ->get();

                    return $show;
    }

    public function showAvgCall() {
        
        $queryy = 'AVG(IFNULL(TIMESTAMPDIFF(SECOND, calls.start_time, calls.end_time),0))' . $_GET['operators'] .
        '(SELECT AVG(TIMESTAMPDIFF(SECOND, calls.start_time, calls.end_time)) from calls)';
        $showAvg = DB::table('country')
                -> select('country.country_name') 
                -> selectRaw('SUM(CASE WHEN calls.id IS NOT NULL THEN 1 ELSE 0 END) AS callss') 
                -> selectRaw('AVG(IFNULL(TIMESTAMPDIFF(SECOND, calls.start_time, calls.end_time),0)) AS avg_difference')
                ->join('city','city.country_id', '=', 'country.id')
                ->join('customers','customers.city_id','=','city.id')
                ->join('calls','calls.customer_id','=','customers.id')
                -> groupBy('country.country_name', 'country.id')
                -> havingRaw($queryy)
                -> get();

                return $showAvg;
    }
}

