<?php
$username = 'root';
$dbname = 'regis';
$password = '';
$server = 'localhost';
$connect = mysqli_connect( $server, $username, $password, $dbname );
if ( !$connect ) {
    die( 'Error' . mysqli_error() );
} else {
    echo 'Connection done!';
}

?>