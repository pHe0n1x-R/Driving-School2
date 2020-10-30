<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
       // return $students;
        return view ('studentlist',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request ->all(),
        [
            'firstName' => 'required',
            'lastName'  => 'required',
            'address'   => 'required',
            'nic'       => 'required',
        ],
        [
            'firstName.required' => 'First Name is required',
            'lastName.required' => 'Last Name  is required',
            'address.unique' => 'Address must be unique'
        ]

        );

        if ($validator->fails()){
            return redirect('student/create')
                    ->withErrors($validator)
                    ->withInput();
        }
        
        Student::create($request->all());
   
        return redirect()->route('student.index')
                        ->with('success','Application created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     return view('course');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $students)
    {
      return view ('edit',compact ('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->status = $request->input('status');
        $student->save();
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // dd($id);
        // return($student ->id);
       $student -> delete();
       return redirect ()->route('student.index')
                        ->with('success','Record deleted');
    }


public function indexpagetable(){

    $ajaxdata = Student::all();
    return Datatables::of($ajaxdata)

     ->make(true);

}
}
