<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>trainer details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body><div style="background-color:#818182;"> 
<div class="jumbotron" style="background: url('image/sinup.jpg') no-repeat;backgrund-size: cover;height: 700px;">

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#f7ff03;color:#000000;">
         <div class="row">
             <div class="col-md-10">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-5"><h2>trainer Details</h2></div>
             <div>
    
             </div>
    </div>
    </div>
    <div class="card-body" style="background-color:#f7ff03;color:#000000;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Trainer ID</th>
            <th>Name</th>
         <th>Phone</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php get_trainer(); ?>
        </tbody>
    </table>  
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div></div></div>
    </body>
</html>