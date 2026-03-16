<?php
    include 'conexao.php';

    $sql = "SELECT *
FROM times 
ORDER BY id ASC;";
    $consulta = $conexao->query($sql);

    




    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <table width="100%" border="1">
        <h1>Times Vencedores do Brasileirão</h1>    
        <tr>
            <th>Classificação</th>
            <th>Time</th>
            <th>Títulos</th>
        </tr>

        <?php
            while ($linha = $consulta->fetch(PDO::FETCH_OBJ)) {

        ?>

        <tr>
            <td><?php echo $linha->id ?></td>
            <td><?php echo $linha->nome ?></td>
            <td><?php echo $linha->quantidade ?></td>
        </tr>
    <?php
            }
    ?>
    </table>

</body>
</html>
