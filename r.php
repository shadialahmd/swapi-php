<?php


include_once "read.php";
$r=new Read();
$data=json_decode($r->getall(),true);

print_r($data["results"]);


?>

<html lang="en">
    <head></head>
    <body>
        
   
    <?php
    
    foreach($data["results"] as $s){
        ?>
         <div style="width:50px;height:50px;background-color:red">
        <?php
        echo ($s["name"]);
        echo "<br/>";
    }
 
     ?>
   </div>


   </body>
</html>