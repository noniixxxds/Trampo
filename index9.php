<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/trampo.png" />
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<title>Trampo</title>
<nav>
<a href="index3.php"><span class="Logo">Trampo</span></a>
<ul>
</ul>
</nav>
</head>
<link rel="stylesheet" href="style.css">
<body>
<form class="pesquisa">
<input type="search" id="texto" list="historico">
<img src="img/lupa.png" class="btn">
<div class="menu">
  <ul>
    <li><a href="#">Meu perfil</a></li>
    <li><a href="index2.php">Anunciar</a></li>
  </ul>
    </div>
<br><br>


<?php
include("conexao.php");
//traz linha de dado
$sql = "SELECT * FROM usuarios  WHERE Id = '4013'";
$buscar = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($buscar)){

?>
      <div align="center">
      <div class="card">
      <div class="holder">
      <div class="imagem">
      <img id="img_redonda" src="<?php echo "documentos/".$dados['arquivo'] ?>"width="200px" height="200px float="center""><br><br>
      <h5 class="card-title"><?php echo $dados ['nome'] ?><br><br></h5>
      <a href="#" class="btn btn-primary">Chamar Trampo</a><br><br>
      </div>
      <div class="container">


<?php

}

?>

    <?php
    include("conexao.php");
    //traz linha de dado
    $sql = "SELECT * FROM usuarios  WHERE Id = '4013'  OR id = '4012' OR id = '4007' OR id = '4009' OR id = '4010'";
    $buscar = mysqli_query($conn, $sql);

    while($dados=mysqli_fetch_array($buscar)){

    ?>
          <div class="card">
          <div class="holder">
          <div class="imagem">
          <img id="img_redonda" src="<?php echo "documentos/".$dados['arquivo'] ?>"width="200px" height="200px float="right""><br><br>
          <h5 class="card-title"><?php echo $dados ['nome'] ?><br><br></h5>
          <a href="#" class="btn btn-primary">Chamar Trampo</a><br><br>
          </div>
          <div class="container">
<?php

}

?>

</body>
</html>
