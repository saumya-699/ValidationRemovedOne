<?php
session_start();
 ?>



<html>
    <head>
        <title>Jobs for You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        

    </head>
   <style>
                a {text-decoration: none;}
           .midiv{

                     background-color:black;
                     opacity:0.776;
                    margin-left:500px;
                     margin-right:500px;
                     margin-bottom:40px;
                    padding:100px 100px 100px 20px;

               }



                 

                 
               
       .validation{ 
                    margin-bottom:25px;
                    padding:10px 100px 20px 20px;
                    margin-left:70px;
                    font-size:15px;
                     
           
               }



          

    


                     
                

          .log{
                     margin-left:70px;
                     margin-top:25px;
                     margin-bottom:20px;
                     padding:10px 122px 10px 122px;
                     font-size:23px;
					 cursor: pointer;
                     
                     // margin:left;
            }
        

    
         
       
   .sin{
  clip-path: circle(50%);
  margin-bottom:30px;
  margin-left:45px;
 
   }

  
     .lb{        
                margin-left:67px;
                margin-top:30px;

             
        }
        

    

                    
               span.sign{
                     
                            margin-left:200px;
                            margin-bottom:80px;
                     }
                         
          .can{
                   margin-left:70px;
                    margin-top:25px;
                
   
            }


          .checkBox{


                      margin-left:56px;
 

              }

               


  body{

      
      background-image:url("https://thumbs.dreamstime.com/b/good-job-top-view-young-modern-men-smart-casual-wear-shaking-hands-working-creative-office-131402912.jpg");
       background-size:cover;
       background-repeat:no-repeat;
       background-position:center;
}


    .sign{
  
                  background-color: black;

  
  }

 .sign1{
  
                  background-color: green;

  
  }
  
  
  
     </style>
  


<meta name="viewport" content="width=device-width, initial-scale=1.0">
  







    <body>
        <!--Header-->

          <ul class="menu">
            <li class="menu"><a href="../Categories.php">Job Categories</a></li>

            <li class="menu"><a href="../updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="../contact.php">Contact us</a></li>
            <li class="menu sign1" style="float: right;"><a href="../registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
			
			
        </ul>

<br> <br> <br> <br>
       <div class="midiv">    
       
<center> <img src="images/ashi.png" class="sin"></center>
   
        
       
                      <form method="post" action="adminBackEnd.php">
                  
         
                        <b> <label class="lb"><font size=6><font color= #ff0000>Admin Id</font></font><label></b><br>
                             <input type="text" placeholder="Enter admin ID" name="adminID" class="validation" id="adminID"><br>
        

                       <b><label class="lb"><font size=6><font color="green">Password</font></font><label></b><br>
                            <input type="password" placeholder="Enter a password" name="Password"  class="validation"  id="Password">
                              <br>
     
         

             <input type="submit" value="submit"  name="BtnSubmit" class="log"><br>
   

     
      <input type="checkbox" checked="checked" name="remember" class="checkBox" id="checkBOX"><font color=#80ccff><font size=4>Remember</font> </font><br>

   

           <font size=4> <button type="button"  name="cancelBtn" id="cancelID" class="can" ><a href="../userloginFront.php">cancel</a></button>
           
</div>

 <div class="footer">
            
            
            <table style=" padding-left: 80px; text-align: left; float: left;">
                <tr>
                    <th class="footerDetails"><a class="footerLinks" href="index.html">JobsForYou.com</a></th>
                    <th class="footerDetails">Customer services</th>
                    <th class="footerDetails"><a class="footerLinks" href="contact us.html">Contact us</a></th>
                </tr>
                <tr>
                    <td class="footerDetails"><a class="footerLinks" href="about us.html">About us</a></td>
                    <td class="footerDetails"><a class="footerLinks" href="account.html">My Account</a></td>
                    <td class="footerDetails">E-mail  :support@JobsForYou.com</td>
                </tr>
                <tr>
                    <td class="footerDetails"><a class="footerLinks" href="privacy policy.html">Privacy policy</a></td>

                    <td class="footerDetails">Mobile  :+94 762711605</td>
                </tr>
                <tr>
                    <td class="footerDetails"><a class="footerLinks" href="Contact us.html">Contact us</a></td>
                    <td class="footerDetails"><a class="footerLinks" href="copyright.html">copyright policy</a></td>
                </tr>
            </table>
        </div>
        <!--Footer-->
    </body>
</html>