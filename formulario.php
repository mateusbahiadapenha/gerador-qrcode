<?php 

require_once 'vendor/autoload.php';
use Endroid\QrCode\QrCode;
$nome= $_POST['nome'];

$qrCode = new QrCode($nome);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
 ?>