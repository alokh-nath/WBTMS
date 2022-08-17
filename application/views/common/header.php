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
    <title></title>
</head>
<body>
    <div class="topnav">
            <button onclick="parent.location='maincontroller/about'".style.display='block' style="width:auto;">About Us</button>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        </div>
</body>
</html>