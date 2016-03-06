<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagan Way</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">        

        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="/js/script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']; ?>/css/style.css">
    </head>

    <body>
        <!-- Start navbar -->
        <nav class="navbar navbar-default ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>                                        
                    <a class="navbar-brand" href="index.php" style="width: 220px">Pagan Way&nbsp;&nbsp;&nbsp;&nbsp;</a>                    
                </div>
                <div class="collapse navbar-collapse" id="topNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="example.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Vikings<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">                                
                                <li><a href="localhost/PaganWay/pages/vikingsCulture.php">History</a></li>
                                <li><a href="example.php">Some Facts</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Celtics<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">                                
                                <li><a href="/pages/celticHistory.php">History</a></li>
                                <li><a href="example.php">Some Facts</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Music<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">                                
                                <li><a href="genres.php">Genres</a></li>                                
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End navbar -->