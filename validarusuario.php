<?php
include 'conexion.php';

session_start();



                
                  $sql =  "SELECT * FROM login WHERE usuario = :usuario AND contrasena = :contrasena";
         
                  $resultado = $pdo->prepare($sql);

                  $usuario = ($_POST["usuario"]);
                  $contrasena = ($_POST["contrasena"]);
                  
                  $_SESSION["usuario"] = $usuario;
                  

                  $resultado->bindValue(":usuario",$usuario);
                  $resultado->bindValue(":contrasena",$contrasena);

                  $resultado->execute();

                  $numero_registro = $resultado->rowCount();
                  
                  

                  if ($numero_registro !=0) {
                        $_SESSION['usuario'] = $usuario;
                        $_SESSION['id'] = $numero_registro['id'];
                  	header("Location: principal-docente.php");
                  }else{
                  
                  	header("Location: login-docente.html");
                  }




?>