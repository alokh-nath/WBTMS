<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="logheader">
        <div id="id01" class="model">
            <form class="modal-content animate" action="/login.php" method="post">
                <div class="container">
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
                <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            </form>
        </div>
        <div id="id02" class="model">
            <form class="modal-content animate" action="/login.php" method="post">
                <div class="container">
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
                    <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>