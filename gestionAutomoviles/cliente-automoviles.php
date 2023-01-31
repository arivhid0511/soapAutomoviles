<?php

        $params = array('location' => 'http://localhost/gestionAutomoviles/service-automoviles.php',
            'uri' => 'http://localhost/gestionAutomoviles/',
            'trace' => 1);
        $client = new SoapClient(null, $params);

        // set the header
        // https://www.php.net/manual/en/reserved.classes.php
        // $marcas = $client->ObtenerMarcas();
        $auth_params = new stdClass();
        $auth_params->username = 'ies';
        $auth_params->password = 'daw';

        // https://www.php.net/manual/en/class.soapheader.php
        // https://www.php.net/manual/en/class.soapvar.php

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader('http://localhost/gestionAutomoviles/', 'authenticate', $header_params, false);
        $client->__setSoapHeaders(array($header));


/*try {
    $client = new SoapClient(null, array(
            'uri' => 'http://localhost/gestionAutomoviles/GestionAutomoviles.php',
            'location' => 'http://localhost/gestionAutomoviles/GestionAutomoviles.php',
            'trace' => 1
        )
    );
    $marcas = $client->ObtenerMarcas();
    $auth_params = new stdClass();
    $auth_params->username = 'ies';
    $auth_params->password = 'daw';
    $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
    $header = new SoapHeader('http://localhost/gestionAutomoviles/GestionAutomoviles.php', 'authenticate', $header_params, false);
    $this->instance->__setSoapHeaders(array($header));

} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}

     public function __construct() {
        $params = array('location' => 'http://localhost/soap-server/server2.php',
            'uri' => 'urn://localhost/soap-server/server2.php',
            'trace' => 1);
        $this->instance = new SoapClient(null, $params);

        // set the header
        // https://www.php.net/manual/en/reserved.classes.php
        $auth_params = new stdClass();
        $auth_params->username = 'ies';
        $auth_params->password = 'daw';

        // https://www.php.net/manual/en/class.soapheader.php
        // https://www.php.net/manual/en/class.soapvar.php

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
        $header = new SoapHeader('http://localhost/soap-server/', 'authenticate', $header_params, false);
        $this->instance->__setSoapHeaders(array($header));

    }

 */
?>

