<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="h1.css">
</head>
<body>
    <div>
        <div>
            <h1>Sign Up</h1>
        </div>
        <div>
            <p>Please fill this form to create an account</p>
        </div>
        
        <form action="#" method="POST">
            <div id="main">
                Username: <input id="input_Lay" type="text" placeholder="Enter your username" name="uname">
            </div>
            <div id="main">
                Password: <input id="input_Lay" type="password" placeholder="Enter your new password" name="password">
            </div>
            <div id="main">
                Confirm Password: <input id="input_Lay" type="password" placeholder="Confirm your password" name="cpassword">
            </div>
            <div id="btn_Lay">
                <input type="submit" value="Submit" name="submit" class="btn">
            
                <input type="reset" value="Reset" class="btn">
            </div>
            <div id="linkInput">
                <p>Already have an account?<a href="#">Login here</a></p>
            </div>
        </div>
    </form>
    <?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="regis";
    if(isset($_POST["submit"])){
        $conn=mysqli_connect($server,$username,$password,$dbname);
        $name=$_POST["uname"];
        $pass=$_POST["password"];
        $confirmPass=$_POST["cpassword"];
        if(!empty($name) || !empty($pass)){
            if($pass != $confirmPass ){
                echo "Confirm password correctly!";
            }else{
        $query1="INSERT INTO login1(id,username,password) VALUES(1,'$name','$pass')";
        if(mysqli_query($conn,$query1)){
            echo "Data entered!";
        }else{
            echo "Error!";
        }
    }
    }else{
        echo "Enter your username and password";
    }

    }
    ?>
</body>
</html>