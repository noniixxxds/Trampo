<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="shortcut icon" href="img/trampo.png" />
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial=scale=1.0">
<title>Trampo</title>
<nav>
<a href="index7.php"><span class="Logo">Trampo</span></a>
<ul>
</ul>
</nav>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <form method="POST" class="pesquisa" action="index7.php">
  <input type="text" id="texto" name="pesquisar" placeholder="...">
  <button src="img/lupa.png" type="submit"  id="texto" type="button" class="btn">Pesquisar</button>
<div class="menu">
  <ul>
    <li><a href="#">Como funciona</a></li>
    <li><a href="index.php">Anunciar</a></li>
  </ul>
    </div>
<br>
<?php
include("conexao.php");
//traz linha de dado
$pesquisar = $_POST['pesquisar'];
$result_cursos = "SELECT * FROM usuarios WHERE nome LIKE '%$pesquisar%' LIMIT 2";

$resultado_cursos = mysqli_query($conn, $result_cursos);

while($rows_cursos = mysqli_fetch_array($resultado_cursos)){

?>
<div class="carousel">
<div class="card">
<div class="holder">
<div class="imagem">
<img id="img_redonda" src="<?php echo "documentos/".$rows_cursos['arquivo'] ?>"width="180px" height="180px" float="right""><br><br>
<h5 class="card-title"><?php echo $rows_cursos ['nome']?><br><br></h5>
<img  src="img/whatsapp.png"" width="15px" height="15px float="center">
<?php echo $rows_cursos ['email'] ?><br><br><br>
</div>
<div class="container">
<link rel="stylesheet" href="style.css">
<?php
}
?>







</body>

</html>
