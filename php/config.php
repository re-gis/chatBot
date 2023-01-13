<?php
    $conn = mysqli_connect("localhost","root","","chat");
    if(!$conn){
        echo "Not Connected!" . mysqli_connect_error();
    }

?>