<?php
    include_once "header.php";
?>

<body>
    <div class="super">
        <section class="form signup">
            <header>InstMessage</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="first name">First Name</label>
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="field  input">
                        <label for="last name">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                <div class="field  input">
                    <label for="email">Email Address</label>
                    <input type="email" placeholder="Enter your email " name="email" required>
                </div>
                <div class="field  input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your new password" name="password" required>
                </div>
                <div class="field image">
                    <label for="file">Select image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>

            </form>
            <div class="link">Already signed up? <a href="./ChatappLogin.php">Login now</a></div>
        </section>
    </div>
    <!-- <script src="./passwordShow.js"></script> -->
    <script src="./sign.js"></script>
</body>

</html>