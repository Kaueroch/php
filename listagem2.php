<style>
body {
	background-image: url("lavanda.png");
	background-repeat: no-repeat;
	background-size: 100% 100%;
}

</style>
<center><img src="fortec.png" width="260" height="240"><br>
<font size="5" color="blue" face="courier new">
<b>Listagem geral dos alunos</b><hr>
<font size="5" color="red">
<?php
    $conexao = mysqli_connect("localhost","root","","bdcadalunos");
	$sql = "select * from tbalunos";
	$resultado = mysqli_query($conexao,$sql);
	$total = mysqli_num_rows($resultado);
	echo "Total de alunos cadastrados: ".$total;
	echo "<table bgcolor = '#483D8B' = '#DAA520' border = '5'><tr><th>ID</th><th>Nome</th><th>Endereço</th><th>Classe</th><th>Email</th></tr>";
	while($registro=mysqli_fetch_array($resultado))
	{
	echo "<tr><th>".$registro['id']."</th>";
	echo "<th>".$registro['nome']."</th>";
	echo "<th>".$registro ['endereco']."</th>";
	echo "<th>".$registro ['classe']."</th>";
	echo "<th>".$registro ['email']."</tr></th>";
	
    }
	echo "</table>";
	mysqli_close($conexao);
?>
