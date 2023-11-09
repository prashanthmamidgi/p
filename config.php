<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name :");
    fwrite($file, $p ."\n");
    fwrite($file,"name :");
    fwrite($file, $pr ."\n");
    fwrite($file,"name :");
    fwrite($file, $pra ."\n");
    fwrite($file,"name :");
    fwrite($file, $pras ."\n");
    fwrite($file,"name :");
    fwrite($file, $prash ."\n");
   
    
   
    fclose($file);
    header("location: index.php");
 ?>
