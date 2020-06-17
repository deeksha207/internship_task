<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
 $json=json_decode(file_get_contents("my.json"));
 if($username==$json->username && $password==$json->password){
     echo "Login Success";
 }
 else{
     
     echo "Login Failed";
 }
?>