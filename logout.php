<?php session_start(); ?>

<?php

unset($_SESSION['login']);


//confirm that session has been destroyed

if( ! isset($_SESSION['login']) )
{

   //destroyed !!! yes!!!
	//redirect to the home page (index)

	header("Location: index.php");


}

?>