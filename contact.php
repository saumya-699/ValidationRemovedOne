<?php 
session_start();

?>
<html>
<head>

 <link rel="stylesheet" type="text/css" href="styles/styles.css">
<style>


h1{
background-color: #353a74;
width:100%;
height:40%;
color:white;

font-size:40px;
font-family:"Arial";

text-align: center;
}


.button {
  font-family: "Arial;
  font-size: 70%;
color: #fff;
width:150px;
height:40px;
  appearance: button;
  background-color: #000057;
}

h4{
font-family:"Arial";
 font-size: 40px;

}
h5{
font-family:"Arial";
 font-size: 25px}
div{

text-align: center;
float:right;
width:720px;
margin:0 0 15px 10px;
padding:5px;
border:1px solid black;
text-align:center;

}
div:hover{
background-color: #d6d6d6
}
a {
  
color:black;
}
h4:hover{
text-decoration: underline;

}

</style>
</head>

<body >
     <ul class="menu">
            <li class="menu"><a href="Categories.php">Job Categories</a></li>

            <li class="menu"><a href="updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="contact.php">Contact us</a></li>
            <li class="menu sign" style="float: right;"><a href="registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
			
			
        </ul>

<h1> we are here to Help you <br  />
<input type="text" placeholder=" Search our articles                                                               
       " name="display" style="width:600px;height:40px ;"class="inputImage" />
<button class="button" role="button">Search</button> 


</h1>
<a href="">
<div >
<img src="images/th.jpg">
<h4>
Articles & Guides</h4>
<h5>100+ articles to get the information <br>you need when you need it<br  />


</h5>
</div>
</a>
<a href="">
<div >
<h4>
<img src="images/g.jpg"><br/>
Contact support</h4>
<h5>Get in touch with our customer <br  />support team<br  />

</h5>
</div>
</a>
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