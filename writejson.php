<?php
    $myFile = "static/db/site.json";
    $fh = fopen($myFile, 'w') or die("can't open file");
    //fwrite($fh,var_export($_POST['data'], true));
	file_put_contents($myFile, $_POST['data']);
    fclose($fh);
?>