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

    <script src="js/common.js"></script>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center>Cadastro de Curso</center>
                        </h1>
                    </div>
                </div><br>
                <!-- /.row -->
                
                <?php 
                    include_once 'database.php';
                    $cod = $_POST['cod'];
                    $matricula = $_POST['matricula'];
                    $da = $_POST['da'];
                    $ng = $_POST['ng'];
                    $trigrama = $_POST['trigrama'];
                    $aqs = $_POST['aqs'];
                    $pg = $_POST['pg'];
                    $forca = $_POST['forca'];
                    $po = $_POST['po'];
                    $cf = $_POST['cf'];
                    $omo = $_POST['omo'];
                    $rm = $_POST['rm'];
                    
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $dn = $_POST['dn'];
                    $ec = $_POST['ec'];
                    $naturalidade = $_POST['naturalidade'];
                    $nacionalidade = $_POST['nacionalidade'];
                    $cpf = $_POST['cpf'];
                    $rg = $_POST['rg'];
                    $oe = $_POST['oe'];
                    $de = $_POST['de'];
                    $im = $_POST['im'];
                    $preccp = $_POST['preccp'];
                    $te = $_POST['te'];
                    $zona = $_POST['zona'];
                    $secao = $_POST['secao'];
                    $pai = $_POST['pai'];
                    $mae = $_POST['mae'];

                    $rua = $_POST['rua'];
                    $numero = $_POST['numero'];
                    $complemento = $_POST['complemento'];
                    $bairro = $_POST['bairro'];
                    $cidade = $_POST['cidade'];
                    $uf = $_POST['uf'];

                    if (isset($_POST['cadastroPessoal'])) {
                    
                    // Para Back-End
                    /*
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
                            */
                    }
                ?>    

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                            <aside class="col-lg-2">
                                <img width="120px" class="img-rounded" src="fotos/.jpg">
                                <input type="file" name="fileToUpload" id="fileToUpload" style="">
                            </aside>
                    </div> <br>
                    
                 <fieldset>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Nº de Identificação</label>
                                <input class="form-control" type="text" name="ni" id="nrInscricao" readonly>
                            </div>
                            <div class="col-lg-8">
                                <label>Denominação do Curso</label>
                                <input class="form-control" type="text" name="dc">
                            </div>
                        </div>
                    </div> <br/>
                    
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                                <label>Data de Início</label>
                                <input class="form-control" type="date" name="da" value="<?php echo date("Y-m-d");?>" >
                            </div>
                            <div class="col-lg-4">
                                <label>Data de Término</label>
                                <input class="form-control" type="date" name="dt" value="<?php echo date("Y-m-d");?>" >
                            </div>
                            <div class="col-lg-2">
                                <label>Abreviatura</label>
                                <input class="form-control" type="text" max="6" name="abreviatura" placeholder="ABC">
                            </div>
                        </div>
                    </div>                    
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4 format">
                                <label>Turno</label>
                                <select class="form-control" name="turno">
                                   <option value=""></option>
                                   <option value="A">A - Oficiais Superiores</option>
                                   <option value="B">B - Oficiais Subalternos</option> 
                                   <option value="C">C - Subtenentes e Sargentos</option>
                                </select> 
                            </div>
                        	<div class="col-lg-4 format">
                                <label>Mês-Ano</label>
                                <input class="form-control" type="month" name="ma">
                            </div>
                        </div>  
                    </div>
                </fieldset>
                
                    <br/> <br/>
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-5">
                                <button type="reset" class="btn btn-default">Limpar</button>
                                <button type="submit" name="cadastroPessoal" class="btn btn-success">Salvar</button>
                                <a href="mostrarCurso.php" class="btn btn-info" role="button">Saír Edição</a>
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
