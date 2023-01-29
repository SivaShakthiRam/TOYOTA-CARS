<?php
$n=$_POST['stname'];
$c=$_POST['stclass'];
$con=mysqli_connect("localhost","root","","12std");
$sql="INSERT INTO studentsdetails(student_name,student_class) values('$n','$c')";
$r= mysqli_query($con,$sql);
if($r){
    echo"STUDENTS DETAILS ADDED SUCCESSFULLY";
    
}
else{
    echo"STUDENTS DETAILS NOT ADDED";
}

?>