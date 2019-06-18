<?php
    require 'header.php';
?>
    <main class = "wrapper">
        <h1>Sign Up</h1>
        <form action = "includes/signup.inc.php" method = "post" class = "signup-form">
            <label for = "uname"><b>Username</b></label>
            <input type = "text" name = "uname" placeholder = "Enter Username" />

            <label for = "mail"><b>Email</b></label>
            <input type = "email" name = "mail" placeholder = "Enter Email" />

            <label for = "pwd"><b>Password</b></label>
            <input type = "password" name = "pwd" placeholder = "Enter Password" />

            <label for = "pwd-repeat"><b>Repeat Password</b></label>
            <input type = "password" name = "pwd-repeat" placeholder = "Repeat Password" />
            <button type = "submit" name = "signup-submit">Sign Up</button>
        </form>
    </main>
<?php
    require 'footer.php';
?>