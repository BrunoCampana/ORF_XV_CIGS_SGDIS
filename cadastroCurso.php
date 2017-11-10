<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <title>Cadastro de Curso</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="css/scrollTable.css" rel="stylesheet">

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
                    $ni = $_POST['ni'];
                    $nc = $_POST['nc'];
                    $da = $_POST['da'];
                    $turno = $_POST['turno'];
                    $abreviatura = $_POST['abreviatura'];

                    if (isset($_POST['cadastroCurso'])) {
                    
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
                                <label>Nome do Curso</label>
                                <input class="form-control" type="text" name="nc">
                            </div>
                        </div>
                    </div> <br/>
                    
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                                <label>Data de Criação</label>
                                <input class="form-control" type="date" name="da" value="<?php echo date("Y-m-d");?>" >
                            </div>
                            <div class="col-lg-4">
                                <label>Turno</label>
                                <select class="form-control" name="turno">
                                   <option value=""></option>
                                   <option value="A">A - Oficiais Superiores</option>
                                   <option value="B">B - Oficiais Subalternos</option> 
                                   <option value="C">C - Subtenentes e Sargentos</option>
                                </select> 
                            </div>  
                            <div class="col-lg-2">
                                <label>Abreviatura</label>
                                <input class="form-control" type="text" max="6" name="abreviatura" placeholder="ABC">
                            </div>
                        </div>
                    </div>
                </fieldset>
                
                <br/> <br/>
                
                <fieldset>
                   <legend>Disciplinas</legend>
                   
                   <!-- TAG COM A CAIXA DAS DISCIPLINAS, RESULTADO DE CONSULTA -->
                   <div class="scrollContainer"> 
                    <center>
                        <table class="table table-condensed" id="disciplinas">
                            <thead>
                                <tr>
                                    <th>Nome da Discipina</th>
                                </tr>
                            </thead>
                            <tbody>
                              <tr class="text_data selected_grey">
                                <td>Assalto na Selva 1</td>
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>Camuflagem 2</td>
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>Operação de Viatura em Mata Fechada 3</td>
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>Emboscada no Chão 3</td>
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>Emboscada na Árvore 2</td>
                              </tr>
                            </tbody>
                      </table>
                    </center>
                </div>
                   
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-4">
                                <button type="button" class="btn btn-success" name="adicionar" onclick="adicionarDisciplina()">Adicionar</button>
                                <!-- Colocar Atitudes é Modal -->
                                <button type="button" class="btn btn-warning" name="atitudes" data-toggle="modal" data-target="#modalCA">Colocar Atitudes</button>
								   <div class="modal fade" id="modalCA" role="dialog">
									  <div class="modal-dialog">
                                        <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									         <h4 class="modal-title">Atitudes</h4>
										  </div>
										  <div class="modal-body">
											<p>Some text in the modal.</p>
										  </div>
										  <div class="modal-footer">
										    <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
									      </div>
									    </div>
									  </div>
									</div>
			                    <button type="button" class="btn btn-danger" name="excluir" onclick="excluirDisciplina()">Excluir</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
                
                    <br/> <br/>
                    
                    <legend> </legend>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-4">
                                <button type="reset" class="btn btn-default">Limpar</button>
                                <button type="submit" name="cadastroCurso" class="btn btn-success">Salvar</button>
                                <a href="mostrarCurso.php" class="btn btn-info" role="button">Saír Edição</a>
                            </div>
                        </div>
                    </div>

                </form>
                
                <br/> <br/>
                
                <!-- Apenas para Validação!! -->
                <label id="validacaoDisciplina"></label>            
            </div>

        </div>
        
    <!-- Tabela gerada pós consulta -->
    <script src="js/selectTable.js"></script>
    
    <!-- Funções de Botões -->
    <script src="js/botoes.js" type="text/javascript"></script>s

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
