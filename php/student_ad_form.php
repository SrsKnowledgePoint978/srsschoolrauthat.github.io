<?php
include("../php/connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../mypoject.css">
    <link rel="stylesheet" href="../css/futer.css">
    <link rel="stylesheet" href="../css/student-ad-form.css">
    <title>student admission form</title>
</head>
<body>
    <div class="my-menu">
        <div class="logo-img"><img class="logo" src="../img/logo.png"></div>
               <ul class="menu">   
                   <li> <a href="../mypohect.html">Home</a> </li>
                   <li><a href="../html/courses.html"> courses</a></li>
                   <li><a href="../html/result.html">Results</a></li>
                   <li><a href="#">form</a>
                     <ul>
                         <li><a href="../php/student_ex_form.php">examination</a> </li>
                         <li><a href="../php/student_ad_form.php">admission</a></li>
                     </ul>
                    </li>
                   <li><a href="../html/why-choos.html"> Why choos</a></li>
                   <li><a href="#"> about us </a>
                    
                    <ul>
                    
                        <li><a href="../html/mission.html">Mission</a></li>
                        <li><a href="../html/anthem.html">Anthems</a></li>
                        <li><a href="../html/staff.html">Staff</a></li>
                        <li><a href="../html/about.html">About</a></li>
    
                    </ul>
                     </li>
                   <li class="s-li"><a href="../singup.php">Sign up</a></li>
               </ul>
               <div class="rithtnav">
                <input type="text" name="search" id="search">
                <button class="serch-btn serch-btn-sm">search</button>
               </div>   
        </div>

        <br><br><br><br><br><br>
    
   <div class="adpik"></div>
    <form action="#" autocomplete="off" onsubmit="return validation()" method="POST">

        <table >
            <tr id="maintitel"><td colspan="2">Student Details</td></tr>
            <tr><td>First Name</td><td><input type="text" id="firstnam" name="firstname" placeholder="First Name" required></td></tr>
            <tr><td>last Name</td><td><input type="text" id="lastname" name="lastname" placeholder="Last Name" required></td></tr>
            <tr><td>Date Of Birth </td><td>
                <select name="dob" id="dob" required>
                    <option value="day">day</option>
                    <option value="01">01</option> <option value="02">02</option><option value="03">03</option>
                    <option value="04">04</option><option value="05">05</option><option value="06">06</option>
                    <option value="07">07</option><option value="08">08</option><option value="09">09</option>
                    <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    <option value="13">13</option><option value="14">14</option><option value="15">15</option>
                    <option value="16">16</option><option value="17">17</option><option value="18">18</option>
                    <option value="19">19</option><option value="20">20</option><option value="21">21</option>
                    <option value="22">22</option><option value="23">23</option><option value="24">24</option>
                    <option value="25">25</option><option value="26">26</option><option value="27">27</option>
                    <option value="28">28</option><option value="29">29</option><option value="30">30</option>
                    <option value="31">31</option>
                </select>

                <select name="dob" id="dob" required>
                    <option value="month">Months</option>
                    <option value="jan">january</option> <option value="feb">february</option>
                    <option value="march">march</option><option value="April">April</option>
                    <option value="may">May</option><option value="june">June</option>
                    <option value="july">July</option><option value="augest">Augest</option>
                    <option value="september">September</option><option value="october">October</option>
                    <option value="november">November</option><option value="december">December</option>
                </select>

                <select name="dob" id="dob" required>
                    <option value="year">years</option>
                    <option value="01">2001</option> <option value="02">2002</option>
                    <option value="03">2003</option><option value="04">2004</option><option value="05">2005</option><option value="06">2006</option>
                    <option value="07">2007</option><option value="08">2008</option><option value="09">2009</option>
                    <option value="10">2010</option><option value="11">2011</option><option value="2012">2012</option>
                    <option value="13">2013</option><option value="14">2014</option><option value="15">2015</option>
                    <option value="16">2016</option><option value="17">2017</option><option value="18">2018</option>
                    <option value="19">2019</option><option value="20">2020</option><option value="21">2021</option>
                    <option value="22">2022</option><option value="23">2023</option><option value="2024">2024</option>
                    <option value="25">2025</option><option value="26">2026</option><option value="27">2027</option>
                    <option value="28">2028</option><option value="29">2029</option><option value="30">2030</option>
                    <option value="31">2031</option>
                </select>
            </td></tr>
            <tr><td>Gender</td>
                <td>Male<input type="radio" name="gender" value="male" required>Femal <input type="radio" name="gender" value="female" required></td>
            </tr>
            <tr><td>Email Address</td> <td><input type="email" id="emaila" name="email" placeholder="Email Address"></td><br><span id="emaill"></span></tr>
        
            <tr><td>Mobile number</td> <td><input type="number" id="mobile" name="mobile" placeholder="Mobile Number" required></td></tr>
            <span class="mobilee"></span>
            <tr><td>Current Address</td> <td><input type="text" id="address" name="address" placeholder="Current Address" required></td></tr>
            <tr><td>Parent/Guardian Name</td> <td><input type="text" id="parant" name="fathername" placeholder="Parent/Guardian Name" required></td></tr>
            <tr><td>Class you want to apply for</td><td><input type="text" placeholder="For example:Class 2020-2021." name="apply" required></td></tr><br><br>
            <tr class="info-msg"><td colspan="2">Is there any medical information related to the student, that you would like the school to be aware of?</td><td>Yes<input type="radio" name="medical" value="yes" required></td><td>No <input type="radio" name="medical" value="no" required></td></tr>
            <tr class="info-msg"><td colspan="2">Do you want to request transportation services for the student?</td><td>Yes<input type="radio" name="transport" value="yes" required></td><td>No <input type="radio" name="transport" value="no" required></td></tr>
            <tr align="center"><td colspan="2"><input type="submit" id="sumbit-btn" name="submit"></td></tr>
        </table>
    </form>




<br><br><br><br>

        <section class="allfuter">
            <div class="futr-div"><img src="../img/logo.png"></div>
            <div class="futr-div">
              CONTACT US<br><br>
              Address:-Rauthat(Nepal)<br>
              Mobile NO.9844625308<br>
              2018rameshprasad@gmail.com
          </div>  
            <div class="futr-div" id="signin">SIGN IN<br><br>
                  Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name=" email" id="email" placeholder="Enter your Email"><br>
                  Password&nbsp;<input type="password" name="password" id="password"placeholder="Enter your password"><br>
                  <input type="submit" name="login" id="submit">
            </div>
        </section>


        
<script type="text/javascript">
  
  function  validation(){
    var emaila=document.getElementById('emaila').value;
    var mobile=document.getElementById('mobile').value;

    if(emaila=="")
    {
        document.getElementById('emaill').innerHTML="Error:-please Enter Email Address In The Box";
        return false;
        
     }
     else
    {
        document.getElementById('emaill').innerHTML="";
    }  

    if(mobile.length<10 && mobile.length>0)
       {
                 document.getElementById('emaill').innerHTML="Error:-invalid number";
                return false;
       }


    }    
</script>

<?php
if(isset($_POST['submit']))
{

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dob'];
$gr=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$fathername=$_POST['fathername'];
$apply=$_POST['apply'];
$medical=$_POST['medical'];
$transport=$_POST['transport'];

     if($fn!="" && $ln!="" && $dob!="" && $gr!="" && $email!="" && $mobile!="" && $address!="" && $fathername!="" && $apply!="" && $medical!="" && $transport!="")
     {

            $queryy="INSERT INTO STUDENTADMISSIONFORM VALUES('$fn','$ln','$dob','$gr','$email','$mobile','$address','$fathername','$apply','$medical','$transport')";
            $dataa= mysqli_query($conn, $queryy);


        if($dataa)
         {
            echo "inserted in data in database";
        }
    }
else
{
  echo " dosen't inserted data in database";
}  
}
?>

</body>
</html>