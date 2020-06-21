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
                                                    <li><a href="contenidosAlumno.html?con=<?php echo $_GET['con']; ?>">Teórico/Práctico</a></li>
                                                </ul>
                                                    </li>
                                    <li>
                                        <div class="dropdownlink" style="font-size: 115%; color: #F7F7F6;">CONTENIDO DEL DOCENTE
                                        </div>
                                                        <ul class="submenuItems">
                                                            <li><a href="teoria-alumno.php?con=<?php echo $_GET['con']; ?>">Teoría</a></li>
                                                            <li><a href="actividad-ladoAlumno.php?con=<?php echo $_GET['con']; ?>">Actividades</a></li>
                                                         
                                                        </ul>
                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                        <!--end multi column-->
                                    </li>
                                  
                            
                                    <li>
                                        <a href="foroAlumno.php?con=<?php echo $_GET['con'].'&&name='.$_GET['name']; ?>">
                                            Foro
                                        </a>
                                    </li>                                       <li>
                                        <a href="consultasAlumno.php?con=<?php echo $_GET['con'].'&&name='.$_GET['name']; ?>">
                                            Consultas
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
                 <div class="dropdown" style="align-self: center;">




                <ul class="menu">
                                   
                                    <li>
                                        <a href="" style="text-decoration: none; padding: 10px; font-weight: 600; font-size: 20px; color: #ffffff; background-color: #1883ba; border-radius: 6px; border: 2px solid #0016b0;">
                                            Elegir Tema
                                        </a>
                                        <ul class="multi-column">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="teoria-alumno.php?con=<?php echo $_GET['con']; ?>&&tema=5">
                                                            Introducción
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="teoria-alumno.php?con=<?php echo $_GET['con']; ?>&tema=1">
                                                            Unión
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="teoria-alumno.php?con=<?php echo $_GET['con']; ?>&tema=2">
                                                            Intersección
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="teoria-alumno.php?con=<?php echo $_GET['con']; ?>&tema=4">
                                                            Complemento
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="teoria-alumno.php?con=<?php echo $_GET['con']; ?>&tema=3">
                                                            Inclusión
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!--end multi column-->
                                    </li>
                                                                                                  

                                </ul>
              </div>   
                      
                         
            <div class="login-box">
             <div class="logo">
                <a href="javascript:void(0);"><b>CONTENIDOS</b></a>
           
            </div>
            
                <?php
                $fileR=fopen('Altacontenidos.txt', 'r');
                $codigoGet=(isset($_GET['tema']))? $_GET['tema']:0;
                if ($codigoGet!=0) {
                    
                
                while (!feof($fileR)) {
                    $text=explode('#', fgets($fileR));
                        # code...
                    if (!empty($text[0]) && !empty($text[1]) && !empty($text[2]) && !empty($text[3]) && !empty($text[4])) {
                        if (intval($text[4])==intval($codigoGet)) {
                        # code...
                 ?><div class="card">
                    <hr style="opacity: 20%;">
                  

                    <div class="body">

                        <form id="iniciarsesion"  method="POST">
                            <div class="msg" style="color: #F6F6F6;"><h5><?php  echo $text[1] ;?></h5></div>
                            <iframe width="420" height="250" frameborder="0"  src="<?php echo $text[2]; ?>" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                            <a href="<?php echo $text[3]; ?>" class="btn btn-primary" >Para mayor Informacion</a>


                        </form>
                        </div>
                    </div>
                <?php }}}}
                 ?>
                 <br>
                 <br>

            
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
                        

                        </div>
                      
                      
                    </div>
                   
                </div>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
                <hr style="opacity: 0.0;"/>
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