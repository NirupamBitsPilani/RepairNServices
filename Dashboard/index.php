<html>
<head>
<title>Datatables</title>
	<link rel="stylesheet"  href="vendor/DataTables/datatables.min.css">	
	<link rel="stylesheet"  href="style.css">	
	<script src="vendor/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="vendor/DataTables/datatables.min.js" type="text/javascript"></script> 	
	<style>
	body {font-family: calibri;color:#4e7480;}
	</style>
</head>
<body>
<div class="container">
	<table id="contact-detail" class="display nowrap" cellspacing="0" width="100%">
	<thead>
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>DOB</th>
		</tr>
	</thead>
	</table>
	</div>
</body>
<script>
$(document).ready(function() {
    $('#contact-detail').dataTable({
		"scrollX": true,
		"pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "server.php"
    } );
} );
</script>
</html>