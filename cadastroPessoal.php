<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Pessoal</title>

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
                            <center>Cadastro de Pessoal</center>
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
                    $tipo = $_POST['tipo'];
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
                  <legend>Dados Situacionais</legend>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Matrícula</label>
                                <input class="form-control" type="text" name="matricula" id="nrInscricao" readonly>
                            </div>
                            <div class="col-lg-4">
                                <label>Data de Apresentação</label>
                                <input class="form-control" type="date" name="da" value="<?php echo date("Y-m-d");?>" >
                            </div>
                                <div class="col-lg-2">
                                <label>Nome de Guerra</label>
                                <input class="form-control" type="text" name="ng">
                            </div>
                            <div class="col-lg-2">
                                <label>Trigrama</label>
                                <input class="form-control" type="text" maxlength="3" name="trigrama" placeholder="ABC">
                            </div>
                        </div>
                    </div> <br/>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>A / Q / S</label>
                                <input class="form-control" type="text" name="aqs">
                            </div>
                            <div class="col-lg-2">
                                <label>P / G</label>
                                <input class="form-control" type="text" name="pg">
                            </div>
                            <div class="col-lg-2">
                                <label>Força</label>
                                <input class="form-control" type="text" name="forca">
                            </div>
                            <div class="form-group col-sm-4">
                               <label>País de Origem</label>
                               <select class="form-control" name="po">
                                 <option value=""></option>
                                 <option value="África do Sul">África do Sul</option>
                                 <option value="Albânia">Albânia</option>
                                 <option value="Alemanha">Alemanha</option>
                                 <option value="Andorra">Andorra</option>
                                 <option value="Angola">Angola</option>
                                 <option value="Anguilla">Anguilla</option>
                                 <option value="Antigua">Antigua</option>
                                 <option value="Arábia Saudita">Arábia Saudita</option>
                                 <option value="Argentina">Argentina</option>
                                 <option value="Armênia">Armênia</option>
                                 <option value="Aruba">Aruba</option>
                                 <option value="Austrália">Austrália</option>
                                 <option value="Áustria">Áustria</option>
                                 <option value="Azerbaijão">Azerbaijão</option>
                                 <option value="Bahamas">Bahamas</option>
                                 <option value="Bahrein">Bahrein</option>
                                 <option value="Bangladesh">Bangladesh</option>
                                 <option value="Barbados">Barbados</option>
                                 <option value="Bélgica">Bélgica</option>
                                 <option value="Benin">Benin</option>
                                 <option value="Bermudas">Bermudas</option>
                                 <option value="Botsuana">Botsuana</option>
                                 <option value="Brasil" selected>Brasil</option>
                                 <option value="Brunei">Brunei</option>
                                 <option value="Bulgária">Bulgária</option>
                                 <option value="Burkina Fasso">Burkina Fasso</option>
                                 <option value="botão">botão</option>
                                 <option value="Cabo Verde">Cabo Verde</option>
                                 <option value="Camarões">Camarões</option>
                                 <option value="Camboja">Camboja</option>
                                 <option value="Canadá">Canadá</option>
                                 <option value="Cazaquistão">Cazaquistão</option>
                                 <option value="Chade">Chade</option>
                                 <option value="Chile">Chile</option>
                                 <option value="China">China</option>
                                 <option value="Cidade do Vaticano">Cidade do Vaticano</option>
                                 <option value="Colômbia">Colômbia</option>
                                 <option value="Congo">Congo</option>
                                 <option value="Coréia do Sul">Coréia do Sul</option>
                                 <option value="Costa do Marfim">Costa do Marfim</option>
                                 <option value="Costa Rica">Costa Rica</option>
                                 <option value="Croácia">Croácia</option>
                                 <option value="Dinamarca">Dinamarca</option>
                                 <option value="Djibuti">Djibuti</option>
                                 <option value="Dominica">Dominica</option>
                                 <option value="EUA">EUA</option>
                                 <option value="Egito">Egito</option>
                                 <option value="El Salvador">El Salvador</option>
                                 <option value="Emirados Árabes">Emirados Árabes</option>
                                 <option value="Equador">Equador</option>
                                 <option value="Eritréia">Eritréia</option>
                                 <option value="Escócia">Escócia</option>
                                 <option value="Eslováquia">Eslováquia</option>
                                 <option value="Eslovênia">Eslovênia</option>
                                 <option value="Espanha">Espanha</option>
                                 <option value="Estônia">Estônia</option>
                                 <option value="Etiópia">Etiópia</option>
                                 <option value="Fiji">Fiji</option>
                                 <option value="Filipinas">Filipinas</option>
                                 <option value="Finlândia">Finlândia</option>
                                 <option value="França">França</option>
                                 <option value="Gabão">Gabão</option>
                                 <option value="Gâmbia">Gâmbia</option>
                                 <option value="Gana">Gana</option>
                                 <option value="Geórgia">Geórgia</option>
                                 <option value="Gibraltar">Gibraltar</option>
                                 <option value="Granada">Granada</option>
                                 <option value="Grécia">Grécia</option>
                                 <option value="Guadalupe">Guadalupe</option>
                                 <option value="Guam">Guam</option>
                                 <option value="Guatemala">Guatemala</option>
                                 <option value="Guiana">Guiana</option>
                                 <option value="Guiana Francesa">Guiana Francesa</option>
                                 <option value="Guiné-bissau">Guiné-bissau</option>
                                 <option value="Haiti">Haiti</option>
                                 <option value="Holanda">Holanda</option>
                                 <option value="Honduras">Honduras</option>
                                 <option value="Hong Kong">Hong Kong</option>
                                 <option value="Hungria">Hungria</option>
                                 <option value="Iêmen">Iêmen</option>
                                 <option value="Ilhas Cayman">Ilhas Cayman</option>
                                 <option value="Ilhas Cook">Ilhas Cook</option>
                                 <option value="Ilhas Curaçao">Ilhas Curaçao</option>
                                 <option value="Ilhas Marshall">Ilhas Marshall</option>
                                 <option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
                                 <option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
                                 <option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
                                 <option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
                                 <option value="Índia">Índia</option>
                                 <option value="Indonésia">Indonésia</option>
                                 <option value="Inglaterra">Inglaterra</option>
                                 <option value="Irlanda">Irlanda</option>
                                 <option value="Islândia">Islândia</option>
                                 <option value="Israel">Israel</option>
                                 <option value="Itália">Itália</option>
                                 <option value="Jamaica">Jamaica</option>
                                 <option value="Japão">Japão</option>
                                 <option value="Jordânia">Jordânia</option>
                                 <option value="Kuwait">Kuwait</option>
                                 <option value="Latvia">Latvia</option>
                                 <option value="Líbano">Líbano</option>
                                 <option value="Liechtenstein">Liechtenstein</option>
                                 <option value="Lituânia">Lituânia</option>
                                 <option value="Luxemburgo">Luxemburgo</option>
                                 <option value="Macau">Macau</option>
                                 <option value="Macedônia">Macedônia</option>
                                 <option value="Madagascar">Madagascar</option>
                                 <option value="Malásia">Malásia</option>
                                 <option value="Malaui">Malaui</option>
                                 <option value="Mali">Mali</option>
                                 <option value="Malta">Malta</option>
                                 <option value="Marrocos">Marrocos</option>
                                 <option value="Martinica">Martinica</option>
                                 <option value="Mauritânia">Mauritânia</option>
                                 <option value="Mauritius">Mauritius</option>
                                 <option value="México">México</option>
                                 <option value="Moldova">Moldova</option>
                                 <option value="Mônaco">Mônaco</option>
                                 <option value="Montserrat">Montserrat</option>
                                 <option value="Nepal">Nepal</option>
                                 <option value="Nicarágua">Nicarágua</option>
                                 <option value="Niger">Niger</option>
                                 <option value="Nigéria">Nigéria</option>
                                 <option value="Noruega">Noruega</option>
                                 <option value="Nova Caledônia">Nova Caledônia</option>
                                 <option value="Nova Zelândia">Nova Zelândia</option>
                                 <option value="Omã">Omã</option>
                                 <option value="Palau">Palau</option>
                                 <option value="Panamá">Panamá</option>
                                 <option value="Papua-nova Guiné">Papua-nova Guiné</option>
                                 <option value="Paquistão">Paquistão</option>
                                 <option value="Peru">Peru</option>
                                 <option value="Polinésia Francesa">Polinésia Francesa</option>
                                 <option value="Polônia">Polônia</option>
                                 <option value="Porto Rico">Porto Rico</option>
                                 <option value="Portugal">Portugal</option>
                                 <option value="Qatar">Qatar</option>
                                 <option value="Quênia">Quênia</option>
                                 <option value="Rep. Dominicana">Rep. Dominicana</option>
                                 <option value="Rep. Tcheca">Rep. Tcheca</option>
                                 <option value="Reunion">Reunion</option>
                                 <option value="Romênia">Romênia</option>
                                 <option value="Ruanda">Ruanda</option>
                                 <option value="Rússia">Rússia</option>
                                 <option value="Saipan">Saipan</option>
                                 <option value="Samoa Americana">Samoa Americana</option>
                                 <option value="Senegal">Senegal</option>
                                 <option value="Serra Leone">Serra Leone</option>
                                 <option value="Seychelles">Seychelles</option>
                                 <option value="Singapura">Singapura</option>
                                 <option value="Síria">Síria</option>
                                 <option value="Sri Lanka">Sri Lanka</option>
                                 <option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
                                 <option value="St. Lúcia">St. Lúcia</option>
                                 <option value="St. Vincent">St. Vincent</option>
                                 <option value="Sudão">Sudão</option>
                                 <option value="Suécia">Suécia</option>
                                 <option value="Suiça">Suiça</option>
                                 <option value="Suriname">Suriname</option>
                                 <option value="Tailândia">Tailândia</option>
                                 <option value="Taiwan">Taiwan</option>
                                 <option value="Tanzânia">Tanzânia</option>
                                 <option value="Togo">Togo</option>
                                 <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                 <option value="Tunísia">Tunísia</option>
                                 <option value="Turquia">Turquia</option>
                                 <option value="Ucrânia">Ucrânia</option>
                                 <option value="Uganda">Uganda</option>
                                 <option value="Uruguai">Uruguai</option>
                                 <option value="Venezuela">Venezuela</option>
                                 <option value="Vietnã">Vietnã</option>
                                 <option value="Zaire">Zaire</option>
                                 <option value="Zâmbia">Zâmbia</option>
                                 <option value="Zimbábue">Zimbábue</option>
                               </select>
                            </div>
                       </div>
                    </div> <br/>
                    <div class="row">
                        <div class="form-group">
                            <div class="form-group col-sm-2 format">
                               <label>Cargo / Função</label>
                               <select class="form-control" name="cf">
                                 <option value=""></option> 
                                 <option value="Aluno">Aluno</option> 
                                 <option value="Instrutor">Instrutor</option> 
                                 <option value="Monitor">Monitor</option> 
                                 <option value="Medico">Médico</option> 
                                 <option value="Tecnico">Técnico</option> 
                                 <option value="Fiscal">Fiscal</option> 
                                 <option value="Outros">Outro</option> 
                               </select>
                            </div>
                            <div class="col-lg-2 format">
                                <label>OM de Origem</label>
                                <input class="form-control" type="text" name="omo">
                            </div>
                        	<div class="form-group col-sm-3 format">
                               <label>RM</label>
                               <select class="form-control" name="rm">
                                 <option value=""></option>
                                 <option value="01"> 1ª - ES e RJ</option> 
                                 <option value="02"> 2ª - SP</option> 
                                 <option value="03"> 3ª - RS</option> 
                                 <option value="04"> 4ª - MG</option> 
                                 <option value="05"> 5ª - PR e SC</option> 
                                 <option value="06"> 6ª - BA e SE</option> 
                                 <option value="07"> 7ª - AL, PB, PE e RN</option> 
                                 <option value="08"> 8ª - AP, MA, PA e TO (Bico do Papagaio)</option>
                                 <option value="09"> 9ª - MS e MT</option> 
                                 <option value="10">10ª - CE e PI</option> 
                                 <option value="11">11ª - DF, GO, TO e MG (Triangulo Mineiro)</option> 
                                 <option value="12">12ª - AC, AM, RO e RR</option>  
                        	   </select>
                        	</div>
                        </div>  
                 </div>
                </div><br>
                </fieldset>
                <fieldset>
                  <legend>Dados Pessoais</legend>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                                <label>Nome Completo</label>
                                <input class="form-control" type="text" name="nome">
                            </div>
                            <div class="col-lg-2">
                                    <label>Gênero</label><br>
                                <label class="radio-inline">
                                    <input type="radio" value="M" <?php if (isset($tipo) && $tipo == "M") echo "checked";?> name="tipo">M
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="F" <?php if (isset($tipo) && $tipo == "F") echo "checked";?> name="tipo">F
                                </label>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>E-Mail</label>
                                <input class="form-control" type="email" name="email">
                            </div>
                            <div class="col-lg-4">
                                <label>Data de Nascimento</label>
                                <input class="form-control" type="date" name="dn">
                            </div>
                        </div>    
                    </div><br/>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Estado Civil</label>
                                <input class="form-control" type="text" name="ec">
                            </div>
                            <div class="col-lg-2">
                                <label>Naturalidade</label>
                                <input class="form-control" type="text" name="naturalidade">
                            </div>
                            <div class="col-lg-2">
                                <label>Nacionalidade</label>
                                <input class="form-control" type="text" name="nacionalidade">
                            </div>
                            <div class="col-lg-2">
                                <label>CPF</label>
                                <input class="form-control" type="text" name="cpf" size="11" maxlength="11" placeholder="só dígitos">
                            </div>
                        </div>
                    </div><br>
                 
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>RG</label>
                                <input class="form-control" type="number" min="0" step="1" name="rg" size="16" maxlength="16" placeholder="só dígitos">
                            </div>
                            <div class="col-lg-4">
                                <label>Órgão Expeditor</label>
                                <input class="form-control" type="text" name="oe">
                            </div>
                            <div class="col-lg-4">
                                <label>Data de Expedição</label>
                                <input class="form-control" type="date" name="de">
                            </div>
                        </div>
                    </div><br>
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <label>Id Mil</label>
                                <input class="form-control" type="number" min="0" step="1" name="im" size="16" maxlength="16" placeholder="só dígitos">
                            </div>
                            <div class="col-lg-2">
                                <label>PREC / CP</label>
                                <input class="form-control" type="number" min="0" step="1" name="preccp" size="9" maxlength="9" placeholder="só dígitos">
                            </div>
                        </div>
                    </div><br>
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                                <label>Título Eleitoral</label>
                                <input class="form-control" type="number" min="0" step="1" name="te" size="12" maxlength="12" placeholder="só dígitos">
                            </div>
                            <div class="col-lg-2">
                                <label>Zona</label>
                                <input class="form-control" type="number" min="0" step="1" name="zona">
                            </div>
                            <div class="col-lg-2">
                                <label>Seção</label>
                                <input class="form-control" type="number" min="0" step="1" name="secao">
                            </div>
                        </div>
                    </div><br>
                    
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                                <label>Filiação Paterna</label>
                                <input class="form-control" type="text" name="pai" >
                            </div>
                            <div class="col-lg-4">
                                <label>Filiação Materna</label>
                                <input class="form-control" type="text" name="mae" >
                            </div>
                        </div>
                    </div><br>
              </fieldset>
              <fieldset>
                  <legend>Dados de Endereço</legend>
                     <div class="form-group">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Rua</label>
                                <input class="form-control" type="text" name="rua">
                            </div>
                            <div class="col-lg-1">
                                <label>Numero</label>
                                <input class="form-control" type="number" min="0" step="1" name="numero">
                            </div>
                            <div class="col-lg-2">
                                <label>Complemento</label>
                                <input class="form-control" type="text" name="complemento">
                            </div>
                            <div class="col-lg-3">
                                <label>Bairro</label>
                                <input class="form-control" type="text" name="bairro">
                            </div>
                        </div><br/>
                        
                        <div class="row">
                            <div class="col-lg-2">
                                <label>Cidade</label>
                                <input class="form-control" type="text" name="cidade">
                            </div>
                            <div class="col-lg-2">
                               <label>UF</label>
                               <select class="form-control" name="uf">
                                 <option value=""></option>
                                 <option value="ac">Acre</option> 
                                 <option value="al">Alagoas</option> 
                                 <option value="am">Amazonas</option> 
                                 <option value="ap">Amapá</option> 
                                 <option value="ba">Bahia</option> 
                                 <option value="ce">Ceará</option> 
                                 <option value="df">Distrito Federal</option> 
                                 <option value="es">Espírito Santo</option> 
                                 <option value="go">Goiás</option> 
                                 <option value="ma">Maranhão</option> 
                                 <option value="mt">Mato Grosso</option> 
                                 <option value="ms">Mato Grosso do Sul</option> 
                                 <option value="mg">Minas Gerais</option> 
                                 <option value="pa">Pará</option> 
                                 <option value="pb">Paraíba</option> 
                                 <option value="pr">Paraná</option> 
                                 <option value="pe">Pernambuco</option> 
                                 <option value="pi">Piauí</option> 
                                 <option value="rj">Rio de Janeiro</option> 
                                 <option value="rn">Rio Grande do Norte</option> 
                                 <option value="ro">Rondônia</option> 
                                 <option value="rs">Rio Grande do Sul</option> 
                                 <option value="rr">Roraima</option> 
                                 <option value="sc">Santa Catarina</option> 
                                 <option value="se">Sergipe</option> 
                                 <option value="sp">São Paulo</option> 
                                 <option value="to">Tocantins</option> 
                        	   </select>
                            </div>
                        </div><br/>
                        
                    </div>
                </fieldset>
                    <br/>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-5">
                                <button type="reset" class="btn btn-default">Limpar</button>
                                <button type="submit" name="cadastroPessoal" class="btn btn-success">Salvar</button>
                                <a href="mostrarPessoal.php" class="btn btn-info" role="button">Saír Edição</a>
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
