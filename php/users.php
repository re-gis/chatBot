<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query( $conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}" );
$output = "";
if ( mysqli_num_rows( $sql ) == 1 ) {
    $output .= "No users available!";
} elseif ( mysqli_num_rows( $sql ) > 0 ) {
   include_once "data.php";
    
}
echo $output;
?>