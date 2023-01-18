<?php include_once 'topo.php';
?>
<form action="consultanome.php" method="get">
    Digite o Nome do Aluno:
    <input type="text" name="nome" id="">
    <br>
    <input type="submit" value="Buscar Aluno">
</form>
<?php
 if (isset($_GET["nome"])) {
                        $nome = $_GET["nome"];     
                    //abrir conexão com o banco
                    include_once 'conexao.php';
                    //montar a instrução sql para selecionar todos os registros
                    $sql="select * from aluno where nome = '".$nome."'";
                    //executar a consulta
                    $rs= mysqli_query($con,$sql);
                    if (mysqli_num_rows($rs)>0) {
                    ?>
                            <table class="table">
                                <tr>
                                    <td>Nome</td>
                                    <td>E-mail</td>
                                    <td>Telefone</td>
                                    <td>Data de Cadastro</td>
                                <tr>   
                            <?php
                            while ($row= mysqli_fetch_array($rs)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["nome"];?></td>
                                    <td><?php echo $row["email"];?></td>
                                    <td><?php echo $row["telefone"];?></td>
                                    <?php 
                                                $data = explode("-",$row["datacadastro"]);
                                                $data1 = array_reverse($data);
                                                $data2 = implode("/",$data1);
                                            ?>
                                    <td><?php echo $data2; ?></td>
                                </tr>
                                <?php
                            }
                            echo"tem registro";
                    }else{
                        echo"nenhum aluno cadastrado";
                    }
 } else {
     echo" Digite um nome para busca!";
 }
 ?>
 
