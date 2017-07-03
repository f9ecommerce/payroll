<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee_list;
use Illuminate\Http\Request;

class Employee_listController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_lists = Employee_list::orderBy('id', 'desc')->paginate(10);

		return view('employee_lists.index', compact('employee_lists'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employee_lists.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$employee_list = new Employee_list();

		$employee_list->division_name = $request->input("division_name");
        $employee_list->emp_status = $request->input("emp_status");

		$employee_list->save();

		return redirect()->route('employee_lists.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee_list = Employee_list::findOrFail($id);

		return view('employee_lists.show', compact('employee_list'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee_list = Employee_list::findOrFail($id);

		return view('employee_lists.edit', compact('employee_list'));
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
		$employee_list = Employee_list::findOrFail($id);

		$employee_list->division_name = $request->input("division_name");
        $employee_list->emp_status = $request->input("emp_status");

		$employee_list->save();

		return redirect()->route('employee_lists.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee_list = Employee_list::findOrFail($id);
		$employee_list->delete();

		return redirect()->route('employee_lists.index')->with('message', 'Item deleted successfully.');
	}

}
