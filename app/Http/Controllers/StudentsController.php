<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserActivityEvent;
use App\Models\Scholarships;
use App\Models\Students;
use App\Models\History;
use App\Models\Departments;
use App\Models\ScholarDetails;
use App\Models\Attachments;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;





use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Models\Activity;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add-scholar');
    }

    // public function history(Request $request)
    // {
    //     $schoolYear = $request->input('school_year', 'default_year'); // You can replace 'default_year' with your default school year
    //     $semester = $request->input('semester', '1st Semester'); // You can replace '1st Semester' with your default semester

    //     $students = Students::bySchoolYearAndSemester($schoolYear, $semester)->get();

    //     $schoolYears = Students::distinct()->pluck('school_year');
    //     $semesters = ['1st Semester', '2nd Semester'];

    //     return view('admin.history', compact('students', 'schoolYears', 'semesters', 'schoolYear', 'semester'));
    // }


    /**`
     * Show the form for creating a new resource.
     */
    public function activityLog()
    {
        
        $activityLogs = Activity::latest()->paginate(10); 

        return view('admin.activity-logs', compact('activityLogs'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'middle_name' => 'required|string',
                'last_name' => 'required|string',
                'year_level' => 'required|string',
                'id_number' => 'required|string',
                'gender' => 'required|string',
                'course' => 'required|string',
                'semester' => 'required|string',
                'school_year' => 'required|string',
                'email' => 'required|email|unique:students,email',
                'department_id' => 'required|exists:departments,id',
                'scholarship_id' => 'required|exists:scholarships,id',

                'date_of_birth' => 'required|date',
                'phone_number' => 'required|string',
                'address' => 'required|string',
                'contact_person' => 'required|string',
                'contact_person_number' => 'required|string',

                'student_id' => 'nullable|in:on',
                'transcript_of_records' => 'sometimes|in:on',
                'certificate_of_enrollment' => 'sometimes|in:on',
                'grade_slip' => 'sometimes|in:on',
                'income_tax_return' => 'sometimes|in:on',
                'certificate_of_indegency' => 'sometimes|in:on',
                'statement_of_accounts' => 'sometimes|in:on',
                'birth_certificate' => 'sometimes|in:on',
                'good_moral' => 'sometimes|in:on',
                'application_form' => 'sometimes|in:on',
                'essay' => 'sometimes|in:on',
                'endorsement' => 'sometimes|in:on',
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
                'semester' => $request->input('semester'),
                'school_year' => $request->input('school_year'),
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

            $attachmentData = [
                'transcript_of_records', 'certificate_of_enrollment', 'grade_slip',
                'income_tax_return', 'certificate_of_indegency', 'statement_of_accounts',
                'birth_certificate', 'good_moral', 'application_form', 'essay', 'endorsement',
            ];

            foreach ($attachmentData as $data) {
                // Check if the checkbox is present in the request
                $attachment->{$data} = $request->has($data);
            }
            $attachment->save();


            activity('students')
                ->performedOn($student)
                ->causedBy(auth()->user())
                ->log('Created Student');

            return redirect()->route('admin.scholars')->with('success', 'Student created successfully');
        } catch (\Exception $e) {
            // Log the error for further analysis if needed
            \Log::error('Error creating student: ' . $e->getMessage());

            return redirect()->route('admin.scholars')->with('error', 'Error creating student. Please try again.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::findOrFail($id);
        $departments = Departments::all();
        $scholarships = Scholarships::all();
        $attachments = $student->attachments;
        
        return view('admin.view-scholar', compact('student', 'departments', 'scholarships', 'attachments'));
    }

    public function showHistory(Request $request)
    {
        $histories = History::all();

        return view('admin.history', compact('histories'));
    }


    private function getHistoryData($student, $selectedSchoolYear, $selectedSemester)
    {
        // Assuming you have a 'students_history' table with columns 'school_year' and 'semester'
        // Adjust the table name and column names based on your actual database structure

        $historyData = Students::where('id', $student->id)
            ->where('school_year', $selectedSchoolYear)
            ->where('semester', $selectedSemester)
            ->get();

        return $historyData;
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
        try {
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
                'school_year' => 'required|string',
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

            $checkboxFields = [
                'transcript_of_records', 'certificate_of_enrollment', 'grade_slip',
                'income_tax_return', 'certificate_of_indegency', 'statement_of_accounts',
                'birth_certificate', 'good_moral', 'valid_id', 'application_form',
                'essay', 'endorsement',
            ];

            $updatedFields = [];

            foreach ($checkboxFields as $field) {
                $oldValue = $student->getOriginal($field);
                $newValue = $request->has($field);

                if ($oldValue !== $newValue) {
                    $updatedFields[$field] = [
                        'old' => $oldValue,
                        'new' => $newValue,
                    ];
                }
            }

            // Check if the semester value has been changed
            if ($student->semester !== $request->input('semester') || $student->school_year !== $request->input('school_year')) {
                // Create a new History record for the semester change
                History::create([
                    'student_id' => $id,
                    'attribute' => 'semester',
                    'old_value' => $student->semester,
                    'new_value' => $request->input('semester'),
                    'changed_at' => now(),
                ]);

                // Create a new History record for the school_year change
                History::create([
                    'student_id' => $id,
                    'attribute' => 'school_year',
                    'old_value' => $student->school_year,
                    'new_value' => $request->input('school_year'),
                    'changed_at' => now(),
                ]);

                // Create a new student record for the updated semester or school_year
                $newStudent = $student->replicate();
                $newStudent->semester = $request->input('semester');
                $newStudent->school_year = $request->input('school_year');
                $newStudent->status = 'not_verified';
                $newStudent->save();

                $newStudent->scholarDetails()->create($student->scholarDetails->toArray());
                $newStudent->attachments()->create($student->attachments->toArray());
            } else {
                $student->update($request->except('graduated_at'));
                $student->attachments()->update([
                    'transcript_of_records' => $request->has('transcript_of_records'),
                    'certificate_of_enrollment' => $request->has('certificate_of_enrollment'),
                    'grade_slip' => $request->has('grade_slip'),
                    'income_tax_return' => $request->has('income_tax_return'),
                    'certificate_of_indegency' => $request->has('certificate_of_indegency'),
                    'statement_of_accounts' => $request->has('statement_of_accounts'),
                    'birth_certificate' => $request->has('birth_certificate'),
                    'good_moral' => $request->has('good_moral'),
                    'valid_id' => $request->has('valid_id'),
                    'application_form' => $request->has('application_form'),
                    'essay' => $request->has('essay'),
                    'endorsement' => $request->has('endorsement'),
                ]);

                $student->scholarDetails->update(['graduated_at' => $request->graduated_at]);
            }
            

            

            if (!empty($updatedFields)) {
                activity('students')
                    ->performedOn($student)
                    ->causedBy(auth()->user())
                    ->withProperties(['updated_fields' => $updatedFields])
                    ->log('Updated Student', ['created_at' => now()]);

                $attachmentChanges = [];

                foreach ($updatedFields as $field => $changes) {
                    if (Str::startsWith($field, 'attachments.')) {
                        $attachmentField = Str::after($field, 'attachments.');
                        $attachmentChanges[$attachmentField] = $changes;
                    }
                }

                // Log changes in attachments separately
                activity('attachments')
                    ->performedOn($student->attachments->first()) // Log changes for a single attachment
                    ->causedBy(auth()->user())
                    ->withProperties(['updated_attachments' => $updatedFields]) // Use a different key for attachments
                    ->log('Updated Attachments', ['created_at' => now()]);
            }

            return redirect()->route('admin.scholars')->with('success', 'Student updated successfully');
        } catch (\Exception $e) {
            // Log the error for further analysis if needed
            \Log::error('Error updating student: ' . $e->getMessage());

            return redirect()->route('admin.scholars')->with('error', 'Error updating student. Please try again.');
        }
    }


    // public function update(Request $request, string $id)
    // {
    //     try {
            
    //         $request->validate([
    //             'status' => 'required|in:verified,not_verified,graduated',
    //             'semester' => 'required|in:1st Semester,2nd Semester',
    //             'student_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
    //             'name' => 'required|string',
    //             'middle_name' => 'string',
    //             'last_name' => 'required|string',
    //             'id_number' => 'required|string',
    //             'year_level' => 'required|string',
    //             'gender' => 'required|string',
    //             'course' => 'required|string',
    //             'school_year' => 'required|string',
    //             'email' => 'required|email',
    //             'date_of_birth' => 'required|date',
    //             'graduated_at' => 'nullable|date',
    //             'scholarship_id' => 'nullable|exists:scholarships,id',
    //             'department_id' => 'nullable|exists:departments,id',
    //             'phone_number' => 'required|string',
    //             'address' => 'required|string',
    //             'contact_person' => 'required|string',
    //             'contact_person_number' => 'required|string',           
    //         ]);

    //         $student = Students::findOrFail($id);

    //         $checkboxFields = [
    //             'transcript_of_records', 'certificate_of_enrollment', 'grade_slip',
    //             'income_tax_return', 'certificate_of_indegency', 'statement_of_accounts',
    //             'birth_certificate', 'good_moral', 'valid_id', 'application_form',
    //             'essay', 'endorsement',
    //         ];

    //         $updatedFields = [];

    //         foreach ($checkboxFields as $field) {
    //             $oldValue = $student->getOriginal($field);
    //             $newValue = $request->has($field);

    //             if ($oldValue !== $newValue) {
    //                 $updatedFields[$field] = [
    //                     'old' => $oldValue,
    //                     'new' => $newValue,
    //                 ];
    //             }
    //         }

    //         if ($student->semester !== $request->input('semester')) {
    //             // Replicate the student
    //             $clonedStudent = $student->replicate();

    //             // Update the semester value
    //             $clonedStudent->semester = $request->input('semester');

    //             // Save the cloned student
    //             $clonedStudent->push();
    //         }
    //         $student->update($request->except('graduated_at'));

    //         $student->attachments()->update([
    //             'transcript_of_records' => $request->has('transcript_of_records'),
    //             'certificate_of_enrollment' => $request->has('certificate_of_enrollment'),
    //             'grade_slip' => $request->has('grade_slip'),
    //             'income_tax_return' => $request->has('income_tax_return'),
    //             'certificate_of_indegency' => $request->has('certificate_of_indegency'),
    //             'statement_of_accounts' => $request->has('statement_of_accounts'),
    //             'birth_certificate' => $request->has('birth_certificate'),
    //             'good_moral' => $request->has('good_moral'),
    //             'valid_id' => $request->has('valid_id'),
    //             'application_form' => $request->has('application_form'),
    //             'essay' => $request->has('essay'),
    //             'endorsement' => $request->has('endorsement'),
    //         ]);

    //         $student->scholarDetails->update(['graduated_at' => $request->graduated_at]);

    //         if (!empty($updatedFields)) {
    //             activity('students')
    //                 ->performedOn($student)
    //                 ->causedBy(auth()->user())
    //                 ->withProperties(['updated_fields' => $updatedFields])
    //                 ->log('Updated Student', ['created_at' => now()]);

    //             $attachmentChanges = [];

    //             foreach ($updatedFields as $field => $changes) {
    //                 if (Str::startsWith($field, 'attachments.')) {
    //                     $attachmentField = Str::after($field, 'attachments.');
    //                     $attachmentChanges[$attachmentField] = $changes;
    //                 }
    //             }

    //             // Log changes in attachments separately
    //             activity('attachments')
    //                 ->performedOn($student->attachments->first()) // Log changes for a single attachment
    //                 ->causedBy(auth()->user())
    //                 ->withProperties(['updated_attachments' => $updatedFields]) // Use a different key for attachments
    //                 ->log('Updated Attachments', ['created_at' => now()]);
    //         }

    //         return redirect()->route('admin.scholars')->with('success', 'Student updated successfully');
    //     } catch (\Exception $e) {
    //         \Log::error('Error updating student: ' . $e->getMessage());

    //         return redirect()->route('admin.scholars')->with('error', 'Error updating student. Please try again.');
    //     }
    // }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
