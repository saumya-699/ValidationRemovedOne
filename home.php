<?php 
session_start();

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   
  body{

      
      background-image:url("https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
       background-size:cover;
       background-repeat:no-repeat;
       background-position:center;
}

   

.btn {
    background: #300a07;
    border: 0px;
    border-radius: 15px;
    height: 70px;
	width: 170px;
    font-weight: bold;
    margin-left: 60px;
    transition: .2s;
}

.btnlink {   
    text-decoration-line: none;

} 
.btn:hover{
    background-color:#FF8C42;
    cursor: pointer;
}

 a {text-decoration: none;}


</style>
</head>
<body>


<ul class="menu">
            <li class="menu"><a href="Categories.php">Job Categories</a></li>

            <li class="menu"><a href="updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="contact.php">Contact us</a></li>
            
			
			
        </ul>
    


<div class="midiv">
    <br /> <br /> <br />
   <br> <br> <br><h1 style="color:white"><center><font size=7><b><h2 style="color: black;">Welcome to <span style="color:#300a07 ;">Jobs For You <span></h2></b></font></center></h1><br><br>
</div>

<div style="height: 80px; margin-left: 500px;">
    <a class="btnlink" href="whyHTML.html">
        <button type="button" class="btn"><p style="color: white; size: 20px;"><a href="registerUserFront.php"><font color="white">SignUp</font></a></p></button>
    </a>

    <a class="btnlink" href="whyHTML.html">
        <button type="button" class="btn"><p style="color: white; size: 20px;"><a href="userloginFront.php"><font color="white">Login</font></a> </p></button>
    </a>
</div>
<br> <br> <br>

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

                <td class="footerDetails">Mobile  ::+94 762711600</td>
            </tr>
            <tr>
                <td class="footerDetails"><a class="footerLinks" href="Contact.php">Contact us</a></td>
                <td class="footerDetails"><a class="footerLinks" href="copyright.php">copyright policy</a></td>
            </tr>
        </table>
    </div>
</body>
</html>