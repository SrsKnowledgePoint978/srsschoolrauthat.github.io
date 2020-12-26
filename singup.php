<?php
include("php/connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="singnup.css">
    <link rel="stylesheet" href="mypoject.css">

 <style>

 </style>

</head>
<body>







    <div class="mainhead">
    <form action="#"  onsubmit="return validation()" method="POST">
        <br><br>
        <h1><center>Sign up</center ></h1>
        <table align="center">
        
            <br><br><br><br><br><br><br>
            <tr><td>User Name</td><td><input type="text" id="user" name="user" placeholder="User Name" ><br>
                <span id="userr"></span>
            </td> </tr>
            <tr><td>Email Address</td><td><input type="email"id="email" name="email" placeholder="Email Address"autocomplete="off"><br>
            <span id="emaill"></span>
            </td> </tr>
            <tr><td>Password</td><td><input type="password" id="pass" name="pass" placeholder="password"><br>
            <span id="passs"></span>
            </td> </tr>
            <tr><td>Conform password</td><td><input type="password" id="conpass" name="conpass" placeholder="Conform password"><br>
            <span id="conpasss"></span>
            </td> </tr>
            <tr align="center"><td colspan="2"><input type="submit" id="subbtn" name="submit"></td></tr>
        </table>
    </form>
    </div>

<script type="text/javascript">
     
     function validation(){
         var user=document.getElementById('user').value;
         var email=document.getElementById('email').value;
         var pass=document.getElementById('pass').value;
         var conpass=document.getElementById('conpass').value;
             if(user=="")
                {
                    document.getElementById('userr').innerHTML="Error:-please Enter UserName In The Box";
                    return false;
                }    
                    if(user.length<2)
                      {
                        document.getElementById('userr').innerHTML="Error:-please Enter more than one character In The Box";
                        return false;
                        }
                    if(!isNaN(user))
                      {
                        document.getElementById('userr').innerHTML="Error:-You Doesn't  Enter Number  In The Box";
                        return false;
                        } 
             else
                {
                    document.getElementById('userr').innerHTML="";
                }   
                
                

              if(email=="")
                {
                    document.getElementById('emaill').innerHTML="Error:-please Enter Email Address In The Box";
                    return false;
                    
                 }
                    if(email.indexOf('@')<=1)
                        {
                            document.getElementById('emaill').innerHTML="Error:-plese enter more than 1 character before @";
                            return false;
                    
                        }
                    if(email.charAt(email.length-4)!='.' && email.charAt(email.length-3)!='.')
                        {
                            document.getElementById('emaill').innerHTML="Error:-invalid position of .";
                            return false;
                    
                        }
                 else
                {
                    document.getElementById('emaill').innerHTML="";
                }  



                if(pass=="")
                {
                    document.getElementById('passs').innerHTML="Error:-please Enter password In The Box";
                    return false;
                 }
                    if(pass.length<8)
                        {
                            document.getElementById('passs').innerHTML="Error:-please Enter atleast 8 character In The Box";
                            return false;
                        }
                    if(pass.search(/[0-9]/)==-1)
                        {
                            document.getElementById('passs').innerHTML="Error:-please Enter atleast 1 Number In The Box";
                            return false;
                        }
                    if(pass.search(/[a-z]/)==-1)
                        {
                            document.getElementById('passs').innerHTML="Error:-please Enter atleast 1 lower case character In The Box";
                            return false;
                        } 
                    if(pass.search(/[A-Z]/)==-1)
                        {
                            document.getElementById('passs').innerHTML="Error:-please Enter atleast 1 upercase character In The Box";
                            return false;
                        }   
                    if(pass.search(/[!/@/#/$/%/&/*/()/?/-/+/=/^/</>/,/]/)==-1)
                        {
                            document.getElementById('passs').innerHTML="Error:-please Enter atleast 1 special symbol In The Box";
                            return false;
                        }
                 else
                {
                    document.getElementById('passs').innerHTML="";
                } 
                
                

                 if(conpass=="")
                {
                    document.getElementById('conpasss').innerHTML="Error:-please Enter Conform Password In The Box";
                    return false;
                 }
                 if(conpass!=pass)
                {
                    document.getElementById('conpasss').innerHTML="Error:-password doesn't match";
                    return false;
                 }
                 else
                {
                    document.getElementById('conpasss').innerHTML="";
                }  

             
     }

</script>

<?php
if(isset($_POST['submit']))
   {
        $user=$_POST['user'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $conpass=$_POST['conpass'];

        if($user!="" && $email!="" && $pass!="" && $conpass!="")
        {

            $query="INSERT INTO SIGNUPDATA VALUES('$user','$email','$pass','$conpass')";
            $data=mysqli_query($conn, $query);

               if($data)
                        {
                            //echo "inserted in data in database";
                        }
        }                
        else
            {
                //echo " dosen't inserted data in database";
            }  
    }
?>


</body>
</html>