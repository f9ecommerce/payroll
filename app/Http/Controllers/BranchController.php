<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$branches = Branch::orderBy('id', 'asc')->paginate(5);

		return view('branches.index', compact('branches'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('branches.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$branch = new Branch();
		$this->validate($request,[
		'branch_name' => 'required|unique:branches'
			]);

		$branch->branch_name = $request->input("branch_name");

		$branch->save();

		return redirect()->route('branches.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$branch = Branch::findOrFail($id);

		return view('branches.show', compact('branch'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$branch = Branch::findOrFail($id);

		return view('branches.edit', compact('branch'));
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
		$branch = Branch::findOrFail($id);

		$branch->branch_name = $request->input("branch_name");

		$branch->save();

		return redirect()->route('branches.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$branch = Branch::findOrFail($id);
		$branch->delete();

		return redirect()->route('branches.index')->with('message', 'Item deleted successfully.');
	}

}
