<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Set_salary_report;
use Illuminate\Http\Request;

class Set_salary_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$set_salary_reports = Set_salary_report::orderBy('id', 'desc')->paginate(10);

		return view('set_salary_reports.index', compact('set_salary_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('set_salary_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$set_salary_report = new Set_salary_report();

		$set_salary_report->branch = $request->input("branch");
        $set_salary_report->division_name = $request->input("division_name");
        $set_salary_report->emp_name = $request->input("emp_name");
        $set_salary_report->salary_month = $request->input("salary_month");

		$set_salary_report->save();

		return redirect()->route('set_salary_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$set_salary_report = Set_salary_report::findOrFail($id);

		return view('set_salary_reports.show', compact('set_salary_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$set_salary_report = Set_salary_report::findOrFail($id);

		return view('set_salary_reports.edit', compact('set_salary_report'));
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
		$set_salary_report = Set_salary_report::findOrFail($id);

		$set_salary_report->branch = $request->input("branch");
        $set_salary_report->division_name = $request->input("division_name");
        $set_salary_report->emp_name = $request->input("emp_name");
        $set_salary_report->salary_month = $request->input("salary_month");

		$set_salary_report->save();

		return redirect()->route('set_salary_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$set_salary_report = Set_salary_report::findOrFail($id);
		$set_salary_report->delete();

		return redirect()->route('set_salary_reports.index')->with('message', 'Item deleted successfully.');
	}

}
