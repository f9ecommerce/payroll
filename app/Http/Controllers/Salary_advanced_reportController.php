<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Salary_advanced_report;
use Illuminate\Http\Request;

class Salary_advanced_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$salary_advanced_reports = Salary_advanced_report::orderBy('id', 'desc')->paginate(10);

		return view('salary_advanced_reports.index', compact('salary_advanced_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('salary_advanced_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$salary_advanced_report = new Salary_advanced_report();

		$salary_advanced_report->from_date = $request->input("from_date");
        $salary_advanced_report->to_date = $request->input("to_date");
        $salary_advanced_report->branch_name = $request->input("branch_name");
        $salary_advanced_report->division_name = $request->input("division_name");
        $salary_advanced_report->emp_name = $request->input("emp_name");

		$salary_advanced_report->save();

		return redirect()->route('salary_advanced_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$salary_advanced_report = Salary_advanced_report::findOrFail($id);

		return view('salary_advanced_reports.show', compact('salary_advanced_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$salary_advanced_report = Salary_advanced_report::findOrFail($id);

		return view('salary_advanced_reports.edit', compact('salary_advanced_report'));
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
		$salary_advanced_report = Salary_advanced_report::findOrFail($id);

		$salary_advanced_report->from_date = $request->input("from_date");
        $salary_advanced_report->to_date = $request->input("to_date");
        $salary_advanced_report->branch_name = $request->input("branch_name");
        $salary_advanced_report->division_name = $request->input("division_name");
        $salary_advanced_report->emp_name = $request->input("emp_name");

		$salary_advanced_report->save();

		return redirect()->route('salary_advanced_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$salary_advanced_report = Salary_advanced_report::findOrFail($id);
		$salary_advanced_report->delete();

		return redirect()->route('salary_advanced_reports.index')->with('message', 'Item deleted successfully.');
	}

}
