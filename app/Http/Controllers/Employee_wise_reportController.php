<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee_wise_report;
use Illuminate\Http\Request;

class Employee_wise_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_wise_reports = Employee_wise_report::orderBy('id', 'desc')->paginate(10);

		return view('employee_wise_reports.index', compact('employee_wise_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employee_wise_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$employee_wise_report = new Employee_wise_report();

		$employee_wise_report->branch = $request->input("branch");
        $employee_wise_report->division_name = $request->input("division_name");
        $employee_wise_report->emp_name = $request->input("emp_name");
        $employee_wise_report->from_date = $request->input("from_date");
        $employee_wise_report->to_date = $request->input("to_date");

		$employee_wise_report->save();

		return redirect()->route('employee_wise_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee_wise_report = Employee_wise_report::findOrFail($id);

		return view('employee_wise_reports.show', compact('employee_wise_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee_wise_report = Employee_wise_report::findOrFail($id);

		return view('employee_wise_reports.edit', compact('employee_wise_report'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$employee_wise_report = Employee_wise_report::findOrFail($id);

		$employee_wise_report->branch = $request->input("branch");
        $employee_wise_report->division_name = $request->input("division_name");
        $employee_wise_report->emp_name = $request->input("emp_name");
        $employee_wise_report->from_date = $request->input("from_date");
        $employee_wise_report->to_date = $request->input("to_date");

		$employee_wise_report->save();

		return redirect()->route('employee_wise_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee_wise_report = Employee_wise_report::findOrFail($id);
		$employee_wise_report->delete();

		return redirect()->route('employee_wise_reports.index')->with('message', 'Item deleted successfully.');
	}

}
