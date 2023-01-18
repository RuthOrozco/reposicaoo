<?php
// pegar o id vindo do consultar
$id = $_GET["id"];

//abre a conexão com o banco de dados
include_once'conexao.php';

// monta a instrução para exclusão.
$sql = "delete from aluno where idaluno =" .$id;
// agora... igual ao gravar, somente trocar a mensagem
if (mysqli_query($con,$sql)) {
    $msg ="Excluído com sucesso";
}else {
    $msg ="Erro ao excluir.";
}
mysqli_close($con);
header("location: consulta.php?msg=".$msg);
?>