<?php
echo "Welcome to my my sql page <br> ";
//* ways to connect to a mysol database
//*  1. MYSQli extension
//*  2. PDO
$servername="localhost";
$username="root";
$password="";
$database="student";

//*if you add a database at the connection of sql is a allowd

$conn=mysqli_connect($servername,$username,$password,$database);
/* echo "<pre>";
 print_r($conn);
 echo "</pre>";
 echo $conn->{'client_version'};*/

if(!$conn)
{
    die("sorry we failed to connect :".mysqli_connect_error());
}
else{
    echo "Connection Successful <br>";
}
//* make database
/* $sql="CREATE DATABASE hello1";
$result=mysqli_query($conn,$sql);
if($result){
    echo "the db was create successfully";

}
else
{
    echo " the db was not creted error --> ". mysqli_errno($conn);
}*/

//* Make Table on Databse

/* $table_Create='CREATE TABLE `manual_create_employee` ( `Emp_no` INT NOT NULL AUTO_INCREMENT ,  `Emp_name` VARCHAR(11) NOT NULL ,  `Emp_age` INT NOT NULL ,  `Date_of_Join` DATE NOT NULL ,    PRIMARY KEY  (`Emp_no`))';
$result=mysqli_query($conn,$table_Create);
if($result){
    echo "The db was created Succesfully!";
}
else
{
    echo "the db was not crated successfully because of some error ";
}*/
$roll_no="10";
$name="World";
$age=3;
$date_of_join=date('02/05/2002');

$entry1="INSERT INTO `manual_create_employee` (`Emp_no`, `Emp_name`, `Emp_age`, `Date_of_Join`) VALUES ('1', 'Raghav', '23', '2022-07-04')"; //*This is entry directly in phpmyadmin
$entry2="INSERT INTO `manual_create_employee` (`Emp_no`, `Emp_name`, `Emp_age`, `Date_of_Join`) VALUES ('2', 'jeet', '30', '2002-01-04')";
$entry3="INSERT INTO `manual_create_employee` (`Emp_no`, `Emp_name`, `Emp_age`, `Date_of_Join`) VALUES ('$roll_no', '$name', '$age', $date_of_join)";
$result=mysqli_query($conn,$entry3);
if($result){
    echo "data entry succesfully !!";
}
else
{
    echo "the data was not Enter successfully because of some error ";
}
?>