<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        DB::table('students')->insert([
            'stud_no' => $request->input('stud_no'),
            'stud_fname' => $request->input('stud_fname'),
            'stud_lname' => $request->input('stud_lname'),
            'stud_add' => $request->input('stud_add'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        DB::table('students')->where('id', $id)->update([
            'stud_no' => $request->input('stud_no'),
            'stud_fname' => $request->input('stud_fname'),
            'stud_lname' => $request->input('stud_lname'),
            'stud_add' => $request->input('stud_add'),
            'updated_at' => now(),
        ]);

        return redirect()->route('students.index');
    }

    public function delete($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->route('students.index');
    }
}
