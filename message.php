<?php

$need = ['name','email','subject','message'];

foreach($_POST as $key=>$value){
    
    if(in_array($key, $need)){
        $$key = preg_replace('/[^a-z0-9@.\s\-]/i', '', $value);
    }
}

foreach($need as $param){
    if(!isset($$param))
    die("Please talk in proper way!");
    echo $$param."<br>";
}


// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("user.beshi@gmail.com","My subject",$msg);
