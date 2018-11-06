<?php


// Cargamos Requests y Culqi PHP
include_once dirname(__FILE__).'/Requests/library/Requests.php';
Requests::register_autoloader();
include_once dirname(__FILE__).'/culqi-php/lib/culqi.php';

$SECRET_KEY = "sk_live_qGcXUBoioBHqlL0o";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$culqi->Charges->create(
    array(
        "amount" => $_POST['precio'],
        "capture" => true,
        "currency_code" => "PEN",
        "description" => $_POST['producto'],
        "email" => $_POST['email'],
        "installments" => 0,
        "source_id" => $_POST['token']
        ));

        echo "exito, pago realizado.";

 exit;