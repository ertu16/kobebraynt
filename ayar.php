<?php 


  try {
	  
	  $db = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8","root","12345678");
	  
  }catch(PDOException $mesaj) {
	  
	  echo $mesaj->getmessage();
	  
  }
 


?>