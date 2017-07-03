<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paymentby_cashier;
use Illuminate\Http\Request;

class Paymentby_cashierController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$paymentby_cashiers = Paymentby_cashier::orderBy('id', 'desc')->paginate(10);

		return view('paymentby_cashiers.index', compact('paymentby_cashiers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('paymentby_cashiers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$paymentby_cashier = new Paymentby_cashier();

		$paymentby_cashier->month = $request->input("month");
        $paymentby_cashier->branch_name = $request->input("branch_name");
        $paymentby_cashier->division_name = $request->input("division_name");
        $paymentby_cashier->emp_name = $request->input("emp_name");
        $paymentby_cashier->payment = $request->input("payment");

		$paymentby_cashier->save();

		return redirect()->route('paymentby_cashiers.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$paymentby_cashier = Paymentby_cashier::findOrFail($id);

		return view('paymentby_cashiers.show', compact('paymentby_cashier'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$paymentby_cashier = Paymentby_cashier::findOrFail($id);

		return view('paymentby_cashiers.edit', compact('paymentby_cashier'));
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
		$paymentby_cashier = Paymentby_cashier::findOrFail($id);

		$paymentby_cashier->month = $request->input("month");
        $paymentby_cashier->branch_name = $request->input("branch_name");
        $paymentby_cashier->division_name = $request->input("division_name");
        $paymentby_cashier->emp_name = $request->input("emp_name");
        $paymentby_cashier->payment = $request->input("payment");

		$paymentby_cashier->save();

		return redirect()->route('paymentby_cashiers.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$paymentby_cashier = Paymentby_cashier::findOrFail($id);
		$paymentby_cashier->delete();

		return redirect()->route('paymentby_cashiers.index')->with('message', 'Item deleted successfully.');
	}

}
