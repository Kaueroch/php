<form name="dados" method="post" action="">
<font size="6" color="purple">
<b>Pesquisa dos alunos na Agenda</b><hr>
<font size="4" color="red">
<form name="dados" method="post" action="">
	Id <input type="text" name="txtid" size="5" maxlenght="5">
	<input type="submit" name="btnpesquisar" value="Pesquisar">
	<input type="submit" name="btnexcluir" value="Excluir"><br>
</form>
<?php
if(!empty($_POST['txtid']))
{
	$conexao=mysqli_connect("localhost","root","","bdcadalunos");
	$Id=$_POST['txtid'];
	$sql="select * from tbalunos where id = '$Id'";
	$resultado=mysqli_query($conexao,$sql);
	while($registro=mysqli_fetch_array($resultado))
	{
		echo "<br>ID: ".$registro['id'];
		echo "<br>Nome: ".$registro['nome'];
		echo "<br>Endereço: ".$registro['endereco'];
		echo  "<br>Classe: ".$registro['classe'];
		echo "<br>E-mail: ".$registro['email'];
	}
	if (isset($_POST['btnexcluir']))
	{
		$id=$_POST['txtid'];
		$sql="delete from tbalunos where id = '$id'";
		$resultado=mysqli_query($conexao,$sql);
		echo "<br><br>Aluno excluído com sucesso!!!";
		
	}
	
	
	mysqli_close($conexao);
}
?>	