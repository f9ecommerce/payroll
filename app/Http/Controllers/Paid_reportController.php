<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paid_report;
use Illuminate\Http\Request;

class Paid_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$paid_reports = Paid_report::orderBy('id', 'desc')->paginate(10);

		return view('paid_reports.index', compact('paid_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('paid_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$paid_report = new Paid_report();

		$paid_report->branch_name = $request->input("branch_name");
        $paid_report->division_name = $request->input("division_name");
        $paid_report->emp_name = $request->input("emp_name");
        $paid_report->salary_month = $request->input("salary_month");

		$paid_report->save();

		return redirect()->route('paid_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$paid_report = Paid_report::findOrFail($id);

		return view('paid_reports.show', compact('paid_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$paid_report = Paid_report::findOrFail($id);

		return view('paid_reports.edit', compact('paid_report'));
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
		$paid_report = Paid_report::findOrFail($id);

		$paid_report->branch_name = $request->input("branch_name");
        $paid_report->division_name = $request->input("division_name");
        $paid_report->emp_name = $request->input("emp_name");
        $paid_report->salary_month = $request->input("salary_month");

		$paid_report->save();

		return redirect()->route('paid_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$paid_report = Paid_report::findOrFail($id);
		$paid_report->delete();

		return redirect()->route('paid_reports.index')->with('message', 'Item deleted successfully.');
	}

}
