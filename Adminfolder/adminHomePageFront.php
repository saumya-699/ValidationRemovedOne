
 <?php
 
          session_start();
		  
	?>
	
	<?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
		 
<html>


    <head>
        <title>Jobs for You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        
    </head>
   <style>

 
   
           .midiv{

                     background-color:#7070db;
                     opacity:0.776;
                    margin-left:400px;
                     margin-right:400px;
                   height:500px;
                     margin-top:20px;
                   
               }



  
 .bu{
       
       background-color:#b30059 ;
       border: none;
      color: white;
     //padding: 16px 32px;
     // padding: 28px 40px;
      text-align: center;
     font-size: 20px;
     margin: 7px  2px;
    
      transition: 0.3s;
      

  }

  #btn1{
         padding: 28px 40px;
           
  }

 #btn2{
         padding: 28px 120px;
           
  }
  
 #btn3{
         padding: 28px 85px;
           
  }
  


  .bu:hover {
  background-color: #3e8e41;
  color: white;
  width: 300px;
    height: 150px;
  }

         margin-right:100px;
          margin-left:100px;

          padding:20px 20px 20px 20px;
          
     }


.man:hover{
  visibility: visible;
}


  body{

      
     margin:0;
     padding:0;
    
}

  .slider{

            background-size:cover;
           
           background-repeat:no-repeat;
           animation:slide 40s infinite;
     }

    @keyframes slide{
	
	              0% {
				           background-image:url("https://image.cnbcfm.com/api/v1/image/106724963-1601542574841-gettyimages-1248900510-262a5684.jpeg?v=1631893427");
				  
				  
				    }

                  25%{
                        background-image:url("https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fG9mZmljZXxlbnwwfHwwfHw%3D&w=1000&q=80");

                      }             


                  50%{
                        background-image:url("https://thumbnails.production.thenounproject.com/Jn_HdY92DkAsIlQCg5VzJ1ZYS9E=/fit-in/1000x1000/photos.production.thenounproject.com/photos/2892AEA2-B884-48C4-9669-87535221C11C.jpg");

                      }    


                 
                  75%{
                        background-image:url("https://s24953.pcdn.co/blog/wp-content/uploads/2018/01/Working-in-an-open-office-1024x576.png");

                      }    

                   
                  100%{
                        background-image:url("https://i1.wp.com/www.additudemag.com/wp-content/uploads/2020/04/happiness-at-workplace-GettyImages-1129332568.jpg?w=1920&crop=0%2C0px%2C100%2C1280px&ssl=1");

                      }    



             }


  .sign{
  
                  background-color: black;

  
  }
  
  .sign1{
  
                  background-color: green;

  
  }
  
    .link{
		
		text-decoration:none;
		
	}

 </style>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  




    </head>
    <body>
        <!--Header-->
           <ul class="menu">
            <li class="menu"><a href="../Categories.php">Job Categories</a></li>

            <li class="menu"><a href="../updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="../contact.php">Contact us</a></li>
            <li class="menu sign" style="float: right;"><a href="../registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
        <li class="menu sign1" style="float: right;"><a href="../logout.php"><font size="4" color="white">Log Out </font></a></li>
			
			
        </ul>
<br />
 
<div class="slider">

<div class="midiv">
<br> <br> <br><h1 style="color:#8B4513"><center><font size=7><b><i>Welcome to Admin Home Page</i></b></font></center></h1><br><br>





  
  

 

 
  <center>

 
 <button class="bu" type="button" id="btn1" onclick="ViewAndEdit('btn1')"><a href="CompanyFront.php" class="link"><font size=5><font color="white">View and edit Company profile details</font> </font></a></button><br><br>

  
 
  </center>

</div>
<br> <br>

</div>




 
    


       










































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