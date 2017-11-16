<?php 
$aquivoNome = '../php/baixar.php'; // nome do arquivo que será enviado p/ download

// Verifica se o arquivo não existe
if (!file_exists($aquivoNome)) {
	die('Arquivo não existe');
}


// Configuramos os headers que serão enviados para o browser
header('Content-Description: File Transfer');


// -> Forçar Baixar:
//header('Content-Type: application/octet-stream');
//header('Content-Disposition: attachment; filename="'.$aquivoNome.'"');

// -> Forçar Exibir:
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="curriculo' . $aquivoNome . '"');


header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($aquivoNome));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');
// Envia o arquivo para o cliente
readfile($aquivoNome);
?>
