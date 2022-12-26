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
     $sql = "UPDATE objek SET nama_lantai='".$_POST['nama']."',luas='".$_POST['luas']."' WHERE id=$edit_id";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     echo "Data Updated";

 }
 else  
 {
      echo "Please Enter The Values";  
 }
 ?>