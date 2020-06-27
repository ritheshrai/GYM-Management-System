<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body><div style="background-color:#818182;"> 
<div class="jumbotron" style="background: url('image/ui.jpg') no-repeat;background-size: cover;">	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#f7ff03;color:#000000;">
         <div class="row">
             <div class="col-md-8">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-8"><h3>Payment Details</h3></div>
             <div class="col-md-8">
        
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#f7ff03;color:#000000;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Payment ID </th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th>Customer ID</th>
            <th> payment date</th>      
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
    </table>
    <div class="card-body" style="background-color:#f7ff03;color:#000000;">
                <h3>Make new Payment</h3>
                <form class="form-group" action="func.php" method="post">
                <label>Payment ID</label>
<input type="text" name="Payment_id" class="form-control"><br>
 
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"><br>
                    <label>Customer ID</label>
                    <input type="text" name="customer_id" class="form-control"><br>
                  
                    <label>Payment Type</label>
                    
<input type="text" name="payment_type" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div></div></div>
    </body>
</html>