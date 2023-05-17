<?php

try{


    $db=new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8",'root','');
}

catch(PDOexpection $e){

    echo $e->getMessage();
}
?>