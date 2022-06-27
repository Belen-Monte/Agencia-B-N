<?php


$destino='info.tudominio@tudominio.com.ar';


$origen_nombre='https://subdominio.com.ar';


$origen_mail='info.tudominio@tudominio.com.ar';


$subject='Contacto desde el sitio tudominio.com.ar';

$adondevoy='mensaje.html';


$headers = "From: $origen_nombre <$origen_mail>\r\n";
$headers .= "Reply-To: $origen_mail\r\n"; 
$headers .= "Return-Path: $origen_nombre <$origen_mail>\r\n";  
$mensaje='';
	foreach($_POST as $k => $v){
		if($k!='Submit' && $k!='Enviar'){
			$mensaje.=ucfirst($k).": $v\n";
		}
	}
ini_set(sendmail_from,$origen_mail);
mail($destino,$subject,$mensaje,$headers);
header("Location:$adondevoy");
?>