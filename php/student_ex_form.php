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
    <link rel="stylesheet" href="../css/student-ex-form.css">
    <title>student examination form</title>
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
        <h1>Student Examination Form</h1>
         <form action="#" method="POST">
             <table>
                 <tr><td >Student Roll No.</td><td><input type="number" name="rollno" placeholder="Enter Roll No." required></td></tr>
                 <tr><td colspan="3">Full Name</td></tr>
                 <tr><td><input type="text" name="firstname" placeholder="First Name" required></td><td><input type="text" placeholder="Midel Name" name="midelname" required></td><td><input type="text"
                 name="lastname" placeholder="Last Name" required></td></tr>
                 
                 <tr><td colspan="3">Full Address</td></tr>
                 <tr><td><input type="text" name="city" placeholder="City" required></td><td><input type="text"   name="state" placeholder="State" required></td><td><input type="text" name="country" placeholder="country" required></td></tr>
                 
                 <tr><td>Date Of Birth </td></tr>
               <tr>  <td><select name="dob" id="dob" required>
                    <option >day</option>
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
                </select></td>

               <td> <select name="dob" id="dob" required>
                    <option >Months</option>
                    <option value="jan">january</option> <option value="feb">february</option>
                    <option value="march">march</option><option value="April">April</option>
                    <option value="may">May</option><option value="june">June</option>
                    <option value="july">July</option><option value="augest">Augest</option>
                    <option value="september">September</option><option value="october">October</option>
                    <option value="november">November</option><option value="december">December</option>
                </select></td>

                <td><select name="dob" id="dob" required>
                    <option >years</option>
                    <option value="01">2001</option> <option value="02">2002</option>
                    <option value="03">2003</option><option value="04">2004</option><option value="05">2005
                    </option><option value="06">2006</option>
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
 


                 <tr><td colspan="3">Gender</td></tr>
                 <tr><td>Male<input type="radio" name="gender" value="male" required></td><td>Female<input type="radio"name="gender" required></td><td>Transgender <input type="radio" name="gender" value="female" required></td></tr>
                 <tr><td>Contact</td><td><input type="number" name="mobile" placeholder="Mobile Number" required></td><td><input type="email" name="email" placeholder="Email Address" required></td></tr>
                 <tr><td>Father's Name</td><td colspan="2"><input type="text" name="fathername" required></td></tr>
                 <tr><td>Mother's Name</td><td colspan="2"><input type="text" name="mothername" required></td></tr>
                 <tr><td>Class</td><td>
                     <select name="class" id="class" required>
                        <option value="class1">Select Class</option>
                        <option value="class1">Class1</option>
                        <option value="class2">Class2</option>
                        <option value="class3">Class3</option>
                        <option value="class4">Class4</option>
                        <option value="class5">Class5</option>
                        <option value="class6">Class6</option>
                        <option value="class7">Class7</option>
                        <option value="class8">Class8</option>
                        <option value="class9">Class9</option>
                        <option value="class10">Class10</option>
                        <option value="class11">Class11</option>
                        <option value="class12">Class12</option> 
                     </select></td>
                 </tr>

                 <tr><td rowspan="3">Subject</td> <td>English <input type="checkbox" name="subject[]" value="english,"></td><td>Nepali<input type="checkbox" name="subject[]" value="nepali,"></td></tr>
                   <tr> <td>Science <input type="checkbox" name="subject[]" value="science,"></td><td>Math <input type="checkbox" id="math" name="subject[]" value="math,"></td></tr>
                    <tr><td>Health<input type="checkbox" id="health" name="subject[]" value="health,"></td><td>Social <input type="checkbox" name="subject[]" value="social,"></td> </tr>
                    <tr align="center"><td colspan="3"><input type="submit" id="submit1" name="submit1"></td></tr>
             </table>
         </form>

<br><br>
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





    <?php

    if(isset($_POST['submit1']))
    {

        $rool=$_POST['rollno'];
        $fn=$_POST['firstname']; 
        $mn=$_POST['midelname'];
        $ln=$_POST['lastname'];
        $dob=$_POST['dob'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $cty=$_POST['country'];
        $gr=$_POST['gender'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $fan=$_POST['fathername'];
        $man=$_POST['mothername'];
        $cls=$_POST['class'];
        $sub=$_POST['subject'];
        $subject1=implode($sub);

               if($rool!="" && $fn!="" && $mn!="" && $ln!="" && $dob!="" && $city!="" && $state!="" && $cty!="" && $gr!="" && $mobile!="" && $email!="" && $fan!="" && $man!="" && $cls!="" && $subject1!="")
                 {
                    $query="INSERT INTO STUDENTEXFORM VALUES('$rool','$fn','$mn','$ln','$dob','$city','$state','$cty','$gr','$mobile','$email','$fan','$man','$cls','$subject1')";
                    $data=mysqli_query($conn, $query);

                        if($data)
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