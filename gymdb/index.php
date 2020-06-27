<?php 

   include_once 'header.php';
?>	 
<div style="background-color:#ffe703;"> 

<section class="main-container">
     <div class="main-wrapper">
	    <h2>signup</h2>
		<form class="signup-form" action="signup.inc.php" method="POST">
		    <input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="e-mail">
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
	 	    <button type="submit" name="submit">sign up</button></form>
	      
	 </div>	
</section>
</div>
<?php
 //   include_once 'footer.php';
?>	
  