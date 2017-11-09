<!DOCTYPE html>

<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.html");
    }
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mudar Senha</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<h1><center>Alterar Senha<center></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
Usuário: <input type="text" name="user">
Senha: <input type="password" name="passwd">
Nova Senha: <input type="password" name="newPasswd">
<input type="submit" name="mudarSenha">
</form>

<?php
    include 'database.php';
if (isset($_POST['mudarSenha'])) {
    $dao = new Database();
    $table = 'login';
    $filtro = $_SESSION['user'];
    $row = select($table, $filtro);
    if (strcmp(md5($_POST['passwd']), $row['passwd']) == 0) {
        $sql = "update login set passwd='" . $_POST['newPasswd'] . "' where user='" . $_SESSION['user'] .  "';";
        $dao->query($sql);
    } else {
        echo "<script>window.alert('Senha Incorreta!')</script>";
    }
}
?>



</body>

</html>
