
@include('includes.header')


<!DOCTYPE html>
<head>
    <title>Application Form</title>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    </head> 

<br>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        {{-- <strong>Warning!</strong> Please check your inputs<br><br> --}}
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form  action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-6 m-auto bg-light text-dark">
                    <h2 align="center">Application Form</h2>
                        
        <div class="form-group">
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
        <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Submit">
        </div>  
        <div class="form-group">
            <input type="reset" class="form-control btn btn-warning" name="clear" id="clear" value="Clear">
        </div> 
                </div>
            </div></div>
    
    </form>

     {{-- <script>
        $(document).ready(function(){
          $("#hide").click(function(){
            $("h1").hide();
          });
          $("#show").click(function(){
            $("h1").show();
          });
        });
        </script>

        <h1>ABCD</h1>


<button id="hide">Hide</button>
<button id="show">Show</button> --}}


</body>

</html>

@include('includes.footer')



