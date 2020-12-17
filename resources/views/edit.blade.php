@include('includes.header')
<!DOCTYPE html>
<head>
    <title>Application Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
</head> 

<br>
<body>
    <form  action="{{ route('student.store') }}" method="POST" autocomplete="on">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto bg-light text-dark">
                    <h2 align="center">Edit your Details</h2>
                    
                    <div class="form-group" >
                        <lable>First Name:</lable>
                        <input type="text" class="form-control" id="fname" name="firstName" value="{{old('firstName')}}" placeholder="Enter your first name" > 
                    </div>
                    <div class="form-group">
                        <lable>Last Name:</lable>
                        <input type="text" class="form-control" id="lname" name="lastName" value="{{old('lastName')}}" placeholder="Enter your last name" > 
                    </div>
                    <div class="form-group">
                        <lable>Address:</lable>
                        <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Enter your address " >
                    </div>
                    <div class="form-group">
                        <lable>NIC Number:</lable>   
                        <input type="text" class="form-control" id="nic" name="nic" value="{{old('nic')}}" placeholder="Enter your NIC" maxlength="12" >  
                    </div>
                    <div class="form-group">
                        <lable>Date of Birth:</lable>   
                        <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}" placeholder="Enter your Date of Birth" >  
                    </div>
                    <div class="form-group">
                        <lable>Contact No:</lable><br>
                        <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')}}" placeholder="07xxxxxxxx" maxlength="10">
                    </div>
                    <div class="form-group">
                        <lable>Email</lable><br>
                        <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="abc@abc.com">
                    </div>
                    <div class="form-group">
                        <lable>Gender:</lable>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <input type="button" class="form-control btn btn-warning" href="http://127.0.0.1:8000/" value="Back">
                        </div> 
                        <div class="col">
                            <input type="submit" class="form-control btn btn-primary" value="Save">
                        </div>  
                        
                        
                    </div>
                </form>
                
            </div>
        </div>
        
    </form>
</body>

</html>


@include('includes.footer')
