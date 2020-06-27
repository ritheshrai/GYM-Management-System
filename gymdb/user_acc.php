<!DOCTYPE html>
<?php 
include("func.php");
?>

<html>
<head>
	<title>Member Deatails</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body><div style="background-color:#ffe703;">
   <!-- <div class="jumbotron" style="background: url('image/try.jpg') no-repeat;backgrund-size:cover;"> -->
      
             <div class="col-md-5"><h2>Members Details</h2></div>    
<table id="table_id" class="display"bgcolor="#00FF00">
     <thead>
     <tr>
            <th>First Name</th>
            <th>Last Name</th>
         <th>Email id</th>
         <th>Member ID</th>
         <th>Trainer ID</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_patient_details(); ?>
        </tbody>
    </table>
</table>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min."></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

                  <div class="nav-login">

<script type="text/javascript">


	$(document).ready( function () {
    $('#table_id').DataTable({
                dom: 'Bfrtip',

            buttons: [
        'copy', 'excel', 'pdf', 'print'
    ]

    });
} );
</script>    
</div></div></div>
</body>
</html>