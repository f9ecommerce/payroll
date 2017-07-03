<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Salary_payment;
use Illuminate\Http\Request;

class Salary_paymentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$salary_payments = Salary_payment::orderBy('id', 'desc')->paginate(10);

		return view('salary_payments.index', compact('salary_payments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('salary_payments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$salary_payment = new Salary_payment();

		$salary_payment->month = $request->input("month");
        $salary_payment->branch_name = $request->input("branch_name");
        $salary_payment->division_name = $request->input("division_name");
        $salary_payment->emp_name = $request->input("emp_name");
        $salary_payment->salary = $request->input("salary");
        $salary_payment->increment = $request->input("increment");
        $salary_payment->abscent = $request->input("abscent");
        $salary_payment->adjusted_abscent = $request->input("adjusted_abscent");
        $salary_payment->ot_amount = $request->input("ot_amount");
        $salary_payment->adj_otdays = $request->input("adj_otdays");
        $salary_payment->basic = $request->input("basic");
        $salary_payment->bonous = $request->input("bonous");
        $salary_payment->salary_advance = $request->input("salary_advance");
        $salary_payment->hra = $request->input("hra");
        $salary_payment->allowance = $request->input("allowance");
        $salary_payment->other_allowance = $request->input("other_allowance");
        $salary_payment->description = $request->input("description");
        $salary_payment->sal_to_be_paid = $request->input("sal_to_be_paid");
        $salary_payment->payment = $request->input("payment");
        $salary_payment->od_open_amount = $request->input("od_open_amount");
        $salary_payment->od_close_amount = $request->input("od_close_amount");
        $salary_payment->pay_salary = $request->input("pay_salary");

		$salary_payment->save();

		return redirect()->route('salary_payments.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$salary_payment = Salary_payment::findOrFail($id);

		return view('salary_payments.show', compact('salary_payment'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$salary_payment = Salary_payment::findOrFail($id);

		return view('salary_payments.edit', compact('salary_payment'));
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
		$salary_payment = Salary_payment::findOrFail($id);

		$salary_payment->month = $request->input("month");
        $salary_payment->branch_name = $request->input("branch_name");
        $salary_payment->division_name = $request->input("division_name");
        $salary_payment->emp_name = $request->input("emp_name");
        $salary_payment->salary = $request->input("salary");
        $salary_payment->increment = $request->input("increment");
        $salary_payment->abscent = $request->input("abscent");
        $salary_payment->adjusted_abscent = $request->input("adjusted_abscent");
        $salary_payment->ot_amount = $request->input("ot_amount");
        $salary_payment->adj_otdays = $request->input("adj_otdays");
        $salary_payment->basic = $request->input("basic");
        $salary_payment->bonous = $request->input("bonous");
        $salary_payment->salary_advance = $request->input("salary_advance");
        $salary_payment->hra = $request->input("hra");
        $salary_payment->allowance = $request->input("allowance");
        $salary_payment->other_allowance = $request->input("other_allowance");
        $salary_payment->description = $request->input("description");
        $salary_payment->sal_to_be_paid = $request->input("sal_to_be_paid");
        $salary_payment->payment = $request->input("payment");
        $salary_payment->od_open_amount = $request->input("od_open_amount");
        $salary_payment->od_close_amount = $request->input("od_close_amount");
        $salary_payment->pay_salary = $request->input("pay_salary");

		$salary_payment->save();

		return redirect()->route('salary_payments.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$salary_payment = Salary_payment::findOrFail($id);
		$salary_payment->delete();

		return redirect()->route('salary_payments.index')->with('message', 'Item deleted successfully.');
	}

}
