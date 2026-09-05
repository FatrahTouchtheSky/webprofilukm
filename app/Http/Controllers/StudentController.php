<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:students',
            'department' => 'required|string|max:255',
            'program_of_study' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'address' => 'required|string',
            'email' => 'required|email|max:255|unique:students',
            'phone_number' => 'required|string|max:20',
            'unit_of_activity' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:40960',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'department' => $request->department,
            'program_of_study' => $request->program_of_study,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'unit_of_activity' => $request->unit_of_activity,
            'photo' => $photoPath,
        ]);

        return redirect()->route('students.success');
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }

    public function success()
    {
        return view('students.success');
    }
}
