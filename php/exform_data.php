
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exform_data.css">
    <title>student data</title>
</head>
<body>
<h1>Student Examation Form Data</h1>
<center><table border="1"><tr>
<td>Roll No</td><td>First Name</td><td>Last Name</td><td>Date Of Birth</td><td>City</td>
<td>Stste</td><td>Country</td><td>Gender</td><td>Mobile No</td><td>Email Address</td>
<td>father Name</td><td>mother Name</td><td>Class</td><td>Subject</td>
</tr>





<?php
include("../php/connection.php");
$query= "SELECT * FROM STUDENTEXFORM";
$data= mysqli_query($conn , $query);
$total= mysqli_num_rows($data);
//echo "$total";

/*echo $result['rollno'];echo $result['firstname'];echo $result['lastname'];
echo $result['dob'];echo $result['city'];echo $result['state'];
echo $result['country'];echo $result['gender'];echo $result['mobile'];
echo $result['email'];echo $result['fathername'];echo $result['mothername'];
echo $result['class'];echo $result['section'];echo $result['subject'];*/


if($total !=0)
   {
     $result= mysqli_fetch_assoc($data);
     while($result=mysqli_fetch_assoc($data))
       {
           echo "
           <tr>
           <td>".$result['rollno']."</td>
           <td>".$result['firstname']."</td>
           <td>".$result['lastname']."</td>
           <td>".$result['dob']."</td>
           <td>".$result['city']."</td>
           <td>".$result['state']."</td>
           <td>".$result['country']."</td>
           <td>".$result['gender']."</td>
           <td>".$result['mobile']."</td>
           <td>".$result['email']."</td>
           <td>".$result['fathername']."</td>
           <td>".$result['mothername']."</td>
           <td>".$result['class']."</td>
           <td>".$result['subject']."</td>
           </tr>";
       }
   } 
?>
</table></center>
</body>
<html>