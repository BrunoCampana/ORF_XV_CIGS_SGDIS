<?php
$link = mysqli_connect("localhost", "root", "root", "ccfexBeta");
if (!$link) {
    echo "Erro ao conectar! " . mysqli_error($link);
    exit;
}

mysqli_set_charset($link, "utf8");

if (isset($_GET['buscar']) || $_GET['campo'] != "") {
$headTitular = "<thead>
                    <th>Nome</th>
                    <th><center>Inscrição</center></th>
                    <th><center>Atualizar</center></th>
                    <th><center>Excluir</center></th>
                    <th><center>Dependente</center></th>
                 </thead>";

$headDependente = "<thead>
                    <th>Nome</th>
                    <th>Titular</th>
                    <th>Atualizar</th>
                    <th>Excluir</th>
                </thead>";
   // if ($_POST['filtro'] == 1) {
        $campo = $_GET['campo'];
        $sql = "select * from titular where nome like '%$campo%' or identidade='$campo' or cpf='$campo';";
    //}
    
    $result = mysqli_query($link, $sql);
    
    if ($result) {

//        if ($_POST['filtro'] != 3) {
            echo "<table class=\"table table-hover table-striped\">" . $headTitular . "<tbody>";
            while($row = mysqli_fetch_assoc($result)) {
                $sql1 = "select * from endereco where cod=" . $row['cod'] . ";";
                $result1 = mysqli_query($link, $sql1);
                $row1 = mysqli_fetch_assoc($result1);
                echo "<tr id=\"" . $row['cod'] . "\">
                    <td><a href=\"fichas.php?cod=" . $row['cod'] . "\">" . $row['nome'] . "</a></td>
                    <td><center>" . $row['cod'] . "</center></td>
                    <td>
                        <form action=\"atualizarTitular.php\" method=\"post\">
                            <input type=\"hidden\" name=\"cod\" value=\"" . $row['cod'] ."\">
                            <input type=\"hidden\" name=\"dataInscricao\" value=\"" . $row['dataInscricao'] ."\">
                            <input type=\"hidden\" name=\"validade\" value=\"" . $row['validade'] ."\">
                            <input type=\"hidden\" name=\"tipoPermissao\" value=\"" . $row['tipoPermissao'] ."\">
                            <input type=\"hidden\" name=\"posto\" value=\"" . $row['posto'] ."\">
                            <input type=\"hidden\" name=\"nome\" value=\"" . $row['nome'] ."\">
                            <input type=\"hidden\" name=\"identidade\" value=\"" . $row['identidade'] ."\">
                            <input type=\"hidden\" name=\"orgaoExpedidor\" value=\"" . $row['orgaoExpedidor'] ."\">
                            <input type=\"hidden\" name=\"dataExpedicao\" value=\"" . $row['dataExpedicao'] ."\">
                            <input type=\"hidden\" name=\"tipo\" value=\"" . $row['tipo'] ."\">
                            <input type=\"hidden\" name=\"estadoCivil\" value=\"" . $row['estadoCivil'] ."\">
                            <input type=\"hidden\" name=\"cpf\" value=\"" . $row['cpf'] ."\">
                            <input type=\"hidden\" name=\"nascimento\" value=\"" . $row['nascimento'] ."\">
                            <input type=\"hidden\" name=\"telResidencial\" value=\"" . $row['telResidencial'] ."\">
                            <input type=\"hidden\" name=\"celular\" value=\"" . $row['celular'] ."\">
                            <input type=\"hidden\" name=\"email\" value=\"" . $row['email'] ."\">
                            <input type=\"hidden\" name=\"empresa\" value=\"" . $row['empresa'] ."\">
                            <input type=\"hidden\" name=\"cargo\" value=\"" . $row['cargo'] ."\">
                            <input type=\"hidden\" name=\"telComercial\" value=\"" . $row['telComercial'] ."\">
                            <input type=\"hidden\" name=\"numero\" value=\"" . $row1['numero'] ."\">
                            <input type=\"hidden\" name=\"complemento\" value=\"" . $row1['complemento'] ."\">
                            <input type=\"hidden\" name=\"bairro\" value=\"" . $row1['bairro'] ."\">
                            <input type=\"hidden\" name=\"cidade\" value=\"" . $row1['cidade'] ."\">
                            <input type=\"hidden\" name=\"uf\" value=\"" . $row1['uf'] ."\">
                            <center><button class=\"btn btn-success btn-sm\" type=\"submit\" name=\"atualizarTitular\">
                                <span class=\"glyphicon glyphicon-pencil\"></span>
                            </button></center>
                        </form>
                    </td>
                    <td>
                        <form action=\"" /*.  htmlspecialchars($_SERVER['PHP_SELF']) .*/ . "\" method=\"post\">
                            <input type=\"hidden\" name=\"cod\" value=\"" . $row['cod'] . "\">
                            <center><button class=\"btn btn-success btn-sm\" type=\"submit\" name=\"deletarTitular\" onclick=\"document.getElementById('" . $row['cod'] . "').style.visibility='hidden'\">
                                <span class=\"glyphicon glyphicon-trash\"></span>
                            </button></center>
                        </form>
                    </td>
                    <td>
                        <form action=\"cadastroDependente.php\" method=\"post\">
                            <input type=\"hidden\" name=\"campo\" value=\"" . $campo . "\">
                            <input type=\"hidden\" name=\"cod\" value=\"" . $row['cod'] . "\">
                            <center><button class=\"btn btn-success btn-sm\" type=\"submit\" name=\"cadastroDependente\">
                                <span class=\"glyphicon glyphicon-plus\"></span>
                            </button></center>
                        </form>
                        </td></tr>";
            }
            echo "</tbody></table>";
  //      }
    }
}
?>

