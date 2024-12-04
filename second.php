<?php

$file_name="test.txt";
header("Content-Length: ".filesize($file_name));
header("Content-Disposition: attachment; filename=".$file_name);
header("Content-Type: application/x-force-download; name=\"".$file_name."\"");
ob_clean();
flush();
readfile($file_name);
exit;
