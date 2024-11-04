<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Integrando com Ajax - MySQL</title>
    </head>
    <body style="text-align: center">
        <?php
            include_once 'conecta.php';
            
            $sql = "SELECT * FROM aluno";
            $exec = $pdo->query($sql);            
        ?>
        <h1>Projeto PHP - Ajax - MySQL</h1>
        <h2>Consulta</h2>
        <hr>
        <a href="index.php"><button>Cadastro</button></a>
        <hr>
        <table style="border: 1px solid #CCC; width: 70%; margin: 0 auto">
            <tr style="background-color: #000; color: #FFF">
                <td>ID</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Ações</td>
            </tr>
        <?php while($reg = $exec->fetch(PDO::FETCH_ASSOC)){  ?>
            <tr>
                <td style="border: 1px solid #CCC;"><?= $reg["id"] ?></td>
                <td style="border: 1px solid #CCC;"><?= $reg["nome"] ?></td>
                <td style="border: 1px solid #CCC;"><?= $reg["email"] ?></td>
                <td>
                    <a href="formUpdate.php?id=<?= $reg["id"] ?>"><button>Editar</button></a>
                    <a href="delete.php?id=<?= $reg["id"] ?>" 
                  onclick="return confirm('Deseja excluir o registro?')"><button>Excluir</button></a>
                </td>
            </tr>            
        <?php } ?>
        </table>
    </body>
</html>
