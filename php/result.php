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
    <link rel="stylesheet" href="../css/result.css">
    <title>Result</title>
    <style>
        body{
            background-color: rgb(137, 146, 146);
        }
        table{
            margin-left: 30%;
            width: 40%;
            height: 300px;
            background-color: rgb(47, 3, 82);
            border-radius: 30px;
        }
        td{
            font-size: 30px;
            color: rgb(248, 240, 240);
        }
        td input{
            font-size: 20px;
            padding: 2.5px;
        }
        h1{
            margin-left: 35%;
            color: cornsilk;
        }
        td select{
            font-size: 25px;
        }
        #submit2{
            width: 60%;
            font-size: 30px;
            border-radius: 100px 0px;
            background-color: lightslategrey;
        }
        #submit2{
        animation: colorchanglogo 2s infinite;
            }
        @keyframes colorchanglogo{
            0%{color: rgb(236, 65, 65);}
            20%{color: rgb(209, 219, 173);}
            40%{color: rgb(102, 13, 80);}
            60%{color: rgb(36, 9, 216);}
            80%{color: rgb(61, 170, 33);}
            100%{color: rgb(187, 124, 8);}
        }
    </style>
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
<br><br><br><br><br><br><br><br><br>

<h1>You Want To See Result Than <br>Enter Required Information</h1>

<form action="#">
    <table>
        <tr><td>Student Roll No.</td><td><input type="number" placeholder="Student Roll No." required></td></tr>
        <tr><td>Date Of Birth</td><td><input type="number" placeholder="Student Date Of Birth" required></td></tr>
        <tr><td>Class</td><td><select name="class1" id="class1">
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
        </select></td></tr>
        <tr align="center"><td colspan="2"><input type="submit" id="submit2"></td></tr>
    </table>
</form>
<br><br><br><br><br><br><br>
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

</body>
</html>