<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard | Home</title>
   
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
<div class="col-1" style="margin-top: 45px"></div>
            <div class="col-10" style="margin-top: 45px">
                <table id="users-table" class="display" style="width:100%">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Edit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
               
                    
                </table>
            
            </div>
			<div class="col-1" style="margin-top: 45px"></div>
        </div>
    </div>
    

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
   
<script>
$(document).ready(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!!route('get.user')!!}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            // {data: 'DT_RowData.data-name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'country', name: 'country'},
            {data: 'edit', name: 'edit'},
            {data: 'action', name: 'action'},
        ],
        // order: [[1, 'asc']]
    });
} );
</script>
</body>
</html>