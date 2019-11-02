<?php
session_start();
//include('conexao.php');

//if(empty($_POST['usuario']) || empty($_POST['senha']))
//{
//	header('Location: index.php');
//	exit();
//}

$user = $_POST['usuario'];
$password = $_POST['senha'];

//bloco da consulta SQL
$query = "select * from manager.userlogin 
where NAME_USER = '{$user}'
and USER_PASS = '{$password}'";
$stid = oci_parse($Oracle, $query) or die ("erro");

//Executa os comandos SQL
$exec= oci_execute($stid);

//defini váriaveis
oci_define_by_name($stid, "NAME_USER", $NmUsu);

//Abaixo conta a quantidade de linhas retornada da consulta.
echo $nrows = oci_fetch_all($stid, $results);


oci_free_statement($stid);
//fecha a conexão atual
oci_close($Oracle);

if($nrows == "1")
{
	$_SESSION['usuario'] = $NmUsu;
	header('Location:painel.php');
	exit();
}
else
{
	header('Location:index.php');
}

echo $query;exit;

