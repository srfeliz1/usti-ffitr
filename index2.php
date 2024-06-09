<?php
session_start();
if(!isset($_SESSION['login_user'])){
    header("location: login.php");
}
?>

<html>
<head>
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo <?php echo $_SESSION['login_user']; ?></h1>
    <h2><a href="logout.php">Sair</a></h2>
</body>
</html>
