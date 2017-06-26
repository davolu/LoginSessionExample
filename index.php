 <?php session_start();?>
 <html>
 <head>
 <title>LoginPage</title>
 </head>

 <body>

<?php

  //if logged in, don't show the form. Just tell a message and a logout button.
   
 

   if(isset($_SESSION['login']))
   {

?>
<H1>Congrats</H1>
<p>YOU ARE LOGGED IN NERD, CODER...!!! PHPER... </p>
<a href="logout.php">Click to logout</a>



<?php


   }
   else

   {
//show the form.
?>


<form action="server.php" method="post">
<label>Username</label>
<input type="text" name="username" />
<br/>

<label>Password</label>
<input type="password" name="password" />

<br/>

<input type="submit" value="Login" />

</form>

<?php
}
?>

 </body>
 </html>