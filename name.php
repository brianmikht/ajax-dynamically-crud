<?php
require_once("config.php");
$number = count($_POST["nama_lantai"]);
 if($number > 0){
      for($i=0; $i<$number; $i++){
           if(trim($_POST["nama_lantai"][$i] != '')){
                $nama_lantai[$i]=$_POST['nama_lantai'][$i];
           }
           if(trim($_POST["luas"][$i] != '')){
               $luas[$i]=$_POST['luas'][$i];
          }
      }
     $conn = $db->connection;
     $sql = "INSERT INTO objek(nama_lantai, luas) VALUES('". json_encode($nama_lantai)."' , '". json_encode($luas)."')";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     echo "Data Inserted";
 }
 else  
 {
      echo "Please Enter The Values";  
 }
 ?>