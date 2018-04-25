<?php
$passed_title = 'Login';
include('./include_files/HTML_MENU.inc'); // INCLUDING HTML MENU ?>
<body>
    <div class="login-box">
        <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>
        </form>
    </div>
</body>
<?php include('./include_files/footer.inc');  // HTML FOOTER INCLUDE FILE?>