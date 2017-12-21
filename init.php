<?php 
ob_start();
session_start();



$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'car_rental';
$Database = new mysqli($server, $user, $pass, $db);


// $server = 'localhost';
// $user = 'themesho_rental';
// $pass = 'w*[iW+qC@Ha+';
// $db = 'themesho_car_rental';
// $Database = new mysqli($server, $user, $pass, $db);


// error reporting
mysqli_report(MYSQLI_REPORT_ERROR);
ini_set('display_errors', 1);
 ?>