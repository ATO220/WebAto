<?php
   //Reseteamos variables a 0.
   $nombre = $email = $subject = $telefono = $mensaje = $para = $headers = $msjCorreo = NULL;
  
   echo "jidjididdk";   //Obtenemos valores input formulario
      $nombre = $_POST['nombre'];
      $email = $_POST['email'];
      $subject = "CONSULTA WEBATO";   
      $mensaje = $_POST['mensaje'];
      $telefono = $_POST['telefono'];
      $para = "serranolaureano.220@gmail.com";

      //Creamos cabecera.
      $headers = 'From' . " " . "Consultas WebAto" . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";
var_dump($nombre);
      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono: " . $telefono;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Mensaje: " . $mensaje;
      $msjCorreo .= "\r\n";

    if (mail($para, $subject, $msjCorreo, $headers)) {
         echo "<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
         </script>";
    } else {
         echo "<script language='javascript'>
            alert('fallado');
         </script>";
    }
  
?>