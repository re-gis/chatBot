<?php
session_start();
if ( !isset( $_SESSION[ 'unique_id' ] ) ) {
    header( "location: ChatappLogin.php ");
}
?>
<?php include_once "header.php"; ?>

<body>
    <div class="super">
        <section class="chat-area">
            <header>
        <?php
            include_once "php/config.php";
            // $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $userId = $_GET["user_id"];
            $sql = mysqli_query($conn,"SELECT * FROM users WHERE user_id=".$user_id."");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                
            }
        
        ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['image']?>" alt="">
                    <div class="details">

                        <span><?php echo $row['fname'] .' '. $row['lname']?></span>
                        <p><?php echo $row['status']?></p>
                    </div>
                </div>
                
            </header>
            <div class="chat-box">
                <div class="msg outgoing">
                    <div class="details">
                        <p>Hy this is about the outgoing message</p>
                    </div>
                </div>
                <div class="msg incoming">
                    <img src="./reg - Copy.png" alt="">
                    <div class="details">
                        <p>Hy this is about the incoming message</p>
                    </div>
                </div>
                <div class="msg outgoing">
                    <div class="details">
                        <p>Hy this is about the outgoing message</p>
                    </div>
                </div>
                <div class="msg incoming">
                    <img src="./reg - Copy.png" alt="">
                    <div class="details">
                        <p>Hy this is about the incoming message</p>
                    </div>
                </div>
                <div class="msg outgoing">
                    <div class="details">
                        <p>Hy this is about the outgoing message</p>
                    </div>
                </div>
                <div class="msg incoming">
                    <img src="./reg - Copy.png" alt="">
                    <div class="details">
                        <p>Hy this is about the incoming message</p>
                    </div>
                </div>
                <div class="msg outgoing">
                    <div class="details">
                        <p>Hy this is about the outgoing message</p>
                    </div>
                </div>
                <div class="msg incoming">
                    <img src="./reg - Copy.png" alt="">
                    <div class="details">
                        <p>Hy this is about the incoming message</p>
                    </div>
                </div>
                <div class="msg outgoing">
                    <div class="details">
                        <p>Hy this is about the outgoing message</p>
                    </div>
                </div>
                <div class="msg incoming">
                    <img src="./reg - Copy.png" alt="">
                    <div class="details">
                        <p>Hy this is about the incoming message</p>
                    </div>
                </div>
            </div>
            <form action="insert-chat.php" class="typing-area">
                <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'];?>" hidden>
                <input type="text" name="incoming_id" value="<?php echo $user_id;?>"  hidden>
                <input class="inputField" name="message" type="text" placeholder="Type your message here ...">
                <button type="submit">Send</button>
            </form>

        </section>
    </div>
    <script src="chat.js"></script>
</body>

</html>