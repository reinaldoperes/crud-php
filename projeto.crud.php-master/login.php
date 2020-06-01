<html lang="pt-br">
    <head>
        <link rel="icon" 
              type="image/png" 
              href="img/icon.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style type="text/css">
            .carousel-caption{
                font-size: 2vw;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="background-color: #c4c2c0">
        <div class="container" style="background-color: #646366; min-height: 100px; width: 1440px"> <!-- topo da pagina -->
            <h1 align="center" style="color: white">CRUD</h1>
        </div> <!-- fim da pagina -->

        <div class="container-fluid">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">Principal</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                           
                            <li><a href="empresa.php">Empresa</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div> <!-- /fim menu da pagina -->
        <div class="container-fluid">
            <div class="col-sm-4-1 col-xs-4-1 col-md-4 col-lg-4">
            </div>
            <div class="col-sm-4-1 col-xs-4-1 col-md-4 col-lg-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Efetue o login para continuar</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" placeholder="Informe corretamente seu e-mail" id="input" class="form-control" value="" required="required" title="">
                                </div>
                            </div>
                        </div><br/>	
                        <div class="row">
                            <div class="form-group">
                                <label for="input" class="col-sm-2 control-label">Senha</label>
                                <div class="col-sm-10">
                                    <input type="password" name="senha" placeholder="Informe a senha do mala" id="input" class="form-control" value="" required="required" title="">
                                </div>
                            </div>
                        </div><br/>	
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-warning">Logar no sistema</button>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
                <div class="col-sm-4-1 col-xs-4-1 col-md-4 col-lg-4">
                </div>
            </div>
        </div>
        <div class="container-fluid">

        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>