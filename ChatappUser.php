<?php
session_start();
if ( !isset( $_SESSION[ 'unique_id' ] ) ) {
    header( "location: ChatappLogin.php ");
}
?>
<?php
include_once 'header.php';
?>

<body>
    <div class='super'>
        <section class='users'>
            <header>
                <?php
                    include_once "php/config.php";
                    // $user_id = $row['unique_id'];
                   $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                   if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                   }
                ?>
                <div class='content'>
                    <img src='php/images/<?php echo $row['image']?>' alt=''>
                    <div class='details'>

                        <span><?php echo $row['fname'] .' '. $row['lname']?></span>
                        <p><?php echo $row['status']?></p>
                    </div>
                </div>
                <a href='./ChatappLogin.php?logout_id:<?php echo $row['unique_id']?>' class='logout'>Logout</a>
            </header>
            <!-- <div class='search' hidden>
                <span class='text'>Select a user to chat</span>
                <input type='text' placeholder='Enter name to search...'>
                <button><i class='fas fa-search'>Search</i></button>
            </div> -->
            <div class='users-list'>
                
                
            </div>

        </section>
    </div>
    <script src="users.js"></script>
</body>

</html>