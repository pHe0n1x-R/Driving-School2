
@extends('partials.layout')




@section('content')
@section('title','|student')
<body>
  <div class="btn-group">
    <a href="http://127.0.0.1:8000/student/create" class="btn btn-primary active" aria-current="page"> + Add Student</a>
   
  </div>
  <table class="table table-bordered table-hover datatable" id="table1" role="grid">
    <thead class="thead-light">
      <tr role="row" align="center">
        <th> ID </th>
        <th> First Name </th>
        <th> Last Name </th>
        {{-- <th> Address </th> --}}
        <th> NIC </th>
        {{-- <th style="width:70px;"> DOB </th> --}}
        {{-- <th style="width:80px"> Contact </th> --}}
        <th> Email </th>
        {{-- <th> Gender </th> --}}
        <th style="width:200px"> Actions </th>
        
        
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
  
  <script>
    $(document).ready(function() {
      
      var BASE = "{{url('/')}}/";
      
      // alert(BASE);
      
      var testtable =$('#table1').DataTable( {
        "ajax": "{!! route('datatable.indexpagetable') !!}",
        columns: [
        
        {data: 'id', name: 'id'},
        {data: 'firstName', name: 'firstName'},
        {data: 'lastName', name: 'lastName'},
        // {data: 'address', name: 'address'},
        {data: 'nic', name: 'nic'},
        // {data: 'date', name: 'date'},
        // {data: 'contact', name: 'contact'},
        {data: 'email', name: 'email'},
        // {data: 'gender', name: 'gender'},
        {data: 'action', name: 'action'},
        ]
        
        
        
        
      } );
      
      $('#table1').on('click','#delete',function(){
        // alert('clicked');
        var value = $(this).closest('tr').find('#hiddenID').val();
        alert('Now you are about to see something new 🕴');
        
        var params = {
          id:$(this).closest('tr').find('#hiddenID').val(),
          _token:$(this).data("token"),
          
        };
        $.ajax({
          url: BASE+'remove/'+value,
          type: 'delete',
          dataType: 'Json',
          data: $.param(params),
          success:function(response){
            alert(response.message);
            
            
          }
          
        });
        
        testtable
        .row( $(this).parents('tr') )
        .remove()
        .draw();
        
      });
    });
    
    
  </script> 
</body>
</table>
@endsection


