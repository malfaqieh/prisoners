<?php

namespace App\Http\Controllers;
use App\Models\prisoner;
use Illuminate\Http\Request;

class PrisonersController extends Controller
{
    public function index()
    {
        $prisoners = prisoner::all();
        return view('prisoners.index', compact('prisoners') );
    }
    public function create()
    {
        return view('prisoners.create');
    }
    public function store(Request $request)
    {
        $prisoner = new prisoner();
        $prisoner->first_name = $request->first_name;
        $prisoner->last_name = $request->last_name;
        $prisoner->national_id = $request->national_id;
        $prisoner->prisoner_number = $request->prisoner_number;
        $prisoner->prisoner_card_id = $request->prisoner_card_id;
        $prisoner->phone_number = $request->phone_number;
        $prisoner->date_of_birth = $request->date_of_birth;
        $prisoner->entry_date = $request->entry_date;
        $prisoner->is_active = $request->is_active;
        $prisoner->save();
        return redirect()->route('prisoners.index');
    }
    public function show($id)
    {
        $prisoner = prisoner::find($id);
        return view('prisoners.show', compact('prisoner'));
    }
    public function edit($id)
    {
        $prisoner = prisoner::find($id);
    }
    public function update(Request $request, $id)
    {
        $prisoner = prisoner::find($id);
        $prisoner->first_name = $request->first_name;
        $prisoner->last_name = $request->last_name;
        $prisoner->national_id = $request->national_id;
        $prisoner->prisoner_number = $request->prisoner_number;
    }
    public function destroy($id)
    {
        $prisoner = prisoner::find($id);
        $prisoner->delete();
        return redirect()->route('prisoners.index');
    }
}
