<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="text-align: center">
        <h1>Projeto PHP - Ajax - MySQL</h1>
        <h2>Edição</h2>
        <?php
            include_once 'conecta.php';
            $id = filter_input(INPUT_GET, "id");
            
            $sql = "SELECT * FROM aluno WHERE id = '$id' ";
            $exec = $pdo->query($sql);
            $regAtualiza = $exec->fetch(PDO::FETCH_ASSOC);
        ?>
        <form method="post">
            <input type="hidden" name="id" id="id" value="<?= $regAtualiza["id"]?>"> <br><br>
            <label>Nome</label> <br>
            <input type="text" name="nome" id="nome" value="<?=$regAtualiza["nome"]?>"> <br><br>
            <label>Email</label> <br>
            <input type="email" name="email" id="email" value="<?=$regAtualiza["email"]?>"> <br><br>
            <input type="submit" id="btn_atualizar" value="Atualizar">
        </form> <br>
        <div id="resposta"></div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
