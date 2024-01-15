<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() {
        $subjects = Subjects::paginate(10);
        return view('subjects.list',compact('subjects'));
    }
    public function create() {
        return view('subjects.create');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'dob' => 'required',
            'frequency' => 'required',
            'frequency_unit' => 'required'
        ]);
    
        Subjects::create($validatedData);
        $request->session()->flash('success', 'Subject added successfully');
        return redirect('/')->with('success', 'Subject created successfully');
    }
}
