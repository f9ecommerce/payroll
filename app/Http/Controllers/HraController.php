<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hra;
use Illuminate\Http\Request;

class HraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hras = Hra::orderBy('id', 'desc')->paginate(10);

		return view('hras.index', compact('hras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('hras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$hra = new Hra();

		$hra->devision_name = $request->input("devision_name");
        $hra->emp_name = $request->input("emp_name");
        $hra->hra = $request->input("hra");

		$hra->save();

		return redirect()->route('hras.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hra = Hra::findOrFail($id);

		return view('hras.show', compact('hra'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hra = Hra::findOrFail($id);

		return view('hras.edit', compact('hra'));
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
		$hra = Hra::findOrFail($id);

		$hra->devision_name = $request->input("devision_name");
        $hra->emp_name = $request->input("emp_name");
        $hra->hra = $request->input("hra");

		$hra->save();

		return redirect()->route('hras.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hra = Hra::findOrFail($id);
		$hra->delete();

		return redirect()->route('hras.index')->with('message', 'Item deleted successfully.');
	}

}
