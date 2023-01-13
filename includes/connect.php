<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method='POST'>
        <input type="text" placeholder='Enter your username' name='uname'>
        <input type="email" placeholder='Enter your email' name='email'>
        <input type="submit" value="Send" name='btn'>
    </form>
    <?php
    $username = $_POST['uname'];
    $email = $_POST['email'];
    echo "Hy $username your email is $email";
    
    ?>
</body>
</html>