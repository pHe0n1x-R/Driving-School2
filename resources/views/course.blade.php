@include('includes.header')


<!DOCTYPE html>
<head>
  <title>Application Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    fieldset {
      background-color: #eeeeee;
    }
    
    legend {
      background-color: rgb(139, 133, 133);
      color: white;
      padding: 5px 10px;
    }
    
    input {
      margin: 5px;
    }
  </style>
</head>


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
  <style>
    .pd{
      padding-right: 10px;
    }
  </style>
  
  <form  action="{{ route('student.store') }}" method="POST" class="needs-validation" novPalidate>
    @csrf
    <section id="cover">
      <div id="cover-caption" >
        <div class="container">
          <div class="row">
            <div class="col-7 m-auto bg-light text-dark">
              <h3 align="center"><b>APPLICATION FORM</b></h3>
              <fieldset>
                <legend>Personal Details</legend>
                <div class="form-row pd">
                  <div class="form-group col-md-6">
                    
                    <lable>FIRST NAME :</lable>
                    <input type="text" class="form-control" id="fname" name="firstName" value="{{old('firstName')}}" placeholder="Enter First name" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div> 
                  </div>
                  <div class="form-group col-md-6">
                    <lable>LAST NAME :</lable>
                    <input type="text" class="form-control" id="lname" name="lastName" value="{{old('lastName')}}" placeholder="Enter Last name" > 
                  </div>
                </div>
                
                <div class="form-group pd">
                  <lable> NAME IN FULL :</lable>
                  <input type="text" class="form-control" id="fullname" name="fullName" value="{{old('fullName ')}}" placeholder="Enter Full name " >
                </div>
                
                
                <div class="form-row pd">
                  <div class="form-group col-md-6 ">
                    <lable>NIC NUMBER :</lable>   
                    <input type="text" class="form-control" id="nic" name="nic" value="{{old('nic')}}" placeholder="Enter NIC" maxlength="12" >  
                  </div>
                  <div class="form-group col-md-6">
                    <lable>DATE OF BIRTH :</lable>   
                    <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}" placeholder="Enter your Date of Birth" >  
                  </div>
                </div>
                <div class="form-group">
                  <lable>GENDER :</lable> &nbsp  &nbsp
                  <input type="radio" id="male" name="gender" value="male">
                  
                  <label for="male">Male</label> &nbsp &nbsp
                  <input type="radio" id="female" name="gender" value="female">
                  
                  <label for="female">Female</label>
                </div>
                
              </fieldset>
              
              <fieldset>
                <legend> Contact Details </legend>
                <div class="form-row pd">
                  <div class="form-group col-md-6">
                    <lable>ADDRESS LINE 1</lable>
                    <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Enter Address" > 
                  </div>

                  <div class="form-group col-md-6">
                    <lable>ADDRESS LINE 2</lable>
                    <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Enter Address" > 
                  </div>
                </div>
                
                <div class="row  pd">
                <div class="form-group col-md-6">
                  <lable>PROVINCE</lable><br>
                  <select id="city" class="form-control">
                    <option selected>Choose...</option>
                    <option>Sabaragamuwa</option>
                    <option>Central</option>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <lable>CITY</lable><br>
                  <select id="city" class="form-control">
                    <option selected>Choose...</option>
                    <option>Mawanella</option>
                    <option>Kegalle</option>
                  </select>
                </div>

                
                </div>
                
                <div class="row  pd">
                  <div class="form-group col-md-4">
                    <lable>CONTACT NO:</lable><br>
                    <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')}}" placeholder="07xxxxxxxx" maxlength="10">
                  </div>
                  <div class="form-group col-md-8">
                    <lable>E-MAIL</lable><br>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="abc@abc.com">
                  </div>
                </div>
                 
                 

              </fieldset>
            
              <br>
              <form>
                <div class="row">
                  <div class="col">
                    <input type="submit" class="form-control btn btn-primary" value="Submit">
                  </div>  
                  
                  <div class="col">
                    <input type="reset" class="form-control btn btn-warning" name="clear" id="clear" value="Clear">
                  </div> 
                </div>
              </form>
              
            </div>
          </div></div>
        </div>
      </section>
    </form>
    
    
    
    
    {{-- @include('includes.footer') --}}

     {{-- <div class="form-group col-md-6">
                    <lable>CITY</lable><br>
                    <select id="city" class="form-control">
                      <option selected>Choose...</option>
                      <option>Mawanella</option>
                      <option>Kegalle</option>
                    </select>
                  </div> --}}

                   
              {{-- <div class="form-group">
                <lable>COURSE</lable><br>
                <select id="course" class="form-control">
                  <option selected>Choose...</option>
                  <option>Class A</option>
                  <option>Class B</option>
                </select>
              </div> --}}