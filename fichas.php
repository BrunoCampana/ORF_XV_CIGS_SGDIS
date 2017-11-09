<!DOCTYPE html>

<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.html");
    }
?>

<html lang="pt-br">

<head>

    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fichas</title>

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

    <style>
        .campo {
            font-weight: bold;
            text-align: left;
            
        }
        .valor {
            text-align: left;
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistema de Controle de Acesso</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION['user'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-search"></i> Buscar</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i> Cadastrar <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="cadastroTitular.php">Titular</a>
                            </li>
                            <li>
                                <a href="cadastroDependente.php">Dependente</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-wrench"></i> Atualizar <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="atualizarTitular.php">Titular</a>
                            </li>
                            <li>
                                <a href="atualizarDependente.php">Dependente</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="fichas.php"><i class="fa fa-fw fa-table"></i> Fichas</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-trash"></i> Excluir <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="excluirTitular">Titular</a>
                            </li>
                            <li>
                                <a href="excluirDependete">Dependente</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-file"></i> Relatórios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="#">Inadimplentes</a>
                            </li>
                            <li>
                                <a href="#">Proibidos</a>
                            </li>
                            <li>
                                <a href="#">Mais algum aqui</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get">
                        <div class="form-group input-group" style="padding-top:50px;"> 
                            <input type="text" class="form-control" name="cod" placeholder="Busque por número de inscrição...">
                            <span class="input-group-btn"><button class="btn btn-default" name="buscar" type="button"><i class="fa fa-search">
                                </i></button></span>
                        </div>
                        <div class="form-group"><center>
                            <label class="radio-inline">
                                <input type="radio" name="filtro" value="1"> Titular
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="filtro" value="2"> Dependente
                            </label>
                        </div>
                    </form>
                    </div><br>
                    <div class="col-lg-12 well" style="border-top: 1px solid #eee;">
                        <!--center><img class="img-rounded" width="150px" src="<?php //echo "fotos/" . $_GET['cod'] . ".jpg";?>"></center><br-->
<?php
$link = mysqli_connect("localhost", "root", "root", "ccfexBeta");
if (!$link) {
    echo "Erro ao conectar! " . mysqli_error($link);
}

mysqli_set_charset($link, "utf8");

$cod = $_GET['cod'];


$sql = "select * from titular t, endereco e  where t.cod = '$cod' and e.cod = '$cod';";

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

echo '<table class="table table-bordered table-hover table-striped">
        <tr>
<td rowspan="4"><center><img class="img-rounded" width="150px" src="fotos/' . $cod . '.jpg"></center></td>      
            <td class="campo"> N° Inscrição</td>
            <td class="campo"> Validade</td>
            <td class="campo"> Tipo de Permissão</td>
            <td class="campo"> Posto/Graduação</td>
        </tr>
        <tr>
            <td class="valor">' . $row['cod'] . '</td>
            <td class="valor">' . $row['validade'] . '</td>
            <td class="valor">' . $row['tipoPermissao'] . '</td>
            <td class="valor">' . $row['posto'] . '</td>
        </tr>
        <tr>      
            <td class="campo" colspan="3"> Nome</td>
            <td class="campo"> Tipo</td>
        </tr>
        <tr>
            <td class="valor" colspan="3">' . $row['nome'] . '</td>
            <td class="valor">' . $row['tipo'] . '</td>
        </tr>
        <tr>      
            <td class="campo"> Identidade</td>
            <td class="campo"> Órgão Expedidor</td>
            <td class="campo"> Data Expedição</td>
            <td class="campo"> CPF</td>
            <td class="campo"> Data Nascimento</td>
        </tr>
        <tr>
            <td class="valor">' . $row['identidade'] . '</td>
            <td class="valor">' . $row['orgaoExpedidor'] . '</td>
            <td class="valor">' . $row['dataExpedicao'] . '</td>
            <td class="valor">' . $row['cpf'] . '</td>
            <td class="valor">' . $row['nascimento'] . '</td>
        </tr>
        <tr>      
            <td class="campo"> Estado Civil</td>
            <td class="campo"> Tel Residencial</td>
            <td class="campo"> Tel Celular</td>
            <td class="campo"> Empresa/OM</td>
            <td class="campo"> Cargo Função</td>
        </tr>
        <tr>
            <td class="valor">' . $row['estadocivil'] . '</td>
            <td class="valor">' . $row['telresidencial'] . '</td>
            <td class="valor">' . $row['celular'] . '</td>
            <td class="valor">' . $row['empresa'] . '</td>
            <td class="valor">' . $row['cargo'] . '</td>
        </tr>
        <tr>      
            <td class="campo"> Tel Comercial</td>
        </tr>
        <tr>
            <td class="valor">' . $row['telComercial'] . '</td>
        </tr>
        <tr><td class="campo" colspan="5">Endereço Residencial</td></tr>
        <tr>      
            <td class="campo"> Numero</td>
            <td class="campo"> Complemento</td>
            <td class="campo"> Bairro</td>
            <td class="campo"> CEP</td>
            <td class="campo"> Cidade</td>
        </tr>
        <tr>
            <td class="valor">' . $row['numero'] . '</td>
            <td class="valor">' . $row['complemento'] . '</td>
            <td class="valor">' . $row['bairro'] . '</td>
            <td class="valor">' . $row['cep'] . '</td>
            <td class="valor">' . $row['cidade'] . '</td>
        </tr>
        <tr>      
            <td class="campo"> UF</td>
            <td class="campo" colspan="4"> Email</td>
        </tr>
        <tr>
            <td class="valor">' . $row['uf'] . '</td>
            <td class="valor" colspan="4">' . $row['email'] . '</td>
        </tr>

    </table>';
 


?>

                    </div>
                </div>

            </div>

        </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
