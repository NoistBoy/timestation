<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\Latetime;
use App\Models\Attendance;
use App\Models\Department;


class AdminController extends Controller
{


    public function index()
    {
        //Dashboard statistics
        $d =date('Y-m-d');
        $totalEmp =  count(Employee::all());
        $AllAttendance = count(Attendance::whereAttendance_date(date("Y-m-d"))->get());
        $ontimeEmp = count(Attendance::whereAttendance_date(date("Y-m-d"))->whereStatus('1')->get());
        $latetimeEmp = count(Attendance::whereAttendance_date(date("Y-m-d"))->whereStatus('0')->get());
        $Empgname = Employee::join('attendances', 'employees.id', '=', 'attendances.emp_id')
            ->whereDate('attendances.attendance_date', '=', date('Y-m-d'))
            ->groupBy('employees.position') // Include 'position' in the group by
            ->selectRaw('employees.position as position')
            ->selectRaw('count(DISTINCT employees.id) as count')
            ->selectRaw('SUM(IF(attendances.status = 1, 1, 0)) as ine')
            ->selectRaw('SUM(IF(attendances.status =  0, 1, 0)) as oute')
            ->get();
        if($AllAttendance > 0){
                $percentageOntime = str_split(($ontimeEmp/ $AllAttendance)*100, 4)[0];
            }else {
                $percentageOntime = 0 ;
            }

        $data = [$totalEmp, $ontimeEmp, $latetimeEmp, $percentageOntime];

        return view('admin.index')->with(['data' => $data,'attendances' => Attendance::all(),'empgnams' => $Empgname]);
    }

}