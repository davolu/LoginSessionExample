<?php session_start(); ?>

<?php

//get the parameters

$username_input = htmlentities($_POST['username']);
$password_input = htmlentities($_POST['password']);

//test if its valid.

if($username_input =="david" && $password_input=="davidson")
{
	//correct. 
	//register it has logged in the session variable
	$_SESSION['login'] = "yes";

	header("Location: index.php");
	

}
else
{

//wrong
	echo"Wrong login details. <a href='index.php'>Please try again</a>";


}


?>

