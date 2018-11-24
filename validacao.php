<?php 

require_once 'vendor/autoload.php';
use Endroid\QrCode\QrCode;
use Respect\Validation\Validator as v;
$nome= $_POST['nome'];

$data= $_POST['data'];
$email= $_POST['email'];


$dataval=v::date()->validate($data);
$emailval=v::email()->validate($email);
/*
if ($dataval ) {
 	echo "data valida ";
 }else{
 	echo "data invalida";
 	echo "<br>";
 }
 if ($emailval) {
 	echo "email valido ";
 	echo "<br>";
 }else{
 	echo "email invalido";
 }
*/
if ($dataval && $emailval){

	$qrCode = new QrCode($nome);

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
}else{
	echo "formulario apresenta erro";
}

 ?>