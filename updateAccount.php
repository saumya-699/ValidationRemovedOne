
<?php 
session_start();

?>

 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
    
<html>

 
    <head>
        <title>Jobs For You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        


     
      
   <style>
   
   
   
   
           .midiv{

                     background-color:black;
                     opacity:0.776;
                    margin-left:500px;
                     margin-right:500px;
                     margin-bottom:40px;
                    padding:2px 100px 10px 5px;
					margin-top:60px;

               }
    
          
         .passwordDiv{

                     
                     margin: 100px 40px 2px 100px;

               }                 

                   
      
                 

                 
               
       .changePw{
                    padding:10px 80px 10px 20px;
                    
                    font-size:15px;
                     
           
               }


                
            .sin{
                    clip-path: circle(50%);
                    margin-bottom:60px;
                   margin-left:28px;
				    
 
                }
       
    


                     
                

          .save{
                      margin:60px 30px 20px 100px;
               
                     padding:10px 79px 10px 40px;
                     font-size:23px;
                     color:#800000;
					 cursor:pointer;
                     // margin:left;
            }
            
         
           span.fgt{

                          float:right;
                          

                 }  

            .container{

                        margin:10px 40px 60px 100px;

                 }
                    
               span.prof{
                            float:right;
                            margin-left:50px;

                     }
                         
                        

              
      
                  



	   
	   
  .slider{

            background-size:cover;
            background-image:url("books6.jpg");
           background-repeat:no-repeat;
           animation:slide 40s infinite;
     }

    @keyframes slide{
	
	              0% {
				           background-image:url("https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGVvcGxlJTIwd29ya2luZyUyMGluJTIwb2ZmaWNlfGVufDB8fDB8fA%3D%3D&w=1000&q=80");
				  
				  
				    }

                  25%{
                        background-image:url("https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fHRlYW18ZW58MHx8MHx8&w=1000&q=80");

                      }             


                  50%{
                        background-image:url("https://data-analyst-resume.info/wp-content/uploads/2020/11/Media_South_Bank-wework-web_70196.jpg");

                      }    


                 
                  75%{
                        background-image:url("https://businesspartnermagazine.com/wp-content/uploads/2021/03/Should-You-Return-To-Office-Work-Pros-And-Cons.jpg");

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

a {text-decoration: none;}

 </style>




<meta name="viewport" content="width=device-width, initial-scale=1.0">
  









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
            







<div class="slider">
<br> <br>




<div class="midiv"> 
   <div class="passwordDiv">

    <img src="images/updateacountIMG.jpg" class="sin" >

       
    
     <form method="post" action="updateAccountBackEnd.php">
        
         
     

                          <b> <font size=5><font color="purple">First Name</font></font></b><br>
                             <input type="text" placeholder="Enter the first name" name="firstName" id="fname" class="changePw"><br><br>
        
                             <b> <font size=5><font color="red">Last Name </font></font></b><br>
                             <input type="text" placeholder="Enter the last name" name="lastName" id="lname" class="changePw" ><br><br>
        


                        <b> <font size=5><font color="blue">Current password</font></font></b><br>
                             <input type="password" placeholder="Enter the password" name="CurrentPassword" class="changePw" id="currentPw" ><br><br>
        

                       <b><font size=5><font color="green">New password</font></font></b><br>
                            <input type="password" placeholder="Enter a new password" name="NewPassword"  class="changePw"  id="newPw"><br><br>

                          <b><font size=5><font color="red">Reenter password</font></font></b><br>
                            <input type="password" placeholder="Reenter password" name="ReenterPassword"  class="changePw"  id="rePw">

     
          </div>
		  <div>
  

      <input type="submit" name="BtnSubmit" class="save" id="saveChanges" value="save changes">
   
   
      </div>
      

     <div class="container">
            <font color="red"><button type="button"  name="cancelBtn" id="cancelID" ><a href="home.php">cancel</a></button>
          
           
               
  </div> 
 </div>
   </form>
   <br><br>
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
         
 