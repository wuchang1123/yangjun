<?php
$testpath = dirname(__FILE__);
require_once($testpath . '/handlebars.php/src/Handlebars/Autoloader.php');
Handlebars_Autoloader::register($testpath . '/handlebars.php/src/');
$m = new Handlebars_Engine();

///print_r($m->getParser());
echo $m->render('Hello {{planet}}', array('planet' => 'World!')); // "Hello World!"
echo "-------";
	echo $m->render('Hello {{planet}}', array('planet' => 'World!')); // "Hello World!"
?>