<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    
    <script src="js/jquery.js"></script>
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

</head>

<body>

	<!-- DashBoard -->
	<script src="js/common.js"></script>

        <div id="page-wrapper">

            <div class="container-fluid">

              <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Relatório de Lançamentos de FO por Instrutor e Monitor - RLFOIM
                        </h1>
                    </div>
                </div><br>
                <!-- /.row -->
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Turma</label>
                                <select class="form-control" name="turno" readonly>
                                   <option value=""></option>
                                   <option value="A">17/1</option>
                                   <option value="B">16/2</option> 
                                   <option value="C">16/1</option>
                                </select> 
                            </div>
                            <div class="col-lg-4">
                                <label>Curso/Estágio</label>
                                <input class="form-control" type="text" name="nc" readonly>
                            </div>
                             <div class="col-lg-2">
                                <label>Turno</label>
                                <input class="form-control" type="text" name="nc" readonly>
                            </div>
                             <div class="col-lg-2">
                                <label>Ano</label>
                                <input class="form-control" type="text" name="mat" readonly>
                            </div>     
                            <div class="col-lg-2">
                                <label>Data</label>
                                <input class="form-control" type="date" name="posto" readonly>
                            </div>     
                        </div>
                    </div>
                </form><br/>
                    
                    <fieldset>
                        
                        <legend>Descrição do Fato Observado</legend>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <label>Trigrama</label>
                                        <input class="form-control" type="text" name="num" size="3" maxlength="3" readonly>
                                    </div>

                                     <div class="col-lg-2">
                                        <label>Número Aluno</label>
                                        <input class="form-control" type="text"  name="data" readonly>
                                    </div>
                                    <div class="col-lg-2">
                                        <label>Data do Fato</label>
                                        <input class="form-control" type="date" name="num" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8 format">
                                        <label>Descrição</label>
                                        <input class="form-control" type="text" readonly>
                                    </div>                         
                                </div>
                            </div><br/>
                        
                    </fieldset> 
                
                 <div class="row">
                      <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-5">
                              <a href="cadastroPessoal.php" class="btn btn-info" role="button">Editar</a>
                          </div>
                      </div>
                  </div>
                
                </div> <br/><br/>

            </div> 

    <!-- jQuery -->
   

    <script src="js/selectTable.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
