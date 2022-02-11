<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=acudb","tidal@tidal.tidal","tidal!");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>