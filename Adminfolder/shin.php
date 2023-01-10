


<?php

      require 'config1.php';
	  echo "<div style=background-image:url('https://c8.alamy.com/comp/MT4P28/flat-lay-frame-of-old-books-on-blue-background-with-copy-space-MT4P28.jpg');background-repeat:no-repeat;background-size:cover;height:700px;opacity:0.6;>";
	
    if(isset($_POST["BtnSubmit"]))
	{ 
              
		$Delete =$_POST["Delete"];	 
      $vql= "select * from Company_details where CompanyName='$Delete'";

        $result= $conn->query($vql);
  
		
		    if($result->num_rows>0)
			
            {		

                  // sql to delete a record
                   $sql = "DELETE FROM Company_details WHERE CompanyName='$Delete'";

                   if ($conn->query($sql) === TRUE) 
				   {
                          
                    echo '<script type="text/javascript">';
		            echo 'alert("details deleted successfully");';
         
		           echo 'window.location.href="CompanyFront.php";';
		            echo '</script>';

		  
                   } 
					 
					 else 
			               {
                               
							   
							     
                           echo '<script type="text/javascript">';
		                   echo 'alert("Error deleting data.Try again!");';
         
		                 echo 'window.location.href="CompanyFront.php";';
		                  echo '</script>';

		  
							   
							   
							   
							   
							   
							   
							   
                            }

			}
	
	


            else
            {
	 
	 
	                
         echo '<script type="text/javascript">';
		 echo 'alert("Entered company Name is not found");';
         
		 echo 'window.location.href="CompanyFront.php";';
		 echo '</script>';

		  
	           
	 
	 
	 
           }	 
	 
	}	
  $conn->close();
?>
