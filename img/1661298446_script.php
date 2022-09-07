<?php


echo $_SERVER['SERVER_ADDR']."<br/>"; //Imprime la IP del servidor
echo $_SERVER['SERVER_NAME']."<br/>"; //Imprime el nombre del servidor
echo $_SERVER['SERVER_SOFTWARE']."<br/>"; //Imprime el software que usa el servidor
echo $_SERVER['SERVER_PROTOCOL']."<br/>"; //Imprime el protocolo usado
echo $_SERVER['REQUEST_METHOD']."<br/>"; //Imprime el método de petición empleado
echo $_SERVER['REQUEST_TIME']."<br/>";  //Imprime el tiempo de respuesta
echo $_SERVER['HTTP_USER_AGENT']."<br/>"; /*Imprime la información de S.O y navegador del cliente*/
echo $_SERVER["REMOTE_ADDR"]."<br/>";  //Imprime la dirección IP del cliente
/*Imprime puerto empleado por la máquina del usuario para comunicarse con el servidor web. */
echo $_SERVER["REMOTE_PORT"]."<br/>";
echo phpinfo();
?>

