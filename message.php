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

$content = $name.PHP_EOL.$subject.PHP_EOL.$message;
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/".$email.".txt","wb");
fwrite($fp,$content);
fclose($fp);
