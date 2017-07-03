<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee_creation;
use Illuminate\Http\Request;

class Employee_creationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$employee_creations = Employee_creation::orderBy('id', 'desc')->paginate(10);

		return view('employee_creations.index', compact('employee_creations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('employee_creations.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$employee_creation = new Employee_creation();

		$employee_creation->emp_name = $request->input("emp_name");
        $employee_creation->sur_name = $request->input("sur_name");
        $employee_creation->father_name = $request->input("father_name");
        $employee_creation->Mobile = $request->input("Mobile");
        $employee_creation->dob = $request->input("dob");
        $employee_creation->qualification = $request->input("qualification");
        $employee_creation->doj = $request->input("doj");
        $employee_creation->salary = $request->input("salary");
        $employee_creation->status = $request->input("status");
        $employee_creation->branch = $request->input("branch");
        $employee_creation->division = $request->input("division");
        $employee_creation->designation = $request->input("designation");
        $employee_creation->description = $request->input("description");
        $employee_creation->address = $request->input("address");

		$employee_creation->save();

		return redirect()->route('employee_creations.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$employee_creation = Employee_creation::findOrFail($id);

		return view('employee_creations.show', compact('employee_creation'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$employee_creation = Employee_creation::findOrFail($id);

		return view('employee_creations.edit', compact('employee_creation'));
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
		$employee_creation = Employee_creation::findOrFail($id);

		$employee_creation->emp_name = $request->input("emp_name");
        $employee_creation->sur_name = $request->input("sur_name");
        $employee_creation->father_name = $request->input("father_name");
        $employee_creation->Mobile = $request->input("Mobile");
        $employee_creation->dob = $request->input("dob");
        $employee_creation->qualification = $request->input("qualification");
        $employee_creation->doj = $request->input("doj");
        $employee_creation->salary = $request->input("salary");
        $employee_creation->status = $request->input("status");
        $employee_creation->branch = $request->input("branch");
        $employee_creation->division = $request->input("division");
        $employee_creation->designation = $request->input("designation");
        $employee_creation->description = $request->input("description");
        $employee_creation->address = $request->input("address");

		$employee_creation->save();

		return redirect()->route('employee_creations.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee_creation = Employee_creation::findOrFail($id);
		$employee_creation->delete();

		return redirect()->route('employee_creations.index')->with('message', 'Item deleted successfully.');
	}

}
