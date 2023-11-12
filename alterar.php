<font size="6" color="blue" face="times new roman">
<b>Alterar Alunos na Agenda</b><hr>
<font size="4" color="red">
<form name="dados" method="post" action="">
    Id <input type="text" name="txtid" size="5" maxlength="5">
    <input type="submit" name="btnpesquisar" value="Pesquisar">
</form>
<?php
    $conexao=mysqli_connect("localhost","root","","bdcadalunos");
    if(!empty($_POST['txtid']))
    {
        $id=$_POST['txtid'];
        $sql="select * from tbalunos where id = '$id'";
        $resultado=mysqli_query($conexao,$sql);
        while($reg=mysqli_fetch_array($resultado))
        {
            echo "<form name='dados' method='post'>";
            echo "ID <input type='text' name='txtid' value='$reg[id]'><br>";
            echo "Nome <input type='text' name='txtnome' value='$reg[nome]'><br>";
            echo "Endereço <input type='text' name='txtendereco' value='$reg[endereco]'><br>";
            echo "Classe <input type='txtclasse' name='txtclasse' value='$reg[classe]'><br>";
            echo "Email <input type='txtemail' name='txtemail' value='$reg[email]'><br>";
            echo "<input type='submit' name='btnalterar' value='Alterar'><br></form>";
        }
    }
    if(isset($_POST['btnalterar']))
    {
        $nome=$_POST['txtnome'];
        $endereco=$_POST['txtendereco'];
        $classe=$_POST['txtclasse'];
        $email=$_POST['txtemail'];
        $sql="update tbalunos set nome='$nome',endereco='$endereco',classe='$classe',email='$email' where id='$id'";
        $resultado=mysqli_query($conexao,$sql);
        echo "<font color='green'>Dados alterados com sucesso !!!";
    }
    mysqli_close($conexao);
?>