<?php

try {

$db = new mysqli ("localhost", "root", "", "emagazine"); } 

catch (Exception $exc) {

echo $exc->getTraceAsString();
}


if (isset($_POST ['name']) && isset($_POST['mail']) && isset($_POST['subject'])  && isset($_POST['message'])){

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $is_insert = $db->query("INSERT INTO `contactus`( `name`, `mail`, `subject`, `message`) VALUES ('$name','$mail',' $subject','$message')");

    if($is_insert==TRUE){
        echo "<h2>Thanks,your request is submitted. </h2>";
        exit();
    }
    
}



?>