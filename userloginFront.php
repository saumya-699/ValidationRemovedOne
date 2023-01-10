
<?php 
session_start();

?>


<html>
    <head>
        
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
         <title>Jobs For You</title>
        <link rel="stylesheet" type="text/css" href="styles/styles.css">

    </head>
   <style>
  
           .midiv{

                     background-color:black;
                     opacity:0.775;
                  margin-top:-20px;
                    margin-left:500px;
                     margin-right:500px;
                     margin-bottom:100px;
                    padding:100px 100px 34px 50px;

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
                     
                     
            }
        

    
         
       
   .sin{
  clip-path: circle(50%);
  margin-bottom:30px;
  margin-left:75px;
 
   }

  
     .lb{        
                margin-left:67px;
                margin-top:30px;

             
        }
        

    

                    
               span.sign{
                           float:right;
                           
                            margin-bottom:10px;
                            margin-top:20px;
                     }
                         
          .can{
                   margin-left:70px;
                    margin-top:25px;
                
   
            }


          .checkBox{


                      margin-left:56px;
 

              }

         .admin{

                   margin-left:50px; 
                  margin-right:20px;
             }

               


  body{

      
      background-image:url("https://uploads-ssl.webflow.com/6071145c72cc4375f77ec6fe/6147189e54d3b01f7f09135a_modern-workplace-2048x1214.jpeg");
       background-size:cover;
       background-repeat:no-repeat;
       background-position:center;
}



.sign{
  
                  background-color: black;
            margin-bottom:-2000px;
                   

  
  }
  
   .sign1{
  
                  background-color: green;

  
  }
  
  
  
  body {
    max-height: 100vh;
    
    background-color: papayawhip; 
    margin: 0 auto;
}
  
  
a {text-decoration: none;}
     </style>
  










    <body>
        <!--Header-->
        <!--Header-->
        
        <ul class="menu">
            <li class="menu"><a href="Categories.php">Job Categories</a></li>

            <li class="menu"><a href="updateAccount.php">Update Account</a></li>
           
			<li class="menu"><a href="contact.php">Contact us</a></li>
            <li class="menu sign" style="float: right;"><a href="registerUserFront.php"><font size="4" color="white">Sign in </font></a></li>
			
			
        </ul>
        <!--Header-->

<br> <br> <br> <br>
       <div class="midiv">    
       
 <img src="images/ashi.png" class="sin">
   
        
       
                     <form method="post" action="loginphpBackEnd.php">
                  
         
                        <b> <label class="lb"><font size=6><font color= #ff0000>First name</font></font><label></b><br>
                             <input type="text" placeholder="Enter first name" name="firstName" class="validation" id="firstName"><br>
							 
                        <b> <label class="lb"><font size=6><font color= "blue">Last name</font></font><label></b><br>
                             <input type="text" placeholder="Enter last name" name="lastName" class="validation" id="lastName"><br>
        

                       <b><label class="lb"><font size=6><font color="green">Password</font></font><label></b><br>
                            <input type="password" placeholder="Enter a password" name="password"  class="validation"  id="password">
                              <br>
     
         

<button type="submit" name="BtnSubmit" class="log" id="LoginBtn"> <font size=5>Login</font></button><br>
   
 
     
      <input type="checkbox" checked="checked" name="remember" class="checkBox" id="checkBOX"><font color=#80ccff><font size=4>Remember</font> </font><br>

   

           <font size=4> <button type="button"  name="cancelBtn" id="cancelID" class="can" ><a href="home.php"> cancel</a></button>
            <button  class="admin" type="button" name="Admin" id="Admin"><a href="Adminfolder/adminloginFront.php"> Admin</a></button>
           <span class="sign"> <a href="registerUserFront.php"><font color=#d633ff>signup</font></a> </span></font>
        </form>  
     
      </div>
   
    </body>
</html>