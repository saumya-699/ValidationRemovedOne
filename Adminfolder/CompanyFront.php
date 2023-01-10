
<?php 
session_start();

?>
<html>
    <head>
        <title>Jobs for You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
       



   <style>

     body{
              background-image:url("https://cdn.pixabay.com/photo/2017/08/10/02/05/tiles-shapes-2617112_1280.jpg");
              background-size:cover;
              background-repeat:no-repeat;
         }


     .tab{
               height:100px;
               width:60%;
               
        }
      .din button {
                background-color: grey;
                border: 1px solid grey; 
                color: white; 
                 padding:10px 38px 10px 38px; 
               
           
            

}
.din{
             margin-left:170px;
             margin-top:70px;
            margin-right:100px;
     }








  .shin button {
                background-color:#004d13;
               border: 1px solid grey; 
             color: white;
            padding: 13px 40px 13px 40px; 
          
          
}
.shin{
          
             margin-top:70px;
             margin-left:180px;
             margin-right:80px;
 }






  .tin button {
                background-color:#004d13;
               border: 1px solid grey; 
             color: white;
            padding: 12px 8px; 
            
           
         
}
.tin{

             margin-top:70px;
             margin-left:100px;
             margin-right:10px;
           
 
}






 

   .submit:hover {
                       background-color: #3e8e41;
                    }

   .view1:hover{
                      background-color: #3e8e41;
                    }


  
   .view2:hover{
                      background-color: #3e8e41;
                    }



   .input{
                padding: 18px 8px; 
                
             
       }
    .submit{
               padding:12px 65px 12px 65px;
               font-size:15px; 
                background-color: grey;
                border: 1px solid grey; 
                color: white;
               cursor:pointer;
               
          }

  .hit{

      background-color: brown; 
      border: none;
      color: white;
      padding: 20px;
      text-align: center;
     text-decoration: none;
    display: inline-block;
     font-size: 40px;
     border-radius: 50%;
    
}

  .mo1{

           margin-top:100px;
           margin-left:70px;
    }


  .mo2{
            margin-top:110px;
           margin-left:200px;
		   margin-bottom:100px;
    }

 .m{
     background-color:black;
	 padding:10px  10px 10px 10px;
	 margin:10px 10px 10px 10px;
	 
	 }
 
      




  .view1{
               padding:12px 10px 12px 12px;
               //font-size:22px; 
                background-color: grey;
                border: 1px solid grey; 
                color: white;
                float:left;
                margin-right:30px;
                 cursor:pointer;

          }
           
         .view2{
                 margin-top:-12px;
                 padding:8px 20px 12px 20px; 
               //padding:12px 65px 12px 65px;
                //font-size:22px; 
                background-color: grey;
                border: 1px solid grey; 
                color: white;
                 cursor:pointer;

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
		<li class="menu sign" style="float: right;"><a href="../logout.php"><font size="4" color="white">Log Out </font></a></li>	
			
        </ul>


 
  <center><div class="m"><h1 style="color:white"><b>COMPANY DETAILS</b></h1></div></center>
 
   
  

   


    
   <div style="float:left" class="shin" >
   <button ><font size=6>Delete </font></button><br><br>
   <form method="post" action="shin.php">
   <font color="black"><font size=5><b> Enter Company Name:</b></font></font><br>
   <input type="text" name="Delete" class="input"><br><br>
   <input type="submit" value="Delete" name="BtnSubmit" class="submit">
   </form>
   </div>


   <div style="float:left" class="tin" >
   <button ><font size=6>view details</font></button><br><br>
   <form method="post" action="View.php">
   <font color="black"><font size=5><b>Enter Company Name:</b></font></font><br>
   <input type="text" name="CompanyName"  class="input"><br><br>
   <input type="submit" value="View" name="BtnSubmit" class="view1">
   </form>
   <form method="post" action="ViewAll.php">
   <input type="submit" value="View All" name="BtnSubmit" class="view2">
   </form>
   </div>
   <div style="float:left" class="mo mo1" >
  <button class="hit"><a href="updateCompanyFront.php" class="link">Update</a></button>
 </div>
   

<div>
  <button class="hit mo2"><a href="CreatenewFront.php" class="link">Create</a></button>
  </div>



  



  <br> <br> <br> <br>          
  
<br> <br> <br> <br><br> <br>  <br><br><br> <br> 















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
     