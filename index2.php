
<?php

include("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);


if(mysqli_insert_id($conn)){
  $_SESSION['msg'] = "<p style='color:green;'> Anúncio enviado com sucesso!!!</p>";
     header("Location: index.php");
}else{
  $_SESSION['msg'] = "<p style='color:red;'> Anúncio não enviado!</p>";
  header("Location: index.php");
}

$arquivo  = $_FILES['arquivo'];

if($arquivo !== null) {

preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
//Gera nome para a imagem
if ($ext == true){

$nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

$caminho_arquivo = "documentos/" . $nome_arquivo;

move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);

$result_usuario = "INSERT INTO usuarios (nome, email, arquivo, created) VALUES ('$nome', '$email', '$nome_arquivo', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

}
}
