<?php
   try{
      $pdo=new PDO("pgsql:host=localhost;dbname=acudb","pgtidal","tidal");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>