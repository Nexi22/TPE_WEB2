<?php
// Mostrar todos los errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir la clase principal de Smarty
require 'libs/Smarty.class.php';

$smarty = new Smarty();

// Configurar los directorios de Smarty
$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');



// Asignar variables a la plantilla

$smarty->display('inicioHtml.tpl');
$smarty->display('formularioHtml.tpl');
$smarty->display('finHtml.tpl');



?>
