<?php
session_start();
require_once "Calculator.php";
$link = mysqli_connect("db","root","example","Project1");

if (!isset($_SESSION['serializedCalculator'])) {
    // If not, create a new Calculator object and serialize it
    $Calculator = new Calculator();
    $_SESSION['serializedCalculator'] = serialize($Calculator);
} else {
    // If it exists, unserialize the object
    $Calculator = unserialize($_SESSION['serializedCalculator']);
}
if($_POST['operation'] == 0){
    echo $Calculator->adding($_POST['num']);
}
if($_POST['operation'] == 1){
    echo $Calculator->minusing($_POST['num']);
}
if($_POST['operation'] == 2){
    echo $Calculator->multiplication($_POST['num']);
}
if($_POST['operation'] == 3){
    echo $Calculator->division($_POST['num']);
}
if($_POST['operation'] == 4){
    $Calculator->Number = 0;
    echo $Calculator->Number;
}


if(is_numeric($Calculator->Number)) {
    mysqli_query($link, "insert into Calculator(`Result`, `Time`) values('" . $Calculator->Number . "', NOW());");
}
$_SESSION['serializedCalculator'] = serialize($Calculator);