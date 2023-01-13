<?php
session_start();
include_once "config.php";
$sql = mysqli_query( $conn, "SELECT * FROM users" );
$output = "";
if ( mysqli_num_rows( $sql ) == 1 ) {
    $output .= "No users available!";
} elseif ( mysqli_num_rows( $sql ) > 0 ) {
   include_once "data.php";
    
}
echo $output;
?>