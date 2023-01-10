<!DOCTYPE html>
<html>
    <head>
        <title>THE BOOKSHELF - Online Bookstore</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/home.css">
        <script src="js/script.js"></script> 
 </head>
    <body>
        <!--Header-->
        
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

     echo "<div style=background-image:url('https://blog.prezi.com/wp-content/uploads/2019/04/03-deep-blue-1024x576.jpg');background-repeat:no-repeat;background-size:cover;height:700px;>";  
		
$sql= "select * from company_details" ;
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

          echo "<font color=red>";
	      echo "<font size=6>";
	   
	    
	   echo  "<table border=4 width=100% height=60%>"."<tr>"."<th>"."ID"."</th>"."<th>"."CompanyName"."</th>"."<th>"."Rank"."</th>"."</tr>";

   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["ID"]."</td>"."<td>".$row["CompanyName"]."</td>"."<td>".$row["Rank"]."</tr>";
	  
	  
	  
	}
	
	 echo "</font>";
	 echo  "</font>";
	  
	   
	
	echo "</table>";
	
	
}	

else

{

 echo "no results";

}

echo "</div>";

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
       
		