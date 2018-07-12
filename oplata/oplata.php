<?php 

// getting server root
$server = $_SERVER['DOCUMENT_ROOT'];

// include request handler
include_once $server . '/wfp/Controllers/RequestController.php';

// setting up controller
$controller = new RequestController(85, 47, 'Оплата предложения-пакета Коуч-Сессия "Охотник на демонов"+"Мультипликатор 10x" ', $_POST['email']);

// setting up request
//$controller->determinate();

$controller->actionGenerateInvoiceRequest();

//$link_yandex = "https://money.yandex.ru/eshop.xml?shopId=137380&scid=102330&paymentType=AC&sum=".$price_rub."&orderNumber=".$order_id."&customerNumber=".$email."&email=".$email;

?>