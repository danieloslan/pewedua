<?php 
	spl_autoload_register(function($class)
	{
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
	});

	$v = new \app\View();
	$v->render();

	echo "<br>";

	$x = new \src\View();
	$x->render();


 ?>