<?php
/*
 * Servicio Web en PHP por Jose Hernández
 * https://josehernandez.es/2011/01/18/servicio-web-php.html
 * https://web.archive.org/web/20201026070426/https://josehernandez.es/2011/01/18/servicio-web-php.html
 */

include 'GestionAutomoviles.php';

//$test = new GestionAutomoviles;
//$test->TestBD(); 

$params = array('uri' => 'http://localhost/gestionAutomoviles/');
$server = new SoapServer(null, $params);
$server->setClass('GestionAutomoviles');
$server->handle();

/*$soap = new SoapServer(null, array('uri' => 'http://localhost/soap-automoviles/'));
$soap->setClass('GestionAutomoviles');
$soap->handle();*/

