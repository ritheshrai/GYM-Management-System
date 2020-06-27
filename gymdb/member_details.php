<!DOCTYPE html>
<?php include("func.php");


$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gymdb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);





?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body><div style="background-color:#818182;"> 
    <div class="jumbotron" style="background: url('image/be.jpg') no-repeat;backgrund-size: cover;">	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#f7ff03;color:#000000;">
         <div class="row">
             <div class="col-md-10">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-5"><h2>Members Details</h2></div>
             <div>
    
             </div></div></div>
     <div class="card-body" style="background-color:#f7ff03;color:#000000;">
         <div class="card-body">
    <table class="table table-hover">
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
     </div>
    </div>
         <div class="card-body" style="background-color:#f7ff03;color:#000000;">
<h3>MODIFY MEMBER DATA</h3>
<form  class="form-group" action="func.php" method="post">
                <label>Member ID:</label>

<input type="text" name="contact" class="form-control"><br>
<input type="submit" class="btn btn-primary" name="del_mem" value="Remove"><br>

 <label>First Name:</label>
                    <input type="text" name="fname" class="form-control"><br>

 <label>Last Name:</label>
                    <input type="text" name="lname" class="form-control"><br>
  <label>Email:</label>
                    <input type="text" name="email" class="form-control"><br>
                  
 <label>Trainer </label> 
 <select class="form-control" name="docapp">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
<input type="submit" class="btn btn-primary" name="mod_submit" value="MODIFY">
 </form>


                </div> 



    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div></div></div>
    </body>
</html>