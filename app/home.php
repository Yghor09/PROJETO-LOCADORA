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
    <link rel="stylesheet" href="../assets/css/style1.css">
    <title>Home Da Locadora</title>
</head>
<body>
    <div class="container">
        <div id="interface">
            <header id="cbc1">
                <section id="co">
                    <article id="principal">
                        <hgroup>
                            <h1>ViajaMais!</h1>
                            <h3>Aluguel de carros</h3>
                        </hgroup>
                        
                        <?php require_once("menu.php"); ?>
                    </article>
                </section>
            </header>

              <table id="SPFC">
                    <caption>
                        <h2 class="kka">Carros Mais Alugados</h2>
                        <span>NOV/2024</span>
                    </caption>
                    <tr>
                        <td class="ce">Fiat Uno</td>
                        <td class="cd">Cerca de 20-30%.</td>
                    </tr>
                    <tr>
                        <td class="ce">Chevrolet Onix</td>
                        <td class="cd">Cerca de 25-35%.</td>
                    </tr>
                    <tr>
                        <td class="ce">Hyundai HB20</td>
                        <td class="cd">Cerca de 15-25%.</td>
                    </tr>
                    <tr>
                        <td class="ce">Volkswagen Gol</td>
                        <td class="cd">Cerca de 10-20%.</td>
                    </tr>
                    <tr>
                        <td class="ce">Renault Kwid</td>
                        <td class="cd">Cerca de 5-15%.</td>
                    </tr>
                </table>
            </main>

            <aside id="lateral">
                <h2>Curiosidades sobre a Locadora ViajaMais!</h2>
                <ul>
                    <li>Avaliações Positivas: A ViajaMais! conta com mais de 1.500 avaliações online, com uma média de 4,8 estrelas, destacando a qualidade do atendimento e a satisfação dos clientes.</li>
                    <li>Frota Diversificada: A locadora possui uma bela frota de veículos, incluindo opções econômicas e carros de luxo, atendendo a diferentes perfis de clientes.</li>
                    <li>Taxa de Retorno: Aproximadamente 70% dos clientes que alugam um carro voltam para novas locações, o que demonstra a fidelidade e a confiança na locadora.</li>
                    <li>Experiências Personalizadas: A ViajaMais! oferece mais de 20 pacotes de experiências, como passeios guiados, atraindo tanto turistas quanto locais.</li>
                    <li>Parcerias Locais: A locadora tem parcerias com restaurantes e hotéis da região, proporcionando descontos e promoções exclusivas para os clientes.</li>
                </ul>
            </aside>

            <footer id="Rodape">
                <h5>Copyright &copy; 2024 - By ViajaMais!</h5>
            </footer>
        </div>
    </div>
</body>
</html>
