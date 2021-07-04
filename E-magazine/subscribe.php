<?php

try {

$db = new mysqli ("localhost", "root", "", "newsletter"); } 

catch (Exception $exc) {

echo $exc->getTraceAsString();
}


if (isset(isset($_POST['mail'])){

   
    $mail=$_POST['mail'];
    

    $is_insert = $db->query("INSERT INTO `subscribe`('mail') VALUES ('$mail')");

    if($is_insert==TRUE){
        echo "<h2>Thanks,your request is submitted. </h2>";
        exit();
    }
    
}



?>