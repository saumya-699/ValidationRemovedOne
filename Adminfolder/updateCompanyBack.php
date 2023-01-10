






<?php

      require 'config1.php';
	  echo "<div style=background-image:url('https://c8.alamy.com/comp/MT4P28/flat-lay-frame-of-old-books-on-blue-background-with-copy-space-MT4P28.jpg');background-repeat:no-repeat;background-size:cover;height:700px;opacity:0.6;>";
	
    if(isset($_POST["BtnSubmit"]))
	{ 
         $CompanyName =$_POST["CompanyName"];   
		$NewRank =$_POST["NewRank"];	 
      $vql= "select * from Company_details where CompanyName='$CompanyName'";

        $result= $conn->query($vql);
  
		
		    if($result->num_rows>0)
			
            {		

                  // sql to delete a record
                   $sql = "Update Company_details set Rank='$NewRank' WHERE CompanyName='$CompanyName'";

                               if ($conn->query($sql) === TRUE) 
				   {
                         
                                        echo '<script type="text/javascript">';
		                        echo 'alert("Rank updated successfully");';
         
		                          echo 'window.location.href="updateCompanyFront.php";';
		                         echo '</script>';

                                 } 
					 
					 else 
			               {
                               echo "Error updating record: " . $conn->error;
                            }

			}
	
	


            else
            {
	 
	           
         echo '<script type="text/javascript">';
		 echo 'alert("Entered Company Name is not found");';
          echo 'window.location.href="updateCompanyFront.php";';
		 
		 echo '</script>';

	 
	 
           }	 
	 
	}	
  $conn->close();
?>
