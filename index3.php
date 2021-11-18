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

  <form method="POST" class="pesquisa" action="index7.php">
  <input type="text" id="texto" name="pesquisar" placeholder="...">
  <button src="img/lupa.png" type="submit"  id="texto" type="button" class="btn">Pesquisar</button>


  <div class="menu">


  <ul>
    <li><a href="https://api.whatsapp.com/send?phone=5511951455459&text=Contato%20do%20desenvolvedor%2C%20fique%20a%20vontade.%20Obrigado.">Entrar em Contato</a></li>
    <li><a href="index2.php">Anunciar</a></li>
  </ul>
    </div>

<br>

<?php
include("conexao.php");
//traz linha de dado
$sql = "SELECT * FROM usuarios  WHERE Id = '4039'";
$buscar = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($buscar)){

?>
      <div class="card">
      <div class="holder">
      <div class="imagem">
      <img id="img_redonda" src="<?php echo "documentos/".$dados['arquivo'] ?>"width="200px" height="200px float="right""><br><br>
      <h5 class="card-title"><?php echo $dados['nome'] ?><br><br></h5>
      <a href="https://api.whatsapp.com/send?phone=5511987295377" class="btn btn-primary">Chamar Trampo</a><br><br>
      </div>
      <div class="container">
<?php

}

?>


<?php
include("conexao.php");
//traz linha de dado
$sql = "SELECT * FROM usuarios  WHERE Id = '4037'";
$buscar = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($buscar)){

?>
      <div class="card">
      <div class="holder">
      <div class="imagem">
      <img id="img_redonda" src="<?php echo "documentos/".$dados['arquivo'] ?>"width="200px" height="200px float="right""><br><br>
      <h5 class="card-title"><?php echo $dados['nome'] ?><br><br></h5>
      <a href="https://www.instagram.com/alinemoraes.consultora/?hl=pt-br" class="btn btn-primary">Chamar Trampo</a><br><br>
      </div>
      <div class="container">
<?php

}

?>

<?php
include("conexao.php");
//traz linha de dado
$sql = "SELECT * FROM usuarios  WHERE Id = '4038'";
$buscar = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($buscar)){

?>
      <div class="card">
      <div class="holder">
      <div class="imagem">
      <img id="img_redonda" src="<?php echo "documentos/".$dados['arquivo'] ?>"width="200px" height="200px float="right""><br><br>
      <h5 class="card-title"><?php echo $dados['nome'] ?><br><br></h5>
      <a href="https://api.whatsapp.com/send?phone=5511947155769" class="btn btn-primary">Chamar Trampo</a><br><br>
      </div>
      <div class="container">
<?php

}

?>


<?php
include("conexao.php");
//traz linha de dado
$sql = "SELECT * FROM usuarios  WHERE Id = '4035'";
$buscar = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($buscar)){

?>
      <div class="card">
      <div class="holder">
      <div class="imagem">
      <img id="img_redonda" src="<?php echo "documentos/".$dados['arquivo'] ?>"width="200px" height="200px float="right""><br><br>
      <h5 class="card-title"><?php echo $dados['nome'] ?><br><br></h5>
      <a href="https://giflores.com.br/" class="btn btn-primary">Chamar Trampo</a><br><br>
      </div>
      <div class="container">
<?php

}

?>

</body>
</html>
