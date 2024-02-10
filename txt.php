<?php
class usernaaa(){
    function __construct(){
        echo "construction";
    }
    function __destruct(){
        echo "deconstruction";

    }
    $cnn =PDO("musql:host=$servername,bdname=$dbname",$username,$password);
    $cnn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
?>