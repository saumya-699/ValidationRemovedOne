<?php

require 'config1.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    $firstName=$_POST["firstname"];
    $lastName=$_POST["lastname"];
    $mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$address=$_POST["address"];
	$DOB=$_POST["day"];
	$password=$_POST["pwd"];
	$reEnter=$_POST["reEnter"];

     if($password!=$reEnter)
			
			{
				
				 echo '<script type="text/javascript">';
		        echo 'alert("Entered passwords are not matched!Reenter!");';
         
		         echo 'window.location.href="registerUserFront.php";';
		         echo '</script>';
				
			}
			
			
else{

//insert the user into the database.
    $sql="insert into register(ID,firstName,lastName,mobile,email,address,DOB,password)VALUES('',' $firstName','$lastName','$mobile','$email','$address','$DOB','$password')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Registration is successfully");';
         
		 echo 'window.location.href="userloginFront.php";';
		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		 echo 'alert("Error in entering try again!");';
         
		 echo 'window.location.href="registerUserFront.php";';
		 echo '</script>';
		 
		 
		 
		 
	 }
	 
 }
	
}
$conn->close();

?>