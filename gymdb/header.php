<?php

session_start();
?>

<!DOCTYPE html>
<html>
  <head>
   <title> </title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

  <body style="background:url('Image/4.jpg'); background-size: cover;">


<header>
 <nav>
     <div class="main-wrapper">
	      <ul>
	            <li><a href="index.php">Welcome to the world of fitness </a></li>
	       </ul>
		       <div class="nav-login">
			       <?php							
							echo '<form action="func.php" method="POST">
                              <input type="text" name="username" placeholder="username/e-mail">
                              <input type="password" name="password" placeholder="password">
                               <button type="submit" name="login_submit">login</button>						
				                </form>';				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
</body>
</div>