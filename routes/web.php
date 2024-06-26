<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FingerDevicesControlller;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('attended/{user_id}', '\App\Http\Controllers\AttendanceController@attended' )->name('attended');
Route::get('attended-before/{user_id}', '\App\Http\Controllers\AttendanceController@attendedBefore' )->name('attendedBefore');
Auth::routes(['register' => false, 'reset' => false]);

Route::group(['middleware' => ['auth', 'Role'], 'roles' => ['admin']], function () {
    //Route::resource('/employees', '\App\Http\Controllers\EmployeeController');
    Route::get('/users', '\App\Http\Controllers\UsersController@index');
    Route::resource('/employees', '\App\Http\Controllers\EmployeeController');
    Route::get('/attendance', '\App\Http\Controllers\AttendanceController@index')->name('attendance');
    Route::post('/empattandenceupdate', '\App\Http\Controllers\AttendanceController@empattandenceupdate')->name('empattandenceupdate');
    Route::post('/addempattandenceupdate', '\App\Http\Controllers\AttendanceController@addempattandenceupdate')->name('addempattandenceupdate');
    Route::get('/latetime', '\App\Http\Controllers\AttendanceController@indexLatetime')->name('indexLatetime');
    Route::get('/leave', '\App\Http\Controllers\LeaveController@index')->name('leave');
    Route::get('/overtime', '\App\Http\Controllers\LeaveController@indexOvertime')->name('indexOvertime');
    Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');
    Route::get('/recentActivity', '\App\Http\Controllers\AdminController@recentActivity');
    Route::resource('/schedule', '\App\Http\Controllers\ScheduleController');
    Route::resource('/department', '\App\Http\Controllers\DepartmentController');
    Route::resource('/business-setting', '\App\Http\Controllers\BusinessSettingController');
    Route::resource('/assigntask', '\App\Http\Controllers\AssigntaskController');
    Route::get('/check', '\App\Http\Controllers\CheckController@index')->name('check');
    Route::get('/sheet-report', '\App\Http\Controllers\CheckController@sheetReport')->name('sheet-report');
    Route::get('/report', '\App\Http\Controllers\ReportController@index')->name('report');
    Route::get('/employee-daily', '\App\Http\Controllers\CheckController@employeedailyReport')->name('employee-daily');
    Route::get('/daily-absence', '\App\Http\Controllers\CheckController@dailyabsenceReport')->name('daily-absence');
    Route::get('/current-employee', '\App\Http\Controllers\CheckController@currentemployee')->name('current-employee');
    Route::get('/summary-report', '\App\Http\Controllers\CheckController@summaryReport')->name('summary-report');
    Route::get('/summary-reporttwo', '\App\Http\Controllers\CheckController@summaryReportTwo')->name('summary-reporttwo');
    Route::post('/filter', '\App\Http\Controllers\CheckController@filter')->name('filter');
    Route::post('/pay', '\App\Http\Controllers\CheckController@pay')->name('pay');
    Route::post('/paynow', '\App\Http\Controllers\CheckController@paynow')->name('paynow');
    Route::post('check-store','\App\Http\Controllers\CheckController@CheckStore')->name('check_store');
    // Fingerprint Devices
    Route::post('/check-duplicate', '\App\Http\Controllers\EmployeeController@checkDuplicate')->name('check-duplicate');
    Route::resource('/finger_device', '\App\Http\Controllers\BiometricDeviceController');
    Route::delete('finger_device/destroy', '\App\Http\Controllers\BiometricDeviceController@massDestroy')->name('finger_device.massDestroy');
    Route::get('finger_device/{fingerDevice}/employees/add', '\App\Http\Controllers\BiometricDeviceController@addEmployee')->name('finger_device.add.employee');
    Route::get('finger_device/{fingerDevice}/get/attendance', '\App\Http\Controllers\BiometricDeviceController@getAttendance')->name('finger_device.get.attendance');
    // Temp Clear Attendance route
    Route::get('finger_device/clear/attendance', function () {
        $midnight = \Carbon\Carbon::createFromTime(23, 50, 00);
        $diff = now()->diffInMinutes($midnight);
        dispatch(new ClearAttendanceJob())->delay(now()->addMinutes($diff));
        toast("Attendance Clearance Queue will run in 11:50 P.M}!", "success");
        return back();
    })->name('finger_device.clear.attendance');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['middleware' => ['auth']], function () {
     Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
    //Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});

 Route::get('/attendance/assign', function () {
     return view('attendance_leave_login');
 })->name('attendance.login');

 Route::post('/attendance/assign', '\App\Http\Controllers\AttendanceController@assign')->name('attendance.assign');


 Route::get('/leave/assign', function () {
     return view('attendance_leave_login');
 })->name('leave.login');

 Route::post('/leave/assign', '\App\Http\Controllers\LeaveController@assign')->name('leave.assign');


 Route::get('{any}', 'App\http\controllers\VeltrixController@index');
