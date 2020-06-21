  
<!doctype html>
<html lang="es">
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
    </head>
    <body class="scroll-assist">
        <a id="top"></a>
        <div class="loader"></div>
        <nav class="transition--fade">

            
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
                                        <a href="Seguimiento.php?con=<?php echo $_GET['con'].'&&name='.$_GET['name']; ?>">
                                            Seguimiento
                                        </a>
                                    </li>
                                    <li>
                                        <a href="foro.php?con=<?php echo $_GET['con'].'&&name='.$_GET['name']; ?>">
                                            Foro
                                        </a>
                                    </li>                                       <li>
                                        <a href="consultas.php?con=<?php echo $_GET['con'].'&&name='.$_GET['name']; ?>">
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
                                        <a href="index.html">
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
            <!--end nav bar-->
            <div class="nav-mobile-toggle visible-sm visible-xs">
                <i class="icon-Align-Right icon icon--sm"></i>
            </div>
        </nav>
        
        <!--end of modal-container-->
        <div class="main-container transition--fade">
            <section class="height-70 bg--dark imagebg page-title page-title--animate parallax" data-overlay="6">
              
                <div class="container pos-vertical-center" style="height: 90%;">
              
                       <div class="container-fluid" style="position: absolute; left: 10%; right: 10%;">
                <h3 class="text-dark mb-4">Consultas de tus alumnos/as</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">¡Tienes nuevas consultas!</p>
                    </div>
                    <div class="card-body">
                     
                            <div class="col-md-6 text-nowrap">
                            
                            </div>
                           
                       
                        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable" style="color: #080808; background-color: #F39D25;">
                                <thead>
                                    <tr>
                                        <th> ✉ Mensajes:</th>
                                    
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $file = fopen("consultasPrivadas.txt", "r");
                                    $pin=$_GET['pin'];
                                    while(!feof($file)) {
                                            $texto=explode('#',fgets($file));
                                            if (!empty($texto[1]) && $texto[0]==$pin) {
                                            
                                     ?>
                                    <tr>
                                        <td><?php echo $texto[1]; ?></td>
                                    
                                    </tr>
                                <?php }} ?>
                                </tbody>
                                <tfoot>
                                
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite"></p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                  
          
                </div>
                <!--end container-->
            </section>
        
       
            <footer class="bg--dark footer-1 text-center-xs">
                <div class="container">
                    <div class="row">
                              
                  
                                         
                    
                    </div>
                    <div class="row footer__lower text-center-xs">
                        <div class="col-sm-12">
                            <hr>
                        </div>
                        <div class="col-sm-6">
                            <span class="type--fine-print">&copy;
                                <span class="update-year">2020</span> Conjuntillo <i class="icon-Heart"></i> <a href="http://bhioma.com" target="_blank">Grupo 4</a></span>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                           
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="js\jquery-2.1.4.min.js"></script>
        <script src="js\isotope.min.js"></script>
        <script src="js\ytplayer.min.js"></script>
        <script src="js\easypiechart.min.js"></script>
        <script src="js\owl.carousel.min.js"></script>
        <script src="js\lightbox.min.js"></script>
        <script src="js\twitterfetcher.min.js"></script>
        <script src="js\smooth-scroll.min.js"></script>
        <script src="js\scrollreveal.min.js"></script>
        <script src="js\parallax.js"></script>
        <script src="js\scripts.js"></script>
        <!--Typeform-->
        <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
    </body>
</html>