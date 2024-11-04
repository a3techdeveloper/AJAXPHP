<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Integrando com Ajax - MySQL</title>
    </head>
    <body style="text-align: center">
        <h1>Projeto PHP - Ajax - MySQL</h1>
        <h2>Cadastro</h2>
        <hr>
        <a href="read.php"><button>Consulta</button></a>
        <hr>
        
        <form method="post">
            <input type="text" name="nome" id="nome" placeholder="Digite o nome:"> <br><br>
            <input type="email" name="email" id="email" placeholder="Digite o email:"> <br><br>
            <input type="submit" id="btn_gravar" value="Salvar">
        </form> <br>
        <div id="resposta"></div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>