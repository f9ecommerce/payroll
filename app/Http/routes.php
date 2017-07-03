<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource("user_creations","User_creationController"); 

Route::resource("branches","BranchController");

Route::resource("divisions","DivisionController");

Route::resource("designations","DesignationController");

Route::resource("hras","HraController");

Route::resource("employee_creations","Employee_creationController");

Route::resource("attendance_entries","Attendance_entryController");

Route::resource("paymentby_cashiers","Paymentby_cashierController");


Route::resource("cash_flows","Cash_flowController"); 

Route::resource("salary_payments","Salary_paymentController");

Route::resource("cash_closes","Cash_closeController"); 


Route::resource("employee_lists","Employee_listController"); 

Route::resource("employee_wise_reports","Employee_wise_reportController"); 

Route::resource("set_salary_reports","Set_salary_reportController");

Route::resource("cash_reports","Cash_reportController"); 

Route::resource("comparision_statements","Comparision_statementController");

Route::resource("salary_advanced_reports","Salary_advanced_reportController"); 

Route::resource("attendance_reports","Attendance_reportController"); 

Route::resource("paid_reports","Paid_reportController");

Route::resource("monthly_wise_salary_reports","Monthly_wise_salary_reportController");