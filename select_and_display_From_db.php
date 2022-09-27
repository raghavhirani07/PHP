<?php

  $servername="localhost";
  $username="root";
  $password="";
  $database="contact";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if(!$conn)
{
    die("sorry we failed to connect :".mysqli_connect_error());
}
else{

$sql="SELECT * FROM `contact_us`";
$result=mysqli_query($conn,$sql);

//* Find the numbers of records returned
$num= mysqli_num_rows($result);
//echo $num."<br>";

//* Display the rows
// if($num > 0){
//     $row=mysqli_fetch_assoc($result);
// print_r($row);

//* fetch information using fetch
echo "<table border=2px width=50%>";
echo "<tr> <th> S_no </th><th> Name</th> <th> Email id </th></tr>";
while($row=mysqli_fetch_assoc($result)){

    // echo $row['S_no']."number boys that name ".$row['name']." and their email id is ".$row['Email'];
echo "<tr> <td>".$row['S_no']."</td> <td>".$row['name']."</tc><td>".$row['Email']."</th></tr>";

}
echo "</table>";

}







  ?>
