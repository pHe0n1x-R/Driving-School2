@include('includes.header')
@extends('student')


 <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin="anonymous"></script>
        
 
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
 
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

     

       

@section('content')
@section('title','|student')

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

{{-- <table class="table col-lg-12">
  <thead class="thead-light">
    <tr align="center">
      <th scope="col" >ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">NIC</th>
      <th scope="col" style="width:20%">Date of Birth</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  @foreach($students as $student)
  <tbody>
    <tr align="center">
      <td>{{ $student->id}}</td>
      <td>{{ $student->firstName}}</td>
      <td>{{ $student->lastName}}</td>
      <td>{{ $student->address}}</td>
      <td>{{ $student->nic}}</td>
      <td>{{ $student->date}}</td>
      <td>{{ $student->contact}}</td>
      <td>{{ $student->email}}</td>
      <td>{{ $student->gender}}</td>



      <td>
        <div class="row">
      <form action="{{ route('student.destroy',$student->id) }}" method="POST">
      <a href="#" class="btn btn-sm btn-info">Show</a>
      <a href="#" class="btn btn-sm btn-warning">Edit</a>

      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
      </form>
    </div>

    </td>

    </tr>
    @endforeach

  </tbody>
</table> --}}

<table class="table table-bordered table-hover datatable" id="table1" role="grid">
  <thead>
    <tr role="row">
      <th> ID </th>
      <th> First Name </th>
      <th> Last Name </th>
      <th> Address </th>
      <th> NIC </th>
      <th> Date of Birth </th>
      <th> Contact Number </th>
      <th> Email </th>
      <th> Gender </th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

<script>
  $(document).ready(function() {
  $('#table1').DataTable({
      //"ajax":"indexpagetable"
      "ajax": "{ !! route('ajax.indexpagetable') !! }",
      columns: [
        {data: 'id', name: 'id'},
        {data: 'firstName', name: 'firstName'},
        {data: 'lastName', name: 'lastName'},
        {data: 'address', name: 'address'},
        {data: 'nic', name: 'nic'},
        {data: 'date', name: 'date'},
        {data: 'contact', name: 'contact'},
        {data: 'email', name: 'email'},
        {data: 'gender', name: 'gender'},

      ]
    });
  });
  
</script>





@endsection

