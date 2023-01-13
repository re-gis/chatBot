<?php
//start the session

session_start();

//connection

include_once 'config.php';

//get user credentials from the form

$fname = mysqli_real_escape_string( $conn, $_POST[ 'fname' ] );
$lname = mysqli_real_escape_string( $conn, $_POST[ 'lname' ] );
$email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
$password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );


//check if they are empty


if ( !empty( $fname ) && !empty( $lname ) && !empty( $email ) && !empty( $password ) ) {
    //check the email
    if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        //check if the email already exists
        $sql = mysqli_query( $conn, "SELECT email FROM users WHERE email = '{$email}'" );
        if ( mysqli_num_rows( $sql ) > 0 ) {
            echo $email . 'already taken!';
            
            //if it isn't taken, check the image
        } else {
            if ( isset( $_FILES[ 'image' ] ) ) {
                $image_name = $_FILES[ 'image' ][ 'name' ];
                $image_type = $_FILES[ 'image' ][ 'type' ];
                $tmp_name = $_FILES[ 'image' ][ 'tmp_name' ];
                //get the extension of the image
                $img_explode = explode( '.', $image_name );
                $img_ext = end( $img_explode );
                //allowed extensions 
                $extensions = [ 'png', 'jpg', 'jpeg' ];
                if ( in_array( $img_ext, $extensions ) === true ) {
                    $time = time();
                    //rename the image by adding the time it is uploaded to differentiate it from others evenif they are the same
                    $new_img_name = $time . $image_name;
                    //save the image in a folder not the database
                    if ( move_uploaded_file( $tmp_name, 'images/' . $new_img_name ) ) {
                        $status = 'Active now';
                        $random_id = rand( time(), 10000000 );
                        //$newPass = password_hash( $password, PASSWORD_DEFAULT );
                        //save the user's credentials in the database
                        // $user_id = $_SESSION[ 'unique_id' ];
                        $sql2 = mysqli_query( $conn, "INSERT INTO users (unique_id,fname,lname,email,password,image,status) 
                                                      VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')" );
                        if ( $sql2 ) {
                            $sql3 = mysqli_query( $conn, "SELECT * FROM users WHERE email = '{$email}'" );
                            if ( mysqli_num_rows( $sql3 ) > 0 ) {
                                $row = mysqli_fetch_assoc( $sql3 );
                                $_SESSION[ 'unique_id' ] = $row[ 'unique_id' ];
                                
                                echo 'Success!';
                            }
                        } else {
                            echo 'SOmething went wrong!';
                        }
                    }

                } else {
                    echo 'The image is not supported!';
                }
            }
        }

    } else {
        echo "$email is invalid! ";
    }
} else {
    echo 'All inputs are required!';
}
?>