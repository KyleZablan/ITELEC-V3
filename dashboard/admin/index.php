<?php
    require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if(!$admin->isUserLoggedIn())
{
    $admin->redirect('../../');
}


$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="../../src/css/style.css">
</head>
<body class="body2">

    <div class="container cont">
        <div class="box2">
        <h1>WELCOME! <?php echo $user_data['email']?></h1>
        <div class="btn3">
      <button><a href="authentication/admin-class.php?admin_signout">Sign Out</a></button>
      </div>
    </div>
    </div>

</body>
</html>