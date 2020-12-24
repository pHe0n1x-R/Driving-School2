<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadFiles;
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
        $student = Student::find($id);
        return view ('show',compact('student'));
        
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $student = student::find($id);
        return view('edit',compact('student'));
    }
    
    public function update(Request $request, Student $student)
    {
        $validator = \Validator::make($request->all(),
            [
                'fname' => 'required',
                'lname' => 'required|min:5',
              
            ], 
            [
                'fname.required' => 'Name is required',
                'lname.required' => 'Password is required'
            ]
          );
  
        $student->update($request->all());
  
        return redirect()->route('student.index')
                        ->with('success','Student updated successfully');
    }
        
        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy(Student $student)
        {
            
            dd($student);
            $student->delete();
            return response()->json(['status' => 'success', 'message' =>'Thama na bang']);
            
        }
        function remove(Request $request)
        {
    
            $student = Student::where('id',$request->id)->delete();;
            return response()->json(['status' => 'success', 'message' =>'Fucked']);
          
        }

        
        
        public function indexpagetable(){
            
            $ajaxdata = Student::all();
            
            return Datatables::of($ajaxdata)
            
            ->addColumn('action', function ($ajaxdata) {
                $buttons ='<a class="fa fa-view btn btn-sm btn-primary btn-rounded m-b-1 m-l-5"   href="'.url('/student/'.$ajaxdata->id.'/').'">More</a> 
                <a class="fa fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/student/'.$ajaxdata->id.'/edit').'">Edit</a>
                <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
                <button data-token="'.csrf_token() .'" class=" shadow fa fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete"> Delete</button>';
                
                
                
                
                return $buttons;
            })
            
            ->make(true);
            
        }
    }