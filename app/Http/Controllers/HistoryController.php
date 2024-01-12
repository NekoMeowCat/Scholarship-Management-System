<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\History;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $fullName = $request->input('full_name'); 
        $semester = $request->input('semester');
        $schoolYear = $request->input('school_year');

        $query = Students::query();

        if ($fullName) {
            // Split the full name into separate parts
            $nameParts = explode(' ', $fullName);

            // If there are at least two parts (first name and last name), apply the conditions
            if (count($nameParts) >= 2) {
                $query->where('name', 'like', '%' . $nameParts[0] . '%')
                    ->where('last_name', 'like', '%' . $nameParts[1] . '%');
            } else {
                // If only one part is provided, search in both name and last_name
                $query->where(function ($query) use ($fullName) {
                    $query->where('name', 'like', '%' . $fullName . '%')
                        ->orWhere('last_name', 'like', '%' . $fullName . '%');
                });
            }
        }

        if ($semester) {
            $query->where('semester', $semester);
        }

        if ($schoolYear) {
            $query->where('school_year', $schoolYear);
        }

        $students = [];

        if ($request->filled('full_name') || $request->filled('semester') || $request->filled('school_year')) {
            $students = $query->get();
        }

        return view('admin.history', compact('students', 'fullName', 'semester', 'schoolYear'));
    }





    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
