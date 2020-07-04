<?php

$name=$_POST["name01"];
$emailid=$_POST["email"];
$mobileno=$_POST["mobile"];

echo "ThankYou!!!";.$name.$emailid.$mobileno;

//1. Local Veriable
//2. Global Veriable
//3. Super Global Veriable
$to= "juhinsohamdas@gmail.com";
$from= "dassoham53@gmail.com";
$subject= "email sending from server";
$body= "hii, test mail";

maill($to,$from,$subject,$body);
?>
