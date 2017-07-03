<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Attendance_entry;
use Illuminate\Http\Request;

class Attendance_entryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$attendance_entries = Attendance_entry::orderBy('id', 'desc')->paginate(10);

		return view('attendance_entries.index', compact('attendance_entries'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('attendance_entries.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$attendance_entry = new Attendance_entry();

		$attendance_entry->attendance_month = $request->input("attendance_month");
        $attendance_entry->branch_name = $request->input("branch_name");
        $attendance_entry->division_name = $request->input("division_name");
        $attendance_entry->emp_name = $request->input("emp_name");
        $attendance_entry->working_days = $request->input("working_days");
        $attendance_entry->absecent_days = $request->input("absecent_days");
        $attendance_entry->ot_days = $request->input("ot_days");
        $attendance_entry->advance = $request->input("advance");

		$attendance_entry->save();

		return redirect()->route('attendance_entries.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$attendance_entry = Attendance_entry::findOrFail($id);

		return view('attendance_entries.show', compact('attendance_entry'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$attendance_entry = Attendance_entry::findOrFail($id);

		return view('attendance_entries.edit', compact('attendance_entry'));
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
		$attendance_entry = Attendance_entry::findOrFail($id);

		$attendance_entry->attendance_month = $request->input("attendance_month");
        $attendance_entry->branch_name = $request->input("branch_name");
        $attendance_entry->division_name = $request->input("division_name");
        $attendance_entry->emp_name = $request->input("emp_name");
        $attendance_entry->working_days = $request->input("working_days");
        $attendance_entry->absecent_days = $request->input("absecent_days");
        $attendance_entry->ot_days = $request->input("ot_days");
        $attendance_entry->advance = $request->input("advance");

		$attendance_entry->save();

		return redirect()->route('attendance_entries.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$attendance_entry = Attendance_entry::findOrFail($id);
		$attendance_entry->delete();

		return redirect()->route('attendance_entries.index')->with('message', 'Item deleted successfully.');
	}

}
