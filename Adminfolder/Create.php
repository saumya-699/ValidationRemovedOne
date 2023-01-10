




<?php

      require 'config1.php';
	  
	  

    if(isset($_POST["BtnSubmit"]))
	{
		 
		 

     
     $CompanyName =$_POST["CompanyName"];
     $Rank =$_POST["Rank"];
     
   
     
    $sql ="INSERT INTO Company_details(CompanyName,Rank)VALUES('$CompanyName','$Rank')";
	
   
    if($conn->query($sql))
	 
	  {
		 
		 
		 echo '<script type="text/javascript">';
		 echo 'alert("Details stored successfully");';
         
		 echo 'window.location.href="CompanyFront.php";';
		 echo '</script>';

		 
		 
	  }	 
		 
        else
  
      {
		  
		  
		 echo '<script type="text/javascript">';
		 echo 'alert("Error in entering try again!");';
         
		 echo 'window.location.href="createnewFront.php";';
		 echo '</script>';

	   
      }

	
  }

 $conn->close();

 
	   

    	  
  

  
  
  ?>
  
