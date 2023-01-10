







<?php
session_start();
require 'config1.php';



if(isset($_POST["BtnSubmit"]))
	{
	
       $firstName =$_POST["firstName"];
        

       $password=$_POST["password"];


      $sql= "select *from register where firstName='$firstName' and password='$password'";
	  
        $result= $conn->query($sql);

       if (mysqli_num_rows($result)==1) 

       {
              

		   $row = $result->fetch_assoc();
		   
	       $_SESSION["ID"] = $row['ID']; 
		 
		 
             
			 
		
		if(isset($_SESSION["ID"]))
			{
        header("Location:Categories.php");
    }	 
		  
	    }


        else

        {

         echo '<script type="text/javascript">';
		 echo 'alert("Invalid login");';
         
		 
		 echo '</script>';

        }
		
		
		
		
	}	

  $conn->close();

   
 ?>   
