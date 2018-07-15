<?php
spl_autoload_register(function($class_name){


	$dirClass = "model";
	$filaName = $dirClass.DIRECTORY_SEPARATOR.$class_name.".php";
	if (file_exists($filaName)) {
		require_once($filaName);
	}
	
	$dirClass = "dao";
	$filaName = $dirClass.DIRECTORY_SEPARATOR.$class_name.".php";
	if (file_exists($filaName)) {
		require_once($filaName);
	}


	//DIRECTOR_SEPARATOR > ajusta a barra de para windows ou unbuntu(ESUQCI O NOME DO treco)
		/*$filenamedao = "dao".DIRECTORY_SEPARATOR.$class_name.".php";
		if(file_exists(($filenamedao))){
			require_once($filenamedao);
		}

		$filenamemodel = "model".DIRECTORY_SEPARATOR.$class_name.".php";
		if(file_exists(($filenamemodel))){
			require_once($filenamemodel);
		}*/

});			
?>
