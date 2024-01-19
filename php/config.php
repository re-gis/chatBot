<?php
    // $conn = mysqli_connect("sql206.epizy.com","epiz_33398343","yfua8SOFRa8W","epiz_33398343_chat");
    $conn = mysqli_connect('localhost', 'root', '', 'chat');
    if(!$conn){
        echo "Not Connected!" . mysqli_connect_error();
    }

?>