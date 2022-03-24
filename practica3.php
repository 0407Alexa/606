<?php

error_reporting(0);

  // mando llamar a la conexion de base de datos

  include 'include/conecta.php';

  if(isset($_POST['Registro'])){

     $Nombre = $conecta->real_escape_string($_POST['Nombre']);

     $Apellidos = $conecta->real_escape_string($_POST['Apellidos']);

     $Telefono = $conecta->real_escape_string($_POST['Telefono']);

     $Email = $conecta->real_escape_string($_POST['Email']);

     $Fecha = $conecta->real_escape_string($_POST['Fecha']);

     $Password = $conecta->real_escape_string(md5($_POST['pass']));

     $Nuser ="SELECT * FROM usuario WHERE Email ='$Email'";

     $Vuser = $conecta->query($Nuser);

     if($Vuser->num_rows > 0){

         $mensaje.="<div class='alert-danger alert-dismissible fade show'role='alert'>

         <strong>Error de registro</strong> El email ya se encuentra adentro de la base de datos.

         <button type='button'class='btn-close' data-bs-dismiss='alert' aria-label='close'>

         </button>

         </div>";
         else{

            $Registro ="INSERT INTO usuario(Nombre,Apellidos,Telefono,Email,FNac,Password)VALUES('$Nombre','$Apellidos','$Telefono','$Email','$Fecha','$Password')";
   
            $Inserta = $conecta->query($Registro);
   
            if($Inserta > 0){
   
               $mensaje.="<div class='alert-succes alert-dismissible fade show' role='alert>
   
               <strong>Registro Exitoso</strong> Se registro el usuario en la base de datos.
   
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'>
   
               </button>
   
               </div>";
   
   
   
            }
   
        }
   
     }
   
   ?>
   !DOCTYPE html>

<html lang="en">

    <head>

        <title>Registro de Usuario</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <div class="container">

            <div class="row mt-4">

                 <h5 class="text-center">Registro de Usuario</h5>

            </div>

            <?php echo $mensaje; ?>

            <div class="row">

                <div class="card shadow">

                     <div class="container py-3">