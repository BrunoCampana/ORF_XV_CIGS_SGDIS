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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Ficha Médica do Discente - FMD
                        </h1>
                    </div>
                </div><br><br><br>
                <!-- /.row -->
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                            <aside class="col-lg-2">
                                <img width="120px" class="img-rounded" src="fotos/.jpg">
                                <input type="file" name="fileToUpload" id="fileToUpload" style="">
                            </aside>
                        <div class="form-group">
                            <div class="col-lg-6">
                                <label>Nome do Curso</label>
                                <input class="form-control" type="text" name="nc">
                            </div>
                             <div class="col-lg-2">
                                <label>Turno</label>
                                <select class="form-control" name="turno">
                                   <option value=""></option>
                                   <option value="A">A - Oficiais Superiores</option>
                                   <option value="B">B - Oficiais Subalternos</option> 
                                   <option value="C">C - Subtenentes e Sargentos</option>
                                </select> 
                            </div>
                             <div class="col-lg-2">
                                <label>Matrícula</label>
                                <input class="form-control" type="text" name="mat">
                            </div>        
                        </div>
                    </div><br/>
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <input class="form-control" type="hidden">
                            </div>     
                            
                            <div class="col-lg-2">
                                <label>Posto/Graduação</label>
                                <input class="form-control" type="text" name="posto">
                            </div>     
                            <div class="col-lg-4">
                                <label>Nome</label>
                                <input class="form-control" type="text" name="nome">
                            </div> 
                        </div>
                    </div><br/>
                    
                    <fieldset>
                        
                        <legend>Dados da Consulta Médica</legend>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-2">
                                        <label>Número</label>
                                        <input class="form-control" type="text" name="num">
                                    </div>

                                     <div class="col-lg-2">
                                        <label>Data da Consulta</label>
                                        <input class="form-control" type="date" id="date" name="data">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Médico (Posto e Nome de Guerra)</label>
                                        <input class="form-control" type="text" name="num">
                                    </div>
                                    
                                    <div class="col-lg-5">
                                        <label>Observações</label>
                                        <input class="form-control" type="text">
                                    </div>     
                                                    
                                </div>
                            </div><br/>
                        
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-6">
                                        <label>Diagnóstico</label>
                                         <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Prescrições</label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div><br/>                    
                    </fieldset>
                    
                            <div class="col-lg-10 col-lg-offset-4">
                                    <button type="reset" class="btn btn-default" name="lFO">Limpar</button>
                                    <button type="submit" class="btn btn-success" name="aFO">Adicionar</button>
                            </div>
                            
                </form>
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
