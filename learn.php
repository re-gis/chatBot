<?php
include_once "php/config.php";
$sql = mysqli_query($conn, "SELECT * FROM users ");
if(mysqli_num_rows($sql) > 0){
while($output = mysqli_fetch_assoc($sql)){
    print_r ($output);

}
}else{
    echo "No output";
}

?>