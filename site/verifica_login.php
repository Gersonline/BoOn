<?php
session_start();
if(!$_SESSION['usuario'])
{
	header('Location: menu.html');
	exit();
}