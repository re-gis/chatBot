<?php
    include_once "header.php";
?>

<body>
    <div class="super">
        <section class="form login">
            <header>InstMessage</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="field  input">
                    <label for="email">Email Address</label>
                    <input type="email" placeholder="Enter your email " required name="email">
                </div>
                <div class="field  input">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter your password" required name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>

            </form>
            <div class="link">Not yet signed up? <a href="./index.php">SignUp now</a></div>
        </section>
    </div>
    <script src="login.js"></script>
</body>

</html>