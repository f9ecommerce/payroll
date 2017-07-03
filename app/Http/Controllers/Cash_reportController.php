<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cash_report;
use Illuminate\Http\Request;

class Cash_reportController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cash_reports = Cash_report::orderBy('id', 'desc')->paginate(10);

		return view('cash_reports.index', compact('cash_reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cash_reports.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cash_report = new Cash_report();

		$cash_report->branch_name = $request->input("branch_name");
        $cash_report->monthly_totals = $request->input("monthly_totals");
        $cash_report->cash_month = $request->input("cash_month");

		$cash_report->save();

		return redirect()->route('cash_reports.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cash_report = Cash_report::findOrFail($id);

		return view('cash_reports.show', compact('cash_report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cash_report = Cash_report::findOrFail($id);

		return view('cash_reports.edit', compact('cash_report'));
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
		$cash_report = Cash_report::findOrFail($id);

		$cash_report->branch_name = $request->input("branch_name");
        $cash_report->monthly_totals = $request->input("monthly_totals");
        $cash_report->cash_month = $request->input("cash_month");

		$cash_report->save();

		return redirect()->route('cash_reports.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cash_report = Cash_report::findOrFail($id);
		$cash_report->delete();

		return redirect()->route('cash_reports.index')->with('message', 'Item deleted successfully.');
	}

}
