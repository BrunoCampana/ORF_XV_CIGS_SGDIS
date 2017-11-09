<?php

$link = mysqli_connect("localhost", "root", "root", "ccfexBeta");

if (!$link) {
    echo "Erro ao conectar!" . mysqli_connect_error();
}

mysqli_set_charset($link, "utf8");

//Informações Titular/Dependente

$cod = $_POST['cod'];
$dataInscricao = $_POST['dataInscricao'];
$validade = $_POST['validade'];
$tipoPermissao = $_POST['tipoPermissao'];
$posto = $_POST['posto'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$idt = $_POST['idt'];
$orgaoExpedidor = $_POST['orgaoExpedidor'];
$dataExpedicao = $_POST['dataExpedicao'];
$tipo = $_POST['tipo'];
$estadoCivil = $_POST['estadoCivil'];
$telResidencial = $_POST['telResidencial'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$telComercial = $_POST['telComercial'];
$nasc = $_POST['dataNascimento'];
$profissao = $_POST['prof'];
$parentesco = $_POST['parentesco'];

//Endereço

$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

echo $cod;

if (isset($_POST['atualizarTitular'])) {
    $sqlAux = "update titular set validade='$validade', tipoPermissao='$tipoPermissao', posto='$posto', nome='$nome', identidade='$idt', 
            orgaoExpedidor='$orgaoExpedidor', dataExpedicao='$dataExpedicao', tipo='$tipo', estadoCivil='$estadoCivil', cpf='$cpf', 
            nascimento='$nasc', telResidencial='$telResidencial', celular='$celular', email='$email', empresa='$empresa', cargo='$cargo', 
            telComercial='$telComercial' where cod='$cod';";
    $sqlAux = str_replace("''", "NULL", $sqlAux);
    echo $sqlAux;
    if (mysqli_query($link, $sqlAux)) {
        $sql = "update endereco set numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', uf='$uf' 
                where cod='$cod';";
        echo $sql;
    } else {
        echo mysqli_error($link);
        exit;
    }    
} 

if (mysqli_query($link, $sql)) {
    echo "Sucesso!";
    header("Location: index.php");
} else {
    echo "Error: " . mysqli_error($link);
    //header("Location: ccfex/cadastroUsuario.php");
}
?>
