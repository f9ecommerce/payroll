<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Attendance_report;
use Illuminate\Http\Request;

class Attendance_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$attendance_reports = Attendance_report::orderBy('id', 'desc')->paginate(10);

		return view('attendance_reports.index', compact('attendance_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('attendance_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$attendance_report = new Attendance_report();

		$attendance_report->branch_name = $request->input("branch_name");
        $attendance_report->division_name = $request->input("division_name");
        $attendance_report->emp_name = $request->input("emp_name");
        $attendance_report->attendance_month = $request->input("attendance_month");

		$attendance_report->save();

		return redirect()->route('attendance_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$attendance_report = Attendance_report::findOrFail($id);

		return view('attendance_reports.show', compact('attendance_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$attendance_report = Attendance_report::findOrFail($id);

		return view('attendance_reports.edit', compact('attendance_report'));
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
		$attendance_report = Attendance_report::findOrFail($id);

		$attendance_report->branch_name = $request->input("branch_name");
        $attendance_report->division_name = $request->input("division_name");
        $attendance_report->emp_name = $request->input("emp_name");
        $attendance_report->attendance_month = $request->input("attendance_month");

		$attendance_report->save();

		return redirect()->route('attendance_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$attendance_report = Attendance_report::findOrFail($id);
		$attendance_report->delete();

		return redirect()->route('attendance_reports.index')->with('message', 'Item deleted successfully.');
	}

}
