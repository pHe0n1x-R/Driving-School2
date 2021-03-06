
@extends('partials.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
            </div>
        </div>    
    </div>
   

    <form action="{{ route('student.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>First Name :</strong>
                    <input type="text" name="firstName" value="{{ $student->firstName }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name :</strong>
                    <input type="text" name="lastName" value="{{ $student->lastName }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address :</strong>
                    <input type="text" name="address" value="{{ $student->address }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIC :</strong>
                    <input type="text" name="nic" value="{{ $student->nic }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth :</strong>
                    <input type="text" name="date" value="{{ $student->date }}" class="form-control" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender :</strong> <br>
                    <label for="gender">Male : </label> 
                    <input type="radio" name="gender" id="" value="male" {{($student->gender=="male")?"checked":""}}><br>
                    <label for="gender">Female : </label>
                    <input type="radio" name="gender" id="" value="female" {{($student->gender=="female")?"checked":""}}><br>
                    <label for="gender">Other : </label>
                    <input type="radio" name="gender" id="" value="other" {{($student->gender=="other")?"checked":""}}><br>
                </div>
            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection 