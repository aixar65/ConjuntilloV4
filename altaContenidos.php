<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23617287-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-23617287-1');
        </script>            
        <meta charset="utf-8">
        <title>Conjuntillo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css\bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\socicon.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\iconsmind.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\interface-icons.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\owl.carousel.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\lightbox.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\theme.css" rel="stylesheet" type="text/css" media="all">
        <link href="css\custom.css" rel="stylesheet" type="text/css" media="all">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
      
            <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="scroll-assist" >
       <div class="nav-bar nav--absolute nav--transparent" data-fixed-at="200">
                

                <div class="nav-module logo-module left">
                    <a href="index.html">
                                    <img class="logo logo-dark" alt="logo" src="img\Logo.jpeg">
                                    <img class="logo logo-light" alt="logo" src="img\Logo.jpeg">
                                </a>
                            </div>
                            <div class="nav-module menu-module left">
                                <ul class="menu">
                                            <li>
                                        <a href="#">
                                            Contenidos
                                        </a>
                                        <ul class="multi-column">
                                            <li>
                                                <ul>
                                                  
                                    <li>
                                        <div class="dropdownlink" style="font-size: 115%; color: #F7F7F6;">CONTENIDOS DE CONJUNTILLO
                                        </div>
                                                <ul class="submenuItems">
                                                    <li><a href="Contenidos.php?pin=<?php echo $_GET['pin']; ?>">Teórico/Práctico</a></li>
                                                </ul>
                                                    </li>
                                    <li>
                                        <div class="dropdownlink" style="font-size: 115%; color: #F7F7F6;">CONTENIDO DEL DOCENTE
                                        </div>
                                                        <ul class="submenuItems">
                                                            <li><a href="contenidoDocente.php?pin=<?php echo $_GET['pin']; ?>">Teoría</a></li>
                                                            <li><a href="actividad_alumno.php?pin=<?php echo $_GET['pin']; ?>">Actividades</a></li>
                                                            <li><a href="altaContenidos.php?pin=<?php echo $_GET['pin']; ?>">Agregar contenido</a></li>
                                                        </ul>
                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!--end multi column-->
                                    </li>
                               
                            
                                    <li>
                                        <a href="Seguimiento.php?pin=<?php echo $_GET['pin']; ?>">
                                            Seguimiento
                                        </a>
                                    </li>
                                    <li>
                                        <a href="foro.php?con=<?php echo $_GET['pin']; ?>">
                                            Foro
                                        </a>
                                    </li>                                       
                                    <li>
                                        <a href="consultas.php?pin=<?php echo $_GET['pin']; ?>">
                                            Consultas<sup><img style="width: 20px;" src="img/notificacion.png"></sup>
                                        </a>
                                    </li>                          

                                </ul>
                            </div>
                            <!--end nav module-->
                <div class="nav-module right">
                   <div class="nav-module menu-module left">
                                <ul class="menu">
                                    <li>
                                        <a href="destruirsesion.php">
                                            Cerrar Sesión
                                        </a>
                                    </li>
                                                                

                                </ul>
                            </div>
                </div>
                <div class="nav-module right">
                    <ul class="menu">
                        <li>
                            <a style="font-family:Roboto; font-weight: bold; font-size:13px">✳Conjuntillo✳</a>
                        </li>
                    </ul>
                </div>
            </div>
      
      
        <div class="main-container transition--fade">
            <section class="imageblock about-2 bg--dark">
            
             
                <div class="login-page" style="max-width: 800px;">        
                         
       <div class="login-box">
         <div class="logo">
            <a href="javascript:void(0);"><b>AGREGAR CONTENIDO</b></a>
       
        </div>
        <div class="card">
            <div class="body">
                <form id="iniciarsesion"  enctype="multipart/form-data" method="POST">

                    <div class="msg" style="color: #F6F6F6;">¡Añade contenido para tus alumnos!</div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <select name="tema" class="form-control" style="font-size: 20px !important; height: 52px; letter-spacing: 1px; border-radius: 100px; width: 200px; margin-left: auto; border-color: #187DB4; background: #232323; color: #F6F6F6;">
                                <option value="1">Unión</option>
                                <option value="2">Intersección</option>
                                <option value="3">Inclusión</option>
                                <option value="4">Complemento</option>
                            </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <img align="left" src="img/image.png" style="width: 8%; margin: -5px;">
                            <input type="text" class="form-control" name="enlacevideo" placeholder="Enlace de Video" style="background: #C96E22; width: 50%; margin-left: 7%;">

                    <div class="msg" ></div>
                  
                        <img align="left" src="img/imagen.png" style="width: 10%; margin: -11px;">
                 
                            <input type="file"  name="imgg" placeholder="Alias" style="background: #C96E22; width: 50%; margin-left: 7%;">
                       
                
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <textarea name="texto" rows="4" cols="40" placeholder="Escriba algo..." style="background: #C96E22;"></textarea> 

                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                                <img align="left" src="img/image.png" style="width: 8%; margin: -5px;">
                            <input type="text" class="form-control"  name="sitio" placeholder="Enlace de Sitio Web" style="background: #C96E22; width: 50%; margin-left: 7%;">
                        </div>
                    </div>

                            <input name="iniciar" class="btn btn-block bg-pink waves-effect" type="submit" value="Cargar Contenido"style="font-size: 0.62em !important; height: 52px; letter-spacing: 1px; border-radius: 100px; width: 200px; margin-left: auto; "/>
                        </div>
                    </div>
                    <?php 
                        if (isset($_POST['iniciar'])) {
                            $file=fopen('altaContenidos.txt', 'a');
                            $codigoGet=(isset($_GET['pin']))? $_GET['pin']:0;
                            fwrite($file, $codigoGet."#".$_POST['texto'].PHP_EOL);
                            var_dump($_POST);
                            $raios=$_POST['usuario'];
                            var_dump($raios);
                            fclose($file);
                        }

                     ?>
                </form>
            </div>
        </div>
    </div>


<hr style="opacity: 20%;">

     <div class="login-box">
         <div class="logo">
            <a href="javascript:void(0);"><b>AGREGAR PRÁCTICA</b></a>
       
        </div>
        <div class="card">
            <div class="body">
                <form id="iniciarsesion"  enctype="multipart/form-data" method="POST">
                    <div class="msg" style="color: #F6F6F6;">¡Añade contenido práctico para tus alumnos!</div>
                  

                        <img align="left" src="img/imagen.png" style="width: 10%; margin: -11px;">
                 
                    <input type="file"  name="imgg" placeholder="Alias" style="background-color: #C96E22;">
                       
                
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons"></i>
                        </span>
                        <div class="form-line">
                            <textarea name="texto" rows="4" cols="40" placeholder="Escriba algo..." style="background: #C96E22;"></textarea> 
                        </div>
                    </div>
                    
                    <div class="row"> 
                        <div class="col-xs-12">
                            <input name="iniciar" class="btn btn-block bg-pink waves-effect" type="submit" value="Cargar Contenido"style="font-size: 0.62em !important; height: 52px; letter-spacing: 1px; border-radius: 100px; width: 200px; margin-left: auto; "/>
                        </div>
                    </div>
                    <?php 
                        if (isset($_POST['iniciar'])) {
                            $file=fopen('altaContenidos.txt', 'a');
                            $codigoGet=(isset($_GET['pin']))? $_GET['pin']:0;
                            $urlVideo=$_POST['enlacevideo'];
                            $enlaceStio=$_POST['sitio'];
                            $tema=$_POST['tema'];
                            fwrite($file, $codigoGet."#".$_POST['texto']."#".$urlVideo."#".$enlaceStio."#".$tema.PHP_EOL);
                            fclose($file);
                        }

                     ?>
                </form>
            </div>
        </div>
    </div>

<hr style="opacity: 20%;">

    <div class="login-box">
         <div class="logo">
            <a href="javascript:void(0);"><b>CREAR ACTIVIDADES</b></a>
       
        </div>
        <div class="card">
            <div class="body">
                <form id="iniciarsesion"  enctype="multipart/form-data" method="POST">
                    <div class="msg" style="color: #F6F6F6;">¡Añade actividades para tus alumnos!</div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <select name="tema" class="form-control" style="font-size: 20px !important; height: 52px; letter-spacing: 1px; border-radius: 100px; width: 200px; margin-left: auto; border-color: #187DB4; background: #232323; color: #F6F6F6;">
                                <option value="1">Unión</option>
                                <option value="2">Intersección</option>
                                <option value="3">Inclusión</option>
                                <option value="4">Complemento</option>
                            </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <select name="tema1" class="form-control" style="font-size: 20px !important; height: 52px; letter-spacing: 1px; border-radius: 100px; width: 200px; margin-left: auto; border-color: #DC7C09; background: #232323; color: #F6F6F6;">
                                <option value="1">Preguntas-Respuestas</option>
                                <option value="2">Otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <input type="text" style="background: #C96E22; color: #F7F7F6;"  class="form-control" name="enlacevideo" placeholder="Escribe aquí tu pregunta...">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <input type="text" style="background: #C96E22; color: #F7F7F6;" class="form-control"  name="sitio" placeholder="Respuesta Correcta">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <input type="text" style="background: #C96E22; color: #F7F7F6;" class="form-control"  name="sitio1" placeholder="Respuesta Equivocada">
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="col-xs-12">
                            <input type="text" style="background: #C96E22; color: #F7F7F6;" class="form-control"  name="sitio2" placeholder="Respuesta Equivocada">
                        </div>
                    </div>
                
                    
                    <div class="row"> 
                        <div class="col-xs-12">
                            <input name="iniciarAct" class="btn btn-block bg-pink waves-effect" type="submit" value="Cargar Actividad"style="font-size: 0.62em !important; height: 52px; letter-spacing: 1px; border-radius: 100px; width: 200px; margin-left: auto; "/>
                        </div>
                    </div>
                    <?php 
                        if (isset($_POST['iniciarAct'])) {
                            $file=fopen('preguntas_resp.txt', 'a');
                            $codigoGet=(isset($_GET['pin']))? $_GET['pin']:0;
                            $urlVideo=$_POST['enlacevideo'];
                            $enlaceStio=$_POST['sitio'];
                            $enlaceStio1=$_POST['sitio1'];
                            $enlaceStio2=$_POST['sitio2'];
                            $tema=$_POST['tema'];
                            $tema1=$_POST['tema1'];
                            fwrite($file, $codigoGet."#".$urlVideo."#".$enlaceStio."#".$enlaceStio1."#".$enlaceStio2."#".$tema."#".$tema1.PHP_EOL);
                            fclose($file);
                        }

                     ?>
                </form>
            </div>
        </div>
    </div>
                       
                 
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
           
        
            <footer class="bg--dark footer-1 text-center-xs">
                <div class="container">
                    <div class="row">
                      
                 

                    </div>
                    <div class="row footer__lower text-center-xs">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                      
                      
                    </div>
                </div>
            </footer>
        </div>
        <script src="js\jquery-2.1.4.min.js"></script>
        <script src="js\isotope.min.js"></script>
        <script src="js\ytplayer.min.js"></script>
        <script src="js\ea
        sypiechart.min.js"></script>
        <script src="js\owl.carousel.min.js"></script>
        <script src="js\lightbox.min.js"></script>
        <script src="js\twitterfetcher.min.js"></script>
        <script src="js\smooth-scroll.min.js"></script>
        <script src="js\scrollreveal.min.js"></script>
        <script src="js\parallax.js"></script>
        <script src="js\scripts.js"></script>
        <!--Typeform-->
        <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
        <!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
        <!-- Advanced options: -->
        <!-- data-align="left" -->
        <!-- data-overlay="true" -->



    </body>
</html>