<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Coursework;
use Illuminate\Support\Facades\DB;
class CourseController extends Controller
{
    //
     
     function show ()
     {
         $data = Course::all();
         return view('list',['courses'=> $data]);
    }




    public function showCoursework()
{
    // Retrieve the coursework data from the database
    $courseworks = DB::select('SELECT * FROM courseworks');

    // Pass the coursework data to the view
    return view('studcoursework', ['courseworks' => $courseworks]);
}
public function viewwork($item)
{
 $courseworks = DB::select('SELECT * FROM courseworks where $item = coursework_id');

    // Pass the coursework data to the view
    return view('worksubmission', ['courseworks' => $courseworks]);
}


public function submitCoursework(Request $request)
{
    // Validate the form submission
    $request->validate([
        'submission' => 'required|file|mimes:pdf,doc,docx',
    ]);

    // Store the uploaded file on the server
    $file = $request->file('submission');
    $file->storeAs('submissions', $file->getClientOriginalName());

    // Insert a record into the database to indicate that the coursework has been submitted
    DB::insert('INSERT INTO submissions (coursework_id, student_id, file_path) VALUES (?, ?, ?)', [
        $request->input('coursework_id'),
        $request->input('student_id'),
        $file->getClientOriginalName(),
    ]);

    // Redirect to the submission view
    return redirect()->route('submission');
}




    
}





