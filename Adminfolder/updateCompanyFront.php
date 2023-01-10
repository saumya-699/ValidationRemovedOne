
<?php 
session_start();

?>

<html>
    <head>
       <title>Jobs For You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
   


     
      
   <style>
    
          
         .passwordDiv{

                     
                     margin: 20px 40px 2px 100px;

               }                 

                   
      
          a {text-decoration: none;}       

                 
               
       .staff{
                    padding:10px 80px 10px 20px;
                    
                    font-size:15px;
                     
           
               }


          
           .midiv{

                     background-color:black;
                     opacity:0.776;
                    margin-left:500px;
                     margin-right:500px;
                     margin-bottom:40px;
                    padding:69px 100px 100px 24px;
					margin-top:40px;

               }
       
            
   .sin{
       clip-path: circle(50%);
       margin-bottom:20px;
       margin-left:100px;
  
   }


      
                     
                

          .save{
                      margin:10px 30px 20px 100px;
               
                     padding:10px 79px 10px 40px;
                     font-size:23px;
                     color:#800000;
                     // margin:left;
            }
            
         
           span.fgt{

                          float:right;
                          

                 }  

            .container{

                        margin:10px 600px 40px 590px;

                 }
                    
               span.prof{
                     
                            margin-left:100px;

                     }
                         
                        

              
      
                  .IMGcls{

                               margin-top:20px;
                               margin-left:600px;

 
                        }
						
						 .save{
                      margin:60px 30px 20px 0;
               
                     padding:10px 79px 10px 40px;
                     font-size:23px;
                     color:#800000;
                     cursor:pointer;
					 
            }



                  body{

                              background-image:url("https://imageio.forbes.com/specials-images/imageserve/60e05ab2396be666929735e5/0x0.jpg?format=jpg&width=1200&fit=bounds");

                               background-size:cover;
                          
                          
                              background-position:center;
                          
                                        
                             background-repeat:repeat;


       }
	   
	    



  .sign{
  
                  background-color: black;

  
  }

   .sign1{
  
                  background-color: green;

  
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





<br><br>



         <div class="midiv"> 



     <img src="images/updateacountIMG.jpg" class="sin" > 

       
    
         <form method="post" action="updateCompanyBack.php">
         
        <div class="passwordDiv">

                          <b> <font size=5><font color="purple">Company Name</font></font></b><br>
                             <input type="text" placeholder="Company Name" name="CompanyName"  class="staff"><br><br>
        


                        

                       <b><font size=5><font color="green">New rank</font></font></b><br>
                            <input type="text" placeholder="New RSank" name="NewRank"  class="staff"><br><br>

                         
     
       
  

      <input type="submit" name="BtnSubmit" class="save" id="saveChanges" value="save changes" class="save">
	  
   
            <font color="red"><button type="button"  name="cancelBtn" id="cancelID"><a href="CompanyFront.php">cancel</a></button>
          
              </div>
               
  </div> 
   
    </form>
   
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