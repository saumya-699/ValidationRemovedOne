<?php 
session_start();

?>

 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>    
<html>
<head>
<title>Category</title>

</head>
<body>

    <html>
        <head>
            <title>Jobs For You</title>
			<link rel ="stylesheet" type="text/css" href="styles/css.css">
            <link rel="stylesheet" type="text/css" href="styles/styles.css">
              <link rel="stylesheet" type="text/css" href="styles/home.css">
          
			
			
			<style>
			
			
			.ft {
         border: 5px solid #555;
          }
		  
		  </style>
        </head>
        <body>
            <!--Header-->
            
             <ul class="menu">
            <li class="menu"><a href="Categories.php">Job Categories</a></li>

            <li class="menu"><a href="updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="contact.php">Contact us</a></li>
            <li class="menu sign" style="float: right;"><a href="registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
			<li class="menu sign1" style="float: right;"><a href="logout.php"><font size="4" color="white">Log Out </font></a></li>
			
			
        </ul>
            <!--Header-->
            <br>
    
            
            <!--Page Content-->
    
	
	<center>
    <div style="width: 50%; margin: -8px; padding: 0px 8px;">
            <div class="slideshow">
                <img id="slides" src="https://imageio.forbes.com/specials-images/imageserve/60e05ab2396be666929735e5/0x0.jpg?format=jpg&width=1200&fit=bounds">
                <div id="previous" onclick="previous()"><img width="100%" src="images/icons/left.png"></div>
                <div id="next" onclick="next()" style="float: right;"><img width="100%" src="images/icons/right.png"></div>
            </div>
        </div>
		</center>
    
    
    
            <!--Page Content-->
<center>
            <div class="">
             
                <input class="searchbar" style="background-color: white; border: solid;" type="search" placeholder=" Search Category ">
                <input class="searchbutton" style="background-color: white; border: solid;" type="submit" value=" ">
               
            </div>
			</center>
    
            
            <table style="width:100%">
                <tr>
    
                    <td style="width:25%">
                    
                        <center> <img src="images/eng.jfif"  width="300px" height="200px" class="ft"> <br> Mechanical Engineering
                        </center>
                        <br/><br>
                    </td>
    
                    <td style="width:25%">
                     
                        <center> <img src="images/accounting.jpeg"  width="300px" height="200px" class="ft"> <br> Accounting
                        </center>
                        <br/><br>
                    </td>
    
                   
                    </td>
                </tr>
                <br><br>
    
                <tr>
    
                    <td style="width:25%">
                       
                        <center> <img src="images/customer.jfif"  width="300px" height="200px" class="ft"> <br>Airlines
                        </center>
                        <br/><br>
                    </td>
    
                    <td style="width:25%">
                       
                        <center> <img src="images/IT.jfif"  width="300px" height="200px"class="ft"> <br> IT Engineering
                        </center>
                       <br/><br>
                    </td>
    
                   
                </tr>
                <br><br>

                <tr>
    
                    <td style="width:25%">
                     
                        <center> <img src="images/ret.jfif"  width="300px" height="200px"class="ft"> <br>Retail
                        </center>
                        <br/><br>
                    </td>
    
                    <td style="width:25%">
                       
                        <center> <img src="images/he.jfif"  width="300px" height="200px"class="ft"> <br>Health Care
  </center>                                                                                                                                                                 
                        <br/><br>
                    </td>
    
                   
                </tr>
                <br><br>

               
                <br><br>
            </table>

            <!--Footer-->
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

                    <td class="footerDetails">Mobile  :+94 762711600</td>
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
<?php
	
}
 else 
	 
	 {echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="userloginFront.php";';
  echo '</script>';
	 }
 
?>
         