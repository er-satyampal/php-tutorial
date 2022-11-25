<?php

$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$dob = $_GET["dob"];
$email = $_GET["email"];
$mobile_no = $_GET["mobile_no"];
$country = $_GET["country"];

require_once("db/connection.php");

$sth = $connection->prepare("INSERT INTO `students` (first_name, last_name, dob, email, mobile_no, country) VALUES (:db_first_name, :db_last_name, :db_dob, :db_email, :db_mobile_no, :db_country)"); 

$sth->bindParam(':db_first_name', $first_name);
$sth->bindParam(':db_last_name', $last_name);
$sth->bindParam(':db_dob', $dob);
$sth->bindParam(':db_email', $email);
$sth->bindParam(':db_mobile_no', $mobile_no);
$sth->bindParam(':db_country', $country);
	

if($sth->execute()){
echo "Data Inserted";	
}else{
	echo "Something Went Wrong!";
}