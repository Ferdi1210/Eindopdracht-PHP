<?php

    define('ROOT_URL', 'http://schoolwerk.nl/PHP3/Eindopdracht/FCRodeRaketten/');
    define('ROOT_PATH','__DIR__');
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'eindopdracht');
    define('DATABASE', 'eindopdracht');

    $oConnection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    global $oConnection;

?>