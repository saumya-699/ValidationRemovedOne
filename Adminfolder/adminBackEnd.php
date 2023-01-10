







<?php
session_start();
require 'config1.php';



if(isset($_POST["BtnSubmit"]))
	{
		
        $adminID =$_POST["adminID"];
       

       $Password=$_POST["Password"];


      $sql= "select* from admin_details where adminID='$adminID' and Password='$Password'";

        $result= $conn->query($sql);

       if (mysqli_num_rows($result)==1) 

       {
          
		   $row = $result->fetch_assoc();
		   
	       $_SESSION["ID"] = $row['adminID']; 
		 
		 
             
			 
		
		if(isset($_SESSION["ID"]))
			{
        header("Location:adminHomePageFront.php");
    }	 
		  
	    }


        else

        {

         echo '<script type="text/javascript">';
		 echo 'alert("Invalid login");';
         
		 echo 'window.location.href="../userloginFront.php";';
		 echo '</script>';

        }
		
		
		
		
	}	

  $conn->close();

   
 ?>   
