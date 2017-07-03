<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Monthly_wise_salary_report;
use Illuminate\Http\Request;

class Monthly_wise_salary_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$monthly_wise_salary_reports = Monthly_wise_salary_report::orderBy('id', 'desc')->paginate(10);

		return view('monthly_wise_salary_reports.index', compact('monthly_wise_salary_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('monthly_wise_salary_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$monthly_wise_salary_report = new Monthly_wise_salary_report();

		$monthly_wise_salary_report->branch_name = $request->input("branch_name");
        $monthly_wise_salary_report->division_name = $request->input("division_name");
        $monthly_wise_salary_report->emp_name = $request->input("emp_name");
        $monthly_wise_salary_report->salary_month = $request->input("salary_month");

		$monthly_wise_salary_report->save();

		return redirect()->route('monthly_wise_salary_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$monthly_wise_salary_report = Monthly_wise_salary_report::findOrFail($id);

		return view('monthly_wise_salary_reports.show', compact('monthly_wise_salary_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$monthly_wise_salary_report = Monthly_wise_salary_report::findOrFail($id);

		return view('monthly_wise_salary_reports.edit', compact('monthly_wise_salary_report'));
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
		$monthly_wise_salary_report = Monthly_wise_salary_report::findOrFail($id);

		$monthly_wise_salary_report->branch_name = $request->input("branch_name");
        $monthly_wise_salary_report->division_name = $request->input("division_name");
        $monthly_wise_salary_report->emp_name = $request->input("emp_name");
        $monthly_wise_salary_report->salary_month = $request->input("salary_month");

		$monthly_wise_salary_report->save();

		return redirect()->route('monthly_wise_salary_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$monthly_wise_salary_report = Monthly_wise_salary_report::findOrFail($id);
		$monthly_wise_salary_report->delete();

		return redirect()->route('monthly_wise_salary_reports.index')->with('message', 'Item deleted successfully.');
	}

}
