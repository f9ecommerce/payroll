<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User_creation;
use Illuminate\Http\Request;

class User_creationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_creations = User_creation::orderBy('id', 'desc')->paginate(10);

		return view('user_creations.index', compact('user_creations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user_creations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$user_creation = new User_creation();

		$user_creation->emp_name = $request->input("emp_name");
        $user_creation->user_name = $request->input("user_name");
        $user_creation->password = $request->input("password");
        $user_creation->confirm_password = $request->input("confirm_password");
        $user_creation->role = $request->input("role");

		$user_creation->save();

		return redirect()->route('user_creations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user_creation = User_creation::findOrFail($id);

		return view('user_creations.show', compact('user_creation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user_creation = User_creation::findOrFail($id);

		return view('user_creations.edit', compact('user_creation'));
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
		$user_creation = User_creation::findOrFail($id);

		$user_creation->emp_name = $request->input("emp_name");
        $user_creation->user_name = $request->input("user_name");
        $user_creation->password = $request->input("password");
        $user_creation->confirm_password = $request->input("confirm_password");
        $user_creation->role = $request->input("role");

		$user_creation->save();

		return redirect()->route('user_creations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user_creation = User_creation::findOrFail($id);
		$user_creation->delete();

		return redirect()->route('user_creations.index')->with('message', 'Item deleted successfully.');
	}

}
