<?php

        $HOSTINGER=1;
	
	if ($HOSTINGER==1)
        {//En hostinger
	$host = "mysql.hostinger.es";
	$user = "u204349316_oscar";
	$password = "gabriel3";
	$dbname = "u204349316_preg";
        }
        else
        {//En local
        $host = "localhost";
		$user = "root";
		$password = "";
		$dbname = "preguntas";
        }
	
	$mysqli = mysqli_connect($host, $user, $password, $dbname);
	
	if ($mysqli->connect_errno)
	{
		die ( 'Error al conectar con la Base de Datos' . mysqli_connect_error() . PHP_EOL);	
	}
?>