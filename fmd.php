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
                            <div class="col-lg-2">
                                <label>Posto/Graduação</label>
                                <input class="form-control" type="text" name="posto">
                            </div>     
                            <div class="col-lg-4">
                                <label>Nome</label>
                                <input class="form-control" type="text" name="nome">
                            </div>     
                            
                            
                        </div>
                    </div>
                </form>    
                
                <div class="scrollContainer">
                    
                    <center>
                        <table class="table table-condensed" id="mytable">
                        
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Data</th>
                                    <th>Médico</th>
                                </tr>
                            </thead>

                            <tbody>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td>0102023</td>
                                <td>14355564567</td>
                               
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td>0102023</td>
                                <td>14355564567</td>
                                
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td>0102023</td>
                                <td>14355564567</td>
                                
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td>0102023</td>
                                <td>14355564567</td>
                                
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td>0102023</td>
                                <td>14355564567</td>
                               
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td>0102023</td>
                                <td>14355564567</td>
                                
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td class="matricula">0102023</td>
                                <td>14355564567</td>
                               
                              </tr>
                              <tr class="text_data selected_grey">
                                <td>John</td>
                                <td class="matricula">0102023</td>
                                <td>14355564567</td>
                               
                              </tr>

                            </tbody>
                      </table>
                    </center>
                    
                </div>
                
                <div class="row"> 
			      <div class="col-lg-8 col-lg-offset-3">
			        <a href="mostrarMedico.php" class="btn btn-primary" role="button">Visualizar</a>
			        <a href="dadoMedico.php" class="btn btn-success" role="button">Nova FMD</a>
			      </div>
			    </div>

            </div>

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
