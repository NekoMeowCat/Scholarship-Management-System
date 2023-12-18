<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserActivityEvent;
use App\Models\Scholarships;
use App\Models\Students;
use App\Models\Departments;
use App\Models\ScholarDetails;
use App\Models\Attachments;



use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Models\Activity;

// use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\StudentsImport;
// use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Barryvdh\DomPDF\Facade\Pdf;






class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add-scholar');
    }

    // public function import(Request $request)
    // {
        // $request->validate([
        //     'file' => 'required|file|mimes:csv,txt'
        // ]);

        // if ($request->file('file')->isValid()) {
        //     Excel::import(new StudentsImport, $request->file('file'));
        //     return redirect()->back()->with('success', 'CSV file imported successfully.');
        // } else {
        //     return redirect()->back()->with('error', 'File upload error: ' . $request->file('file')->getErrorMessage());
        // }
    // }

    /**`
     * Show the form for creating a new resource.
     */
    public function activityLog()
    {
        
        $activityLogs = Activity::paginate(10); // Assuming Activity is the model for your activity logs

        return view('admin.activity-logs', compact('activityLogs'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'year_level' => 'required|string',
            'id_number' => 'required|string',
            'gender' => 'required|string',
            'course' => 'required|string',
            'email' => 'required|email|unique:students,email',
            'department_id' => 'required|exists:departments,id',
            'scholarship_id' => 'required|exists:scholarships,id',

            'date_of_birth' => 'required|date',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'contact_person' => 'required|string',
            'contact_person_number' => 'required|string',
            
            'student_id' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'transcript_of_records' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'certificate_of_enrollment' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'grade_slip' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'income_tax_return' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'certificate_of_indegency' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'statement_of_accounts' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'birth_certificate' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'good_moral' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'application_form' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'essay' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'endorsement' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 
    

        $departmentId = $request->input('department_id');
        $user = auth()->user();
        $student = Students::create([
            'name' => $request->input('name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'year_level' => $request->input('year_level'),
            'id_number' => $request->input('id_number'),
            'gender' => $request->input('gender'),
            'course' => $request->input('course'),
            'email' => $request->input('email'),
            'department_id' => $request->input('department_id'),
            'scholarship_id' => $request->input('scholarship_id'),
        ]);

        $scholarDetails = ScholarDetails::create([
            'student_id' => $student->id,
            'date_of_birth' => $request->input('date_of_birth'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'contact_person' => $request->input('contact_person'),
            'contact_person_number' => $request->input('contact_person_number'),
        ]);
        

        $attachment = new Attachments();
        $attachment->student_id = $student->id;

        // Save each file to storage/public/images
        foreach ($request->allFiles() as $key => $file) {
            $attachment->{$key} = $file->store('public/images');
        }

        $attachment->save();
        

        activity('students')
            ->performedOn($student)
            ->causedBy(auth()->user())
            ->log('Created Student');


        return redirect()->route('admin.scholars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::findOrFail($id);
        $departments = Departments::all();
        $scholarships = Scholarships::all();
        
        return view('admin.view-scholar', compact('student', 'departments', 'scholarships'));
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
        $request->validate([
            'status' => 'required|in:verified,not_verified,graduated',
            'semester' => 'required|in:1st Semester,2nd Semester',
            'student_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'middle_name' => 'string',
            'last_name' => 'required|string',
            'id_number' => 'required|string',
            'year_level' => 'required|string',
            'gender' => 'required|string',
            'course' => 'required|string',
            'email' => 'required|email',
            'date_of_birth' => 'required|date',
            'graduated_at' => 'nullable|date',
            'scholarship_id' => 'nullable|exists:scholarships,id',
            'department_id' => 'nullable|exists:departments,id',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'contact_person' => 'required|string',
            'contact_person_number' => 'required|string',           
        ]);
        

        $student = Students::findOrFail($id);

        $student->update($request->except('graduated_at'));

        $student->scholarDetails->update(['graduated_at' => $request->graduated_at]);

        
        $oldAttributes = $student->getOriginal();
        $newAttributes = $student->fresh()->getAttributes();
        $updatedFields = array_diff_assoc($newAttributes, $oldAttributes);

        if (!empty($updatedFields)) {
            activity('students')
                ->performedOn($student)
                ->causedBy(auth()->user())
                ->withProperties(['updated_fields' => $updatedFields])
                ->log('Updated Student', ['created_at' => now()]);
        }
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
