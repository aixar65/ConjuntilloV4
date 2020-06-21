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
       
      
      
        <div class="main-container transition--fade">
            <section class="imageblock about-2 bg--dark">
            
             
                <div class="login-page">
                    
                      
                         
       <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>CONJUNTILLO</b></a>
       
        </div>
        <div class="card">
            <div class="body">
                <form id="iniciarsesion" method="POST">
                    <div class="msg">Inicia sesión para comenzar tu clase</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control"  name="usuario" placeholder="usuario" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="contasena" placeholder="contraseña" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">recordar</label>
                        </div>
                        <div class="col-xs-6">
                            <input name="iniciar" class="btn btn-block bg-pink waves-effect" type="submit" value="Iniciar Sesion" style="font-size: 0.62em !important; height: 52px; letter-spacing: 1px; border-radius: 100px;" />
                        </div>
                         <div class="col-xs-6">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Registrate</button>
                        </div>
                    </div>
                  <?php 
                        if (isset($_POST['iniciar'])) {
                            
                            $codigo=rand(1,100000);
                            $fileR=fopen('session_prof.txt', 'r');
                            while (!feof($fileR) ) {
                             $varList=explode('#', fgets($fileR));
                            if ($varList[0]==" ") {
                                break;
                            }
                            if ($varList[0]!=$codigo) {
                                $file=fopen('session_prof.txt', 'a');
                                $codigo=rand(1,100000);  
                                fwrite($file, $codigo."#".$_POST['usuario']."#".$_POST['contasena'].PHP_EOL);
                                fclose($file);
                                break;

                            }   
                            }
                                fclose($fileR);

                            echo "<script>window.location.href='principal-docente.php?pin={$codigo}'</script>";  
                            
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
        <!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
        <!-- Advanced options: -->
        <!-- data-align="left" -->
        <!-- data-overlay="true" -->



    </body>
</html>