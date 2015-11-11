<!doctype html>
    <html lang="pt-br">

        <head>
            <title>BARCODE</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="./css/default.css" />
            
        </head>
        <body>
            <?php include("header.php");?>
            <header>
                <ul id="bars">
                    <li id="kd1"></li>
                    <li id="kd2"></li>
                    <li id="kd3"></li>
                    <li id="kd1"></li>
                    <li id="kd2"></li>
                    <li id="kd1"></li>
                    <li id="kd1"></li>
                    <li id="kd4"></li>
                    <li id="kd4"></li>
                    <li id="kd1"></li>
                    <li id="kd1"></li>
                    <li id="kd3"></li>
                    <li id="kd4"></li>
                    <li id="kd2"></li>
                    <li id="kd3"></li>
                    <li id="kd1"></li>
                    <li id="kd1"></li>
                </ul>
                <a href="./index.php" title="BARCODE" id="lnkBarCode">BARCODE</a>
                <nav id="menu">
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#" id="servicos">o que fazemos</a></li>
                        <li><a href="#" id="contatos">contatos</a></li>
                        <li><a href="#" id="login">log in</a></li>
                    </ul>
                </nav> 
            </header>
            <div id="servicosInfo" class="infobox">
                <h2>O que fazemos</h2>
                <a href="#" id="close">x</a>
                <h3>Manutenção de computadores</h3>
                <p>
                    Nós fazemos isso. Pelo que sabemos ao menos.
                </p>
            </div>
            <div id="contatosInfo" class="infobox">
                <h2>Contatos</h2>
                <a href="#" id="close">x</a>
                <h3>Pois não?</h3>
                <p>
                    contato@barcode.com
                </p>
            </div>
            <div id="mask"></div>
            <script src="./js/menuActions.js"></script>
        </body>
        
    </html>