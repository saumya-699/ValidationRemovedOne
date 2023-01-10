

<?php 
session_start();

?>


 
<html>
<head>
 <title>Jobs For You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <link rel="stylesheet" type="text/css" href="styles/register.css">
      

		 
		 
		 <style>
		 
		body{ 
		      background-image:url("https://i.pinimg.com/originals/1a/41/78/1a41787d9cb8187d97fd976ea489aa14.jpg");
              background-size:cover;
              background-repeat:no-repeat;
			  
		   
			  
			  
			  
			  	}   
				
				
				h1 {
                 font-size: 60px;
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
			
			
        </ul>
        <!--Header-->
		
		<br/><br/><br/>
		
		
		
		
		
		
		 <center>
		 <br><br><br><br>
		<h1 style="color:red;"><p id="demo">Create an account</p> </h1>
		





        <br></center>
	<center>
	
		<hr style="height:2px;border-width:0;color:black;">
		

 
 <div class="productData">
<form method="post" action="register_UserBackEnd.php">
<font color="blue">

<h3> First name:</br>
 <input type="text" size="80" name="firstname"  placeholder="Type your First name here"><br/><br/>
 
<h3> Last name:<br>
 <input type="text" size="80" name="lastname"  placeholder="type your last name here"><br/><br/>
 
 
 
 <h3>Mobile/land number:<br/>
 <input type="phone"  size="80" name="mobile"  placeholder="xxxxxxxxxx"> <br/><br/>
 
 <h3>E-mail:<br/>
 <input type="email" size="80"  name="email"  placeholder="abc@gmail.com"><br/><br/>
 
<h3> Address:<br/>
 <textarea name="address"  placeholder="type your address here"></textarea><br><br/>
 
 
 <h3>Chooose your DOB:<br/>
 <input type="date" size="80" name="day"> <br/><br/>
 <font color="red">
 <h3>Password:<br/>
 <input type="password" name="pwd" placeholder="Enter Password" size="80"><br/>
 
 
 <br/>
 
 <h3>Re-enter Password:<br/>
 <input type="password" id="cnfrmpwd" name="reEnter" placeholder="Reenter Password" size="80"><br/><br/>
 <br>
 </hr>
 
 <br/><br/><br/>
 <input class="inputStyle" id="checkBox"
 type="checkBox" onclick="enableButton()">
 
 
 Accept Privacy policy and terms.<br/><br/>
 <center>
 </font>
 <input type = "submit" class="submitbttn" name="BtnSubmit" onclick="myFunction" value = "submit"/>
 
 </center>
 </font>
 </form>

 
 <br/><br/>
 
 
 
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


 