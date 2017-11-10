<!DOCTYPE html>



<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro</title>

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
        .format {
            padding-top:20px;
        }
    </style>
    <script>
        function acceptDateEmpty() {
            var date = document.getElementById("date");
            if (date.value == '') {
                date.value = "NULL";
            }
        }
    </script>
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
                <a class="navbar-brand" href="index.html">Sistema de Controle de Acesso</a>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user'];?> <b class="caret"></b></a>
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
                    <li class="active">
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
                    <li>
                        <a href="fichas.php"><i class="fa fa-fw fa-table"></i> Fichas</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-trash"></i> Excluir <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="excluirTitular.php">Titular</a>
                            </li>
                            <li>
                                <a href="excluirDependente.php">Dependente</a>
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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center>Cadastro Titular</center>
                        </h1>
                    </div>
                </div><br>
                <!-- /.row -->
                
                <?php 
                    include_once 'database.php';
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

                    if (isset($_POST['cadastroTitular'])) {

                        $dao = new Database();
                        $dao->uploadPhoto($_FILES["fileToUpload"]["name"], $_FILES["fileToUpload"]["tmp_name"]);
                        $sql = "insert into titular (dataInscricao, validade, tipoPermissao, posto, nome, identidade, orgaoExpedidor, 
                            dataExpedicao, tipo, estadoCivil, cpf, nascimento, telResidencial, celular, email, empresa, cargo, telComercial) 
                            values ('$dataInscricao', '$validade', '$tipoPermissao', '$posto', '$nome', '$idt', '$orgaoExpedidor', 
                                    '$dataExpedicao', '$tipo', '$estadoCivil', '$cpf', '$nasc', '$telResidencial', '$celular', '$email', 
                                    '$empresa', '$cargo', '$telComercial');";
                        $sql = str_replace("''", "NULL", $sql);
                        if ($dao->query($sql)) 
                            $id = mysqli_insert_id($dao->link);
//                            echo "<script>getElementById('nrInscricao').innerHTML = " . $id + 1 . ";</script>";
                            $sqlEndereco = "insert into endereco (cod, numero, complemento, bairro, cidade, uf) values ('$id', '$numero', 
                                '$complemento', '$bairro', '$cidade', '$uf');";
                            $dao->query($sqlEndereco);
                    }
                ?>    

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                            <aside class="col-lg-2">
                                <img width="120px" class="img-rounded" src="fotos/.jpg">
                                <input type="file" name="fileToUpload" id="fileToUpload" style="">
                            </aside>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Nº Inscrição</label>
                                <input class="form-control" type="text" name="nrInscricao" id="nrInscricao" readonly>
                            </div>
                            <div class="col-lg-2">
                                <label>Data Inscrição</label>
                                <input class="form-control" type="date" name="dataInscricao" value="<?php echo date("Y-m-d");?>" readonly>
                            </div>
                            <div class="col-lg-2">
                                <label>Validade</label>
                                <input class="form-control" type="date" name="validade" id="date">
                            </div>
                                <div class="col-lg-2">
                                <label>Tipo de Permissão</label>
                                <input class="form-control" type="text" name="tipoPermissao">
                            </div>
                            <div class="col-lg-2">
                                <label>Posto/Graduação</label>
                                <input class="form-control" type="text" name="posto">
                            </div>
                        
                            <div class="col-lg-2 format">
                                <label>Identidade</label>
                                <input class="form-control" type="text" name="idt">
                            </div>
                            <div class="col-lg-2 format">
                                <label>Órgão Expedidor</label>
                                <input class="form-control" type="text" name="orgaoExpedidor">
                            </div>
                            <div class="col-lg-2 format">
                                <label>Data Expedição</label>
                                <input class="form-control" type="date" name="dataExpedicao">
                            </div>
                            <div class="col-lg-2 format">
                                    <label>Tipo</label><br>
                                <label class="radio-inline">
                                    <input type="radio" value="1" <?php if (isset($tipo) && $tipo == "Militar") echo "checked";?> name="tipo">Militar
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="2" <?php if (isset($tipo) && $tipo == "Civil") echo "checked";?> name="tipo">Civil
                                </label>
                            </div>
                            <div class="col-lg-2 format">
                                <label>Nascimento</label>
                                <input class="form-control" type="date" name="dataNascimento">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-6">
                                <label>Nome do Titular</label>
                                <input class="form-control" type="text" name="nome">
                            </div>
                            <div class="col-lg-2">
                                <label>Estado Civil</label>
                                <input class="form-control" type="text" name="estadoCivil">
                            </div>
                            <div class="col-lg-2">
                                <label>CPF</label>
                                <input class="form-control" type="text" name="cpf">
                            </div>
                            <div class="col-lg-2">
                                <label>Tel Residencial</label>
                                <input class="form-control" type="text" name="telResidencial">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Celular</label>
                                <input class="form-control" type="text" name="celular">
                            </div>
                            <div class="col-lg-4">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email">
                            </div>
                            <div class="col-lg-2">
                                <label>Empresa/OM</label>
                                <input class="form-control" type="text" name="empresa">
                            </div>
                            <div class="col-lg-2">
                                <label>Cargo/Função</label>
                                <input class="form-control" type="text" name="cargo">
                            </div>
                            <div class="col-lg-2">
                                <label>Tel Comercial</label>
                                <input class="form-control" type="text" name="telComercial">
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Endereço</label><br>
                        </div><br><br>
                        <div class="form-group">
                            <div class="col-lg-1">
                                <label>Numero</label>
                                <input class="form-control" type="text" name="numero">
                            </div>
                            <div class="col-lg-4">
                                <label>Complemento</label>
                                <input class="form-control" type="text" name="complemento">
                            </div>
                            <div class="col-lg-3">
                                <label>Bairro</label>
                                <input class="form-control" type="text" name="bairro">
                            </div>
                            <div class="col-lg-2">
                                <label>Cidade</label>
                                <input class="form-control" type="text" name="cidade">
                            </div>
                            <div class="col-lg-2">
                                <label>UF</label>
                                <input class="form-control" type="text" name="uf">
                            </div>
                        </div>
                    </div><br>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-12 col-lg-offset-5">
                                <button type="reset" class="btn btn-default">Cancelar</button>
                                <button type="submit" name="cadastroTitular" class="btn btn-success">Enviar</button>
                            </div>
                        </div>
                    </div>

                </form>
                            
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
