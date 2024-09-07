<?php
    include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In/Sign up</title>
    <link rel="stylesheet" href="src/css/style.css">

</head>
<body class="body1">


    <div class="container">
        <div class="box form-box">
            <h1>SIGN IN</h1>
        <form action="dashboard/admin/authentication/admin-class.php" method="POST">
            <div class="field input">
            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
            </div>
            <div class="field input">
            <input type="email" name="email" placeholder="Enter Email" required> <br>
            </div>
            <div class="field input">
            <input type="password" name="password" placeholder="Enter Password" required> <br> <br>
            </div>
            <div class="field" id="btn">
            <button type="submit" name="btn-signin">Sign In</button>
            </div>
        </form>
        </div>
    </div>




    
    <div class="container-register">
        <div class="box1 form-box1">
    <h1>REGISTRATION</h1>
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <div class="field input">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        </div>
        <div class="field input">
        <input type="text" name="username" placeholder="Enter Username" required> <br>
        </div>
        <div class="field input">
        <input type="email" name="email" placeholder="Enter Email" required> <br>
        </div>
        <div class="field input">
        <input type="password" name="password" placeholder="Enter Password" required> <br><br>
        </div>
        <div class="field" id="btn">
        <button type="submit" name="btn-signup">Sign Up</button>
        </div>
    </form>
    </div>
    </div>
</body> 
</html>