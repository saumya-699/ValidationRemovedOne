
<?php 
session_start();

?>
<html>
    <head>
        <title>Jobs for You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
       


    </head>
   <style>
  
            
           .midiv{

                     background-color:black;
                     opacity:0.776;
                    margin-left:500px;
                     margin-right:500px;
                     margin-bottom:40px;
                    padding:2px 100px 10px 5px;
					margin-top:20px;

               }



           .mid{

                     margin:10px 40px 2px 100px;
                     
                    opacity:0.9;
                    color:pink;




               }                 

                   
      
                 

                 
               
       .validation{
                    padding:10px 100px 10px 20px;
                    
                    font-size:15px;
                     
           
               }



          

    


                     
                

          .log{
                      margin:5px 100px 20px 100px;
               
                     padding:10px 122px 10px 122\px;
                     font-size:23px;
                     color:#800000;
					 cursor:pointer;
                     // margin:left;
            }
            
         
               

   .sin{
  clip-path: circle(50%);
   margin-bottom:20px;
   margin-top:30px;
   margin-left:50px;
   }
                                           
 .titu{
       magin-top:100px;
       margin-bottom:100px;

      }



        .container{

                        margin:10px 40px 60px 100px;

                 }





  body{

      background-image:url("https://i1.wp.com/www.additudemag.com/wp-content/uploads/2020/04/happiness-at-workplace-GettyImages-1129332568.jpg?w=1920&crop=0%2C0px%2C100%2C1280px&ssl=1");
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

a {text-decoration: none;}
     </style>
  


     </style>
  



<meta name="viewport" content="width=device-width, initial-scale=1.0">
  






    <body>
        <!--Header-->

          <ul class="menu">
            <li class="menu"><a href="../Categories.php">Job Categories</a></li>

            <li class="menu"><a href="../updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="../contact.php">Contact us</a></li>
            <li class="menu sign" style="float: right;"><a href="../registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
		<li class="menu sign1" style="float: right;"><a href="../logout.php"><font size="4" color="white">Log Out </font></a></li>	
			
        </ul>

<br> <br> <br> <br>
         

       <div class="midiv"> 
<center> <img src="images/ashi.png" class="sin"></center>
   
        
       
        <div class="mid">
                  
                         <form method="post" action="Create.php">
                        <b> <font size=6><font color="red">Company Name</font></font></b><br>
                             <input type="text" placeholder="Company Name" name="CompanyName" class="validation" id="userName"><br><br>
        

                       <b><font size=6><font color="green">Rank</font></font></b><br>
                            <input type="text" placeholder="Rank" name="Rank"  class="validation"  id="fName" ><br> <br>

                  
                    
                      <br> <br>


         </div>

         <input type="submit" value="submit" class="log" name="BtnSubmit">
		   <div class="container">
            <font color="red"><button type="button"  name="cancelBtn" id="cancelID" ><a href="CompanyFront.php">cancel</a></button>
          
           
               
  </div> 
   
   
       </form>
     </div>
   
<div class="footer">
            
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
     


 