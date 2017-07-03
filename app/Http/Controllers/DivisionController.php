<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$divisions = Division::orderBy('id', 'asc')->paginate(5);

		return view('divisions.index', compact('divisions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('divisions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$division = new Division();

		$this->validate($request,[
		'branch_name' => 'required|unique:branches'
			]);

		$division->devision_name = $request->input("devision_name");

		$division->save();

		return redirect()->route('divisions.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$division = Division::findOrFail($id);

		return view('divisions.show', compact('division'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$division = Division::findOrFail($id);

		return view('divisions.edit', compact('division'));
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
		$division = Division::findOrFail($id);

		$division->devision_name = $request->input("devision_name");

		$division->save();

		return redirect()->route('divisions.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$division = Division::findOrFail($id);
		$division->delete();

		return redirect()->route('divisions.index')->with('message', 'Item deleted successfully.');
	}

}
