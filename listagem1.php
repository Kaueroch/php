<center><img src="fortec.png" width="260" height="240"><br>
<font size="5" color="blue" face="courier new">
<b>Listagem geral dos alunos</b><hr></center>
<font size="5" color="red">
<?php
    $conexao = mysqli_connect("localhost","root","","bdcadalunos");
	$sql = "select * from tbalunos";
	$resultado = mysqli_query($conexao,$sql);
	$total = mysqli_num_rows($resultado);
	echo "Total de alunos cadastrados: ".$total;
	while($registro=mysqli_fetch_array($resultado))
	{
	echo "<br>ID: ".$registro['id'];
	echo "<br>Nome: ".$registro['nome'];
	echo "<br>Endereço: ".$registro ['endereco'];
	echo "<br>Classe: ".$registro ['classe'];
	echo "<br>Email: ".$registro ['email']."<hr>";
	
    }
	mysqli_close($conexao);
?>
