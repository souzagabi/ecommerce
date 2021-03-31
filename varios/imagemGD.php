<?php

    $image = imagecreatefromjpeg("./img/certificado.jpg");
    
    $black = imagecolorallocate($image, 0, 0 ,0);
    $red = imagecolorallocate($image,255, 0 ,0);
    
    imagestring($image, 5, 400, 250, "CERTIFICADO", $black);
    imagestring($image, 5, 400, 280, "Gabriel Alves", $black);
    imagestring($image, 5, 400, 310, utf8_decode("Concluído em: ").date("d/m/Y"), $black);
    
    header("Content-Type: image/jpeg");
    
    imagejpeg($image);//, "./img/certificado-".date("Y-m-d").".jpg");
    
    imagedestroy($image);
?>