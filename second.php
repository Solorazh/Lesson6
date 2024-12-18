<?php
$text = "";
$fileName = 'file.txt';

if(isset($_GET["text"])){
  $text = $_GET["text"];
  }
file_put_contents($fileName,  $text);

header("Content-Type: text/plain");
header("Content-Length: " . filesize($fileName));
header("Content-Disposition: attachment; filename=$fileName");

$fp = fopen($fileName, 'rb');
fpassthru($fp);
exit;