<?php
$con=mysqli_connect("localhost","root","","gymdb");
if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from logintb where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
        if ($username=='admin'&&$password=='pass')
        {
        header("Location:admin-panel.php");

    }else{
		header("Location:user_acc.php");
    }	
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    }
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
//$contact=$_POST['contact'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                             echo "<script>alert('enter valid email.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
                   exit();
               }
    $t_id=$_POST['t_id'];
   //dublicate agudakke
               $sql = "SELECT * FROM member WHERE fname='$fname'and lname='$lname'";
                   $resul = mysqli_query($con, $sql);
               $resultCheck = mysqli_num_rows($resul);
                   
                   if($resultCheck > 0) {
                     echo "<script>alert('Member already exist.')</script>";
        echo "<script>window.open('member_details.php','_self')</script>";
                      exit();   
                   }

else
{

    $query="insert into member values('$fname','$lname','$email','','$t_id')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    }}
    if(isset($_POST['mod_submit']))
{
    $docapp=$_POST['docapp'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 echo "<script>alert('enter valid email.')</script>";
        echo "<script>window.open('member_details.php','_self')</script>";
                   exit();
               }
    $contact=$_POST['contact'];
    $query="UPDATE member SET fname='$fname',lname='$lname',email='$email',t_id='$docapp' WHERE m_id='$contact'";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member modifyed.')</script>";
        echo "<script>window.open('member_details.php','_self')</script>";
    }
    }  
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
        if(isset($_POST['pay_submit']))
        {
            $Payment_id=$_POST['Payment_id'];
            $Amount=$_POST['Amount'];
            $customer_id=$_POST['customer_id'];
            $payment_type=$_POST['payment_type'];
           // $customer_name=$_POST['customer_name'];
            $update="select CURRENT_DATE;";
             $rdate=mysqli_query($con,$update);
            $row=mysqli_fetch_array($rdate);
                $pay_date=$row['CURRENT_DATE'];
            
            $query="insert into Payment(Payment_id,Amount,customer_id,payment_type,pay_date)values('$Payment_id','$Amount','$customer_id','$payment_type','$pay_date')";
                        $result=mysqli_query($con,$query);
            if($result)
            {
              echo "<script>alert('Payment sucessfull.')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
            } 
       if(isset($_POST['del_mem']))
       {
            $docapp=$_POST['contact'];
            $query="CALL del_user('$docapp');";
            $result=mysqli_query($con,$query);
              if($result)
            {
              echo "<script>alert('deletion sucessfull.')</script>";
                echo "<script>window.open('member_details.php','_self')</script>";
            }
            

       }

       if(isset($_POST['acc_submit']))
       {
        header("Location:user_acc.php");
       }


 function get_patient_details(){
    global $con;
    $query="select * from member";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['m_id'];
    $docapp=$row['t_id'];
      echo "<tr>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$docapp</td>
        </tr>";
    }
}
function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>
            
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_payment(){
    global $con;
    $query="select * from Payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Payment_id=$row ['Payment_id'];
        $Amount=$row['Amount'];
        $payment_type=$row['payment_type'];
        $customer_id=$row['customer_id'];
        $date=$row['pay_date'];
       // $customer_name=$row['customer_name'];
      //  <td>$customer_name</td>
        echo"<tr>
        <td>$Payment_id</td>
        <td>$Amount</td>
        <td>$payment_type</td>
        <td>$customer_id</td>
        <td>$date</td>
            </tr>";

    }
}


?>



