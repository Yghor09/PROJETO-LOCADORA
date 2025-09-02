<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículos</title>
     <link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
</head>
<body>

<<div class="container">
        <div id="interface">
            <header id="cbc1">
                <section id="co">
                    <article id="principal">
                        <hgroup>
                            <h1>ViajaMais!</h1>
                            <h3>Aluguel de carros</h3>
                        </hgroup>
          
    
     
    <?php require_once("menu.php"); ?>

       <?php
    require_once("database/connect.php");

    if ($conn) {
        // Consulta ao banco de dados
        $sql = 'SELECT * FROM veiculo';
        $resultado = $conn->query($sql);

        if ($resultado && $linha = $resultado->fetch()) {
            // Exibe os dados em uma tabela
            echo "<table id='tabela'><br><br>
                <tr>
                    <th>PLACA</th>
                    <th>MARCA</th>
                    <th>CATEGORIA</th>
                </tr>";

            do {
                echo "<tr>
                    <td>" . htmlspecialchars($linha['placa']) . "</td>
                    <td>" . htmlspecialchars($linha['codigoMarca']) . "</td>
                    <td>" . htmlspecialchars($linha['codigoCategoria']) . "</td>
                </tr>";
            } while ($linha = $resultado->fetch());

            echo "</table>";
        } else {
            echo "<p>Tabela sem registro</p>";
        }
    } else {
        echo "<p>Erro ao conectar ao banco de dados.</p>";
    }
    ?>
</body>
<footer id="Rodape">
        <h5>Copyright &copy;2024 - By The Best.</h5>
      </footer>
</html>
