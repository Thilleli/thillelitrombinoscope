<?php
if (!empty($_POST['fileid'])){
    $fileid = $_POST['fileid']; // of course find the exact filename....
    require_once ('settings.php');
    $PDFManager = new PDFManager($db);
    $file = $PDFManager->get($fileid);
 
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false); // required for certain browsers
    header('Content-Type: application/pdf');
 
    header('Content-Disposition: attachment; filename="'. basename($file->path()) . '";');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($file->path()));
 
    readfile($file->path());
 
    exit;
}
else{
    header("location: 404.php");
}
?>