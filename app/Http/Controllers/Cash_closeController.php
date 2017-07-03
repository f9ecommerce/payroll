<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cash_close;
use Illuminate\Http\Request;

class Cash_closeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cash_closes = Cash_close::orderBy('id', 'desc')->paginate(10);

		return view('cash_closes.index', compact('cash_closes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cash_closes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cash_close = new Cash_close();

		$cash_close->month = $request->input("month");
        $cash_close->branch_name = $request->input("branch_name");

		$cash_close->save();

		return redirect()->route('cash_closes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cash_close = Cash_close::findOrFail($id);

		return view('cash_closes.show', compact('cash_close'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cash_close = Cash_close::findOrFail($id);

		return view('cash_closes.edit', compact('cash_close'));
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
		$cash_close = Cash_close::findOrFail($id);

		$cash_close->month = $request->input("month");
        $cash_close->branch_name = $request->input("branch_name");

		$cash_close->save();

		return redirect()->route('cash_closes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cash_close = Cash_close::findOrFail($id);
		$cash_close->delete();

		return redirect()->route('cash_closes.index')->with('message', 'Item deleted successfully.');
	}

}
