<?php
try{

    $pdo = new PDO("mysql:host=localhost;dbname=dados","root","");
    print "conectado<br>";

}catch(Exception $e){
    print "falha";
}