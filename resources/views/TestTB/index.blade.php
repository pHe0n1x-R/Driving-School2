

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

{{-- DataTables --}}

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.js"></script>

<table id="t1">
    <thead>
        <tr>
            <th>Col1</th>
            <th>Col2</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<script>

$(document).ready(function() {
        
        
        $('#t1').DataTable( {
            "ajax": "{!! route('testtb.table') !!}",
            columns: [
                    
                    {data: 'id', name: 'id'},
                    {data: 'firstName', name: 'firstName'},
                    
    
                    
                ]
        
    
    
    
        } );
    } );

</script>