

<html>
    <head>
       <title>Jobs For You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/home.css">
        <script src="js/script.js"></script> 
 </head>
    <body>
        <!--Header-->
        
        </div>
        <ul class="menu">
            <li class="menu"><a href="../Categories.php">Job Categories</a></li>

            <li class="menu"><a href="../updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="../contact.php">Contact us</a></li>
            <li class="menu sign" style="float: right;"><a href="../registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
		<li class="menu sign" style="float: right;"><a href="../logout.php"><font size="4" color="white">Log Out </font></a></li>	
			
        </ul>
</html>


<?php
require 'config1.php';
     
       echo "<div style=background-image:url('https://imgix.bustle.com/uploads/shutterstock/2020/3/25/72415f8c-3e06-40fc-b5a6-32fd76c7b567-shutterstock-1270572721.jpg?w=1200&h=630&fit=crop&crop=faces&fm=jpg');background-repeat:no-repeat;background-size:cover;height:700px;>";
		$CompanyName =$_POST["CompanyName"];
$sql= "select * from Company_details where CompanyName='$CompanyName'";
$result = $conn->query($sql);

if($result->num_rows>0)

{        
    
   while($row = $result->fetch_assoc())
   
   {
	    echo "<div style= background-color:black;opacity:0.776;margin-right:500px;height:500px;margin-left:400px;padding:100px 100px 34px 50px;>";


	   
	   echo "<font color=red>";
	   echo "<font size=6>";
         echo "Company ID"."-".$row["ID"]."<br>";
	  echo "Company Name"."-".$row["CompanyName"]."<br>";
	  echo "Rank"."-".$row["Rank"]."<br>";
	 
	  echo "</font>";
	  echo "</font>";
	  
	  echo "</div>";	

	  
	}
	
      
}	

else

{
  
         echo '<script type="text/javascript">';
		 echo 'alert("Enterd Company name is not found");';
         
		 echo 'window.location.href="CompanyFront.php";';
		 echo '</script>';

		  

}

$conn->close();

?> 
<!DOCTYPE html>
<body>
   <div class="footer">
            
            
            <table style=" padding-left: 80px; text-align: left; float: left;">
                <tr>
                    <th class="footerDetails"><a class="footerLinks" href="index.php">JobsForYou.com</a></th>
                    <th class="footerDetails">Customer services</th>
                    <th class="footerDetails"><a class="footerLinks" href="contact.php">Contact us</a></th>
                </tr>
                <tr>
                    <td class="footerDetails"><a class="footerLinks" href="About.php">About us</a></td>
                    <td class="footerDetails"><a class="footerLinks" href="account.php">My Account</a></td>
                    <td class="footerDetails">E-mail  :support@JobsForYou.com</td>
                </tr>
                <tr>
                    <td class="footerDetails"><a class="footerLinks" href="privacyPolicy.php">Privacy policy</a></td>

                    <td class="footerDetails">Mobile  :+94 774598647</td>
                </tr>
                <tr>
                    <td class="footerDetails"><a class="footerLinks" href="Contact.php">Contact us</a></td>
                    <td class="footerDetails"><a class="footerLinks" href="copyright.php">copyright policy</a></td>
                </tr>
            </table>
        </div>
        <!--Footer-->
    </body>
</html>
       
	