<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">

        <div>
            <h1>Signup Page</h1>
        </div>
        <div>
            Username:<input type="text" placeholder='Enter username' name="name">
        </div>
        <div>
            Password: <input type="password" placeholder='Enter your password' name="password">
        </div>
        <div>
            <input type="submit" value="Login" name="submit">
        </div>
    </form> -->
    <?php
    $server="localhost";
    $username="root";
    $password="";
    $dbName="regis";
    $name;
    $pass;
    if(isset($_POST["submit"])){
        $conn=mysqli_connect($server,$username,$password,$dbName);
        $name=$_POST["uname"];
        $pass=$_POST["password"];
        $query1="INSERT INTO login(id,username,password) VALUES(1,'$name','$pass')";
        if(mysqli_query($conn,$query1)){
            echo "Data entered!";
        }else{
            echo "No data entered!";
        }
    }
   
    
    ?>
        

<!-- </body>
</html> -->