<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Comparision_statement;
use Illuminate\Http\Request;

class Comparision_statementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$comparision_statements = Comparision_statement::orderBy('id', 'desc')->paginate(10);

		return view('comparision_statements.index', compact('comparision_statements'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('comparision_statements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$comparision_statement = new Comparision_statement();

		$comparision_statement->salary_from = $request->input("salary_from");
        $comparision_statement->salary_to = $request->input("salary_to");

		$comparision_statement->save();

		return redirect()->route('comparision_statements.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$comparision_statement = Comparision_statement::findOrFail($id);

		return view('comparision_statements.show', compact('comparision_statement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$comparision_statement = Comparision_statement::findOrFail($id);

		return view('comparision_statements.edit', compact('comparision_statement'));
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
		$comparision_statement = Comparision_statement::findOrFail($id);

		$comparision_statement->salary_from = $request->input("salary_from");
        $comparision_statement->salary_to = $request->input("salary_to");

		$comparision_statement->save();

		return redirect()->route('comparision_statements.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$comparision_statement = Comparision_statement::findOrFail($id);
		$comparision_statement->delete();

		return redirect()->route('comparision_statements.index')->with('message', 'Item deleted successfully.');
	}

}
