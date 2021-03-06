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
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/a8a5a12063.js" crossorigin="anonymous"></script>
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

                                     <li>
                                        <a name="boton" type="submit"><img src="img/video.png" style="width: 50%; position: relative; top: 10px;"></a>
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
            <section class="height-70 bg--dark imagebg page-title page-title--animate parallax" data-overlay="6" style="position: relative; top: 20px; height: 50%;">
              <div class="row" style="position: relative; height: 780px;">
      <!--  lado izquierdo -->
      <div class="col-md-6 izquierda pr-2"  >
        
          <div class="container " >

       <!-- Encabezado-------------------------------------------------->     
             <div class="row encabezado mt-2">


              <div class="titulo">
                <h1>TEORÍA DE CONJUNTOS</h1>
              </div>


              <div class="dropdown" style="align-self: center;">




                <ul class="menu">
                                   
                                    <li>
                                        <a href="espacios.html" style="text-decoration: none; padding: 10px; font-weight: 600; font-size: 20px; color: #ffffff; background-color: #1883ba; border-radius: 6px; border: 2px solid #0016b0;">
                                            Elegir Tema
                                        </a>
                                        <ul class="multi-column">
                                            <li>
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            Introducción
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Unión
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Intersección
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="">
                                                            Complemento
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!--end multi column-->
                                    </li>
                                                                                                  

                                </ul>
              </div>
            </div>
            
          </div>

          <!--Cuerpo-->
           <div class="container" >
            <h6>¿Qué es un diagrama de Venn?</h6>
              <div class="cuerpo mb-2 mt-1" style="width: 650px;">
                Los diagramas de Venn se usan para mostrar gráficamente la agrupación de elementos en conjuntos, representando cada conjunto mediante un círculo o un óvalo. Nosotros vamos a ver y a estudiar ejemplos con 2 conjuntos: el conjunto A y el conjunto B.
                <img src="img/img1.png" style="width: 200px;">
                Estos dos conjuntos muestran 2 elementos que no pueden tener nada en común. Por ejemplo, el conjunto A son cuadrados amarillos y el conjunto B son cuadrados verdes. El diagrama de Venn quedaría de la siguiente manera:
                <img src="img/img2.png" style="width: 300px;">
                Hay otro tipo de diagrama de Venn, que son los que tienen una zona en común entre los conjuntos A y B, y esta zona se llama intersección (inter).
                <img src="img/img3.png" style="width: 200px;">
              </div>

             
           </div>
          
        
        
      </div>
        


      <!--  lado derecho -->
      <div class="col-md-6 derecha pl-2 ">
        
          <div class="container mr-0">
            <div class="row encabezado mt-2 mb-1" style="justify-content: center">


            <div class="titulo" style="">
              <h1>EJERCICIO PRÁCTICO</h1>
            </div>
            
            
          </div>
          <div class="row ">
              <div class="container" >
                <div class="cuerpo_p mb-2">
                  
                      Siendo los conjuntos A y B , ordene los elementos de la manera correcta
                  
                  
                    
                  <div class="row justify-content-center align-content-center">
                    <div class="alert alert-danger my-1" >
                      A = { a, b, c, d, e }
                    </div>
                    <div class="alert alert-warning my-1" style="margin-left: 7px;">
                      B = { f , g, c, d, e }
                    </div>
                  </div>


                <div class="row">
                <div class="container " style="margin-top: 5px">
                  <div class="cuerpo_ejercicio align-self-end" style="padding-right: 20px;">
                   <div class="row justify-content-end align-content-center" style="">
                    <div class="prueba" style="color:black;font-weight: 800;margin-top: 5px; margin-right: 5px; cursor: pointer;">Elementos: </div> 
                        
                        <div class="rounded-circle circulo"> a </div>
                        <div class=" rounded-circle circulo">
                            ab
                        </div>
                        <div class=" rounded-circle circulo">
                            ac
                        </div>
                        <div class=" rounded-circle circulo">
                            as
                        </div>
                   
                  </div>
                                     <li>
                                        <a href="" style="color: #000000;">
                                            ☛ Letras
                                        </a>
                                    </li>
                                     <li>
                                        <a href="" style="color: #000000;">
                                            ☛ Números
                                        </a>
                                    </li>
                                     <li>
                                        <a href="" style="color: #000000;">
                                            ☛ Imágenes
                                        </a>
                                    </li>

                  <div class="row justify-content-center">
                    <img class="img-fluid ml-3"  src="img/conjunto1.png" alt="conjuntos">
                  </div>


                </div>
                
              </div>
              
            </div>


            

                  
                  
                </div>
                
              </div>

             
          </div>
      <!--- otra fila-->


          
                    
          </div>
          
          
       
        
      </div>
    </div>
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
        <script src="js\jquery-3.5.1.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
   <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js\javascript.js"></script>
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