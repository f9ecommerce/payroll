<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$designations = Designation::orderBy('id', 'asc')->paginate(5);

		return view('designations.index', compact('designations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('designations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$designation = new Designation();

		$designation->designation_name = $request->input("designation_name");

		$designation->save();

		return redirect()->route('designations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$designation = Designation::findOrFail($id);

		return view('designations.show', compact('designation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$designation = Designation::findOrFail($id);

		return view('designations.edit', compact('designation'));
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
		$designation = Designation::findOrFail($id);

		$designation->designation_name = $request->input("designation_name");

		$designation->save();

		return redirect()->route('designations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$designation = Designation::findOrFail($id);
		$designation->delete();

		return redirect()->route('designations.index')->with('message', 'Item deleted successfully.');
	}

}
