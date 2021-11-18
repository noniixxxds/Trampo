<!DOCTYPE html>
<html lang ="pt-br">
   <head>
         <meta charset="utf-8" >
         <link rel="shortcut icon" href="img/trampo.png" />
         <title>Trampo</title>
         <link rel="stylesheet"  href="style.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

          <nav>
          <a href="index3.php"><span class="Logo">Trampo</span></a>
          <ul>
          </ul>
          </nav>
   </head>
   <br> <br> <br
<body>
<div class="main">
<form method="POST" action="index2.php" enctype="multipart/form-data" id="main-contact-form">
<div class="fields"><input type="text" name="nome" id="title" placeholder="Qual o trampo?" required></div>
<div class="fields"><input type="text" name="email" id="content" placeholder="Telefone/Celular (DDD) 0 0000-0000" class="form__input" required></textarea></div>

<br>
<h4> Adicione a foto  </h4><br>
<div class="location-container__title">JPG, jpeg e PNG somente.</div><br>
<div class="form-group">
<label class="filesLabel" for="exampleFormControlFile1" for="files"></label>
<input type="file" name='arquivo' class="form-control-file" id="exampleFormControlFile1" id="files" required>
</div><br><br>
<div id="box" class="Anunciar"><input type="submit" value="Anunciar" onclick="myFunction()">

<style>

  input[type='file'] {

  }

  /* Aparência que terá o seletor de arquivo */
  label {
    width: 100%;
    height: 10px;
    background-color: #f0ff0e;
    border-radius: 1px;
    color: #fff;
    margin: 10px;
    padding: 0px 1px
  }

</style>



<script>
  function myFunction() {
      alert("Olá Colega,\nConcluiu o Anúncio? se sim ele foi enviado com sucesso!! Clique em OK, Obrigado!!");
  }
</script>

</div>
</form>

<?php
  if(isset($_SESSION['msg'])){
     echo $_SESSION ['msg'];
     unset($_SESSION['msg']);}
  ?>


</body>
</html>
