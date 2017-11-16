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
                            Buscar Cursos
                        </h1>
                    </div>
                </div><br><br><br>
                <!-- /.row -->
                

                
                <div class="row">
                    <center><img src="cigs.png" style="width:200px; height:auto;"></center>
                    <div class="col-lg-6 col-lg-offset-3">
                    <form role="form" action="resultado.php" method="get">
                        <div class="form-group input-group" style="padding-top:50px;"> 
                            <input type="text" class="form-control" placeholder="Busque por nome do guerra, matrícula, identidade, ou trigrama" name="campo">
                            <span class="input-group-btn"><button class="btn btn-default" type="submit" name="buscar"><i class="fa fa-search">
                                </i></button></span>
                        </div>
                        
                    </form>
                    </div>
                </div>
                
                <div class="scrollContainer">
                    
                    <center>
                        <table class="table table-condensed" id="mytable">
                        
                            <thead>
                                <tr>
                                    <th>Identificação</th>
                                    <th>Abreviatura</th>
                                    <th>Nome</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
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
                      
                </div> <br />
                
                 <div class="row">
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-5">
                                <a href="mostrarCurso.php" class="btn btn-primary" role="button">Visualizar</a>
                            </div>
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
