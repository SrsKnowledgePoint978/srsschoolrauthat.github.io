
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/exform_data.css">
    <title>student data</title>
</head>
<body>
<h1>Student Admision Form Data</h1>
<center><table border="1"><tr>
<td>first name</td><td>last Name</td><td>Date of Birth</td><td>Gender</td><td>Email</td>
<td>Mobile</td><td>Address</td><td>Father Name</td><td>Apply Year</td><td>Medical</td>
<td>Transport</td><td colspan="2">Opration</td>
</tr>





<?php
include("../php/connection.php");
$query= "SELECT * FROM STUDENTADMISSIONFORM";
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
           <td>".$result['firstname']."</td>
           <td>".$result['lastname']."</td>
           <td>".$result['db']."</td>
           <td>".$result['gender']."</td>
           <td>".$result['email']."</td>
           <td>".$result['mobile']."</td>
           <td>".$result['address']."</td>
           <td>".$result['fathername']."</td>
           <td>".$result['apply-year']."</td>
           <td>".$result['medical']."</td>
           <td>".$result['transport']."</td> 
           <td><input type='submit' value='Update/Edit' class='editbtn'></td>
           <td><input type='submit' value='Delet' id='deletbtn'></td>

           </tr>";
       }
   } 
?>
</table></center>
</body>
<html>