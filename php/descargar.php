<?php
$var=$_GET['url'];
/*
$filename = '../fotospc/' .$_GET['busca'];
$fd = fopen($filename, 'r+') or die('Error al abrir el archivo');
$fstring = fread($fd, $filesize($filename));
fclose($fd);

$fd = fopen($filename, 'r+') or die('Error al abrir el archivo');
fpassthru($fp);
fclose($fd);

$content = file_get_contents($filename);
echo $content;
*/

$fileimage = '../fotospc/'.$var;
if (file_exists($fileimage)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($fileimage));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fileimage));
    ob_clean();
    flush();
    readfile($fileimage);
    exit;




/*

$filepath = '../fotospc/' .$_GET['busca'];



if (file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($filepath));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('../fotospc/' .$_GET['busca']));
    readfile('../fotospc/' . $_GET['busca']);

    // Now update downloads count
   
   */
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola</h1>
</body>
</html>