<?php include_once 'topo.php';
$id = $_GET["id"];
include_once'conexao.php';
$sql = "select * from aluno where idaluno =".$id;
$resultado = mysqli_query($con,$sql);
$row = mysqli_fetch_array($resultado);
?>


  <div id= "tela">
    <form action="atualizar.php" method="post"> 
        <input type="hidden" name= "id"
        value="<?php echo $row["idaluno"];?>"/>   

        Nome:<br>
        <input type="text" name="nome"
        
        value="<?php echo $row["nome"];?>"/> 
        <br/><br/>
        E-mail:<br>
        <input type="text" name="email"
        value="<?php echo $row["email"]; ?>"/> 
        <br/><br/>
        Telefone:<br>
        <input type="text" name="telefone" id="telefone"
        value="<?php echo $row["telefone"]; ?>"/> 
        <br/><br/>
        <input type="submit" value="Enviar"/>
    </form>
    </div>  
    <?php
        echo"<br><br>";
        if(isset($_GET["msg"])) {
        echo $_GET["msg"];
        }        
    ?> 
    </div> 
</body>
</html>