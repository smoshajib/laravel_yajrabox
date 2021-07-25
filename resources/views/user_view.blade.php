<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard | Home</title>
   
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> --}}
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  --}}
    
    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>  
       
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>  
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js" ></script>  

</head>
<body>

    <div class="container-fluid">
        <div class="row">
<div class="col-1" style="margin-top: 45px"></div>
            <div class="col-10" style="margin-top: 45px">
                {{-- yajrabox html builder using --}}
                {!!$dataTable->table()!!} 
            </div>
			<div class="col-1" style="margin-top: 45px"></div>
        </div>
    </div>
    
{{-- yajrabox html builder using --}}
    {!!$dataTable->scripts()!!}

</body>
</html>