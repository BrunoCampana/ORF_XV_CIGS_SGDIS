<?php
//Connection with database 'ccfex'
$link = mysqli_connect("localhost", "root", "root", "ccfexBeta");
if (!$link) {
    echo "Não foi possível conectar ao banco! ";
    exit;
}

echo "Conexão estabelecida!";

if (isset($_POST['submit'])) {
    $login = $_POST['user'];
    $senha = $_POST['passwd'];
    $senhaCripto = md5($senha);

    $sql = "select * from login where user = '$login' and passwd = '$senhaCripto';";
    $result = mysqli_query($link, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['passwd'] = $_POST['passwd'];
        header("Location: index.php");
    } else {
        header("Location: login.html");
    }
}
?>
