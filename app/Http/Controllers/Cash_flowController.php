<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cash_flow;
use Illuminate\Http\Request;

class Cash_flowController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cash_flows = Cash_flow::orderBy('id', 'desc')->paginate(10);

		return view('cash_flows.index', compact('cash_flows'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cash_flows.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cash_flow = new Cash_flow();

		$cash_flow->month = $request->input("month");
        $cash_flow->branch_name = $request->input("branch_name");
        $cash_flow->type = $request->input("type");
        $cash_flow->cashier = $request->input("cashier");
        $cash_flow->payment = $request->input("payment");

		$cash_flow->save();

		return redirect()->route('cash_flows.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cash_flow = Cash_flow::findOrFail($id);

		return view('cash_flows.show', compact('cash_flow'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cash_flow = Cash_flow::findOrFail($id);

		return view('cash_flows.edit', compact('cash_flow'));
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
		$cash_flow = Cash_flow::findOrFail($id);

		$cash_flow->month = $request->input("month");
        $cash_flow->branch_name = $request->input("branch_name");
        $cash_flow->type = $request->input("type");
        $cash_flow->cashier = $request->input("cashier");
        $cash_flow->payment = $request->input("payment");

		$cash_flow->save();

		return redirect()->route('cash_flows.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cash_flow = Cash_flow::findOrFail($id);
		$cash_flow->delete();

		return redirect()->route('cash_flows.index')->with('message', 'Item deleted successfully.');
	}

}
