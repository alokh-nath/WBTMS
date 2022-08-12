<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="logheader">
        <div class="topnav">
            <a href="about">About</a>
            <a href="">Sign up</a>
            <a href="">Sig in</a>
        </div>
        <div class="loginmain">
            <form action="">
                <div class="logform">
                    <label for=""><b>Emain/User Name</b></label>
                    <input type="text" name="" id="" placeholder="Enter Email or User Name" required>
                    <br>
                    <label for=""><b>Password</b></label>
                    <input type="text" name="" id="" placeholder="Enter Password" required>
                    <br>
                    <label>
                        <input type="checkbox" name="" id="" checked="checked">Remember Me
                    </label>
                    <br>
                    <button type="submit">Log in</button>
                </div>
            </form>
        </div>
        <div class="signupmain">
            <form action="">
                <div class="logform">
                    <label for=""><b>Name</b></label>
                    <input type="text" name="" id="" placeholder="Enter Name" required>
                    <br>
                    <label for=""><b>Email</b></label>
                    <input type="text" name="" id="" placeholder="Enter your Mail ID" required>
                    <br>
                    <label for=""><b>User Name</b></label>
                    <input type="text" name="" id="" placeholder="create User Name" required>
                    <br>
                    <label for=""><b>Password</b></label>
                    <input type="text" name="" id="" placeholder="Create Password" required>
                    <br>
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <div class="logfooter">

    </div>
</body>
</html>