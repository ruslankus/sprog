<?php
define ("DB_SERVER", "localhost");
define ("DB_USER", "root");
define ("DB_PASS", "mysql");
define ("DB_NAME" , "sprog");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//test if connection occured
if(mysqli_connect_errno()){
    die("Database connection failed " . mysqli_connect_error() . " (" .
        mysqli_connect_errno() . ")" );
}



function confirm_query($result_set){
    if(!$result_set){
        die("Database query failed");
    }
}


/**
 *
 */
function getRecord(){
    global $connection;
    $records = array();
    $sql = "SELECT * FROM news";
    $subject_set = mysqli_query($connection,$sql);

    confirm_query($subject_set);
    while($subject = mysqli_fetch_assoc($subject_set)){
        $records[] = $subject;
    }
    return $records;
}


?>