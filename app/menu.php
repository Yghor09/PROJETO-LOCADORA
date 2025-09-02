<?php


if (!isset($_SESSION['user'])){
	header('location: ../index.php');
	exit;
}

?>

<nav id="Menu">
      <h1 hidden>Menu principal</h1>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="veiculos.php">Veículos</a></li>
          <li><a href="marca.php">Marcas</a></li>
          <li><a href="categoria.php">Categorias</a></li>
          <li><a href="logout.php"> Sair</a></li>
      </nav>