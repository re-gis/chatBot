<?php
    $conn = mysqli_connect("localhost","root","","learn");
    if($conn){
        $msg = $_POST["message"];
        // echo $msg;
        $sql = "INSERT INTO msg (msg) VALUE ('$msg')";
        if(mysqli_query($conn,$sql)){
            echo "Message inserted!";
        }
        
    }
?>