<!DOCTYPE html>
<html>
<head>
<title>Learn Ajax and Datatables</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

{{-- DataTables --}}

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.js"></script>



</head>
<body>
    <table class="table table-bordered table-hover dataTable" id="table1" role="grid">
        <thead>
            <tr role="row">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                {{-- <th >Actions</th> --}}
    
            </tr>
        </thead>
        <tbody>
    
    </tbody>

    <script>
        $(document).ready(function() {
        $('#table1').DataTable( {
                "ajax": "{!! route('datatable.showdata') !!}",
                columns: [
                        
                        {data: 'id', name: 'id'},
                        {data: 'fname', name: 'fname'},
                        {data: 'lname', name: 'lname'},
                        // {data: 'action', name: 'action'},
        
                        
                    ]
            
        
        
        
            } );
        } );
            </script>
    
</body>



</table>