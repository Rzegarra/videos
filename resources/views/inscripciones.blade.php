<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Convención de derecho minero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">
	
	<!-- color -->
    <link rel="stylesheet" href="css/color.css" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ url('index') }}" class="logocmd">
                                <img class="logo" src="images/cdm_w.png" alt="" style="width : 180px;">
                                <img class="logo-2" src="images/cdm.png" alt="" style="width : 180px;">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a  href="{{ url('index') }}">Home</a></li>
                                <li><a href="{{ url('speakers') }}">Ponentes</a></li>
                                <li><a href="{{ url('index') }}">Calendario</a></li>
                                <li><a href="{{ url('index') }}">Contacto</a></li>
                                <li><a href="{{ url('concurso') }}">Concurso de Ensayos</a></li>
                                <li><a class="active" href="{{ url('inscripciones') }}">Inscripciones</a></li>
                                <li><a href="{{ url('index') }}">info</a></li>
                                <li><a href="{{ url('videos') }}">
                                    <button type="button" class="btn btn-danger">VIDEOS</button>
                                    </a></li>


                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
			<div id="top"></div>
			
            <!-- section begin -->
            <section  class=" relative no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="overlay-bg">
					
					<div class="center-y fadeScroll relative" data-scroll-speed="2">
                    <div class="container">
                        <div class="row">
							<div class="spacer-double"></div>
							<div class="spacer-double"></div>
							<div class="spacer-single"></div>
                            <div class="col-md-7">
                                <div class="oficializado">
                                    <h3>Oficializado por:</h3>
                                    <div class="spacer-single"></div>
                                    <img src="images/mini.png" alt="">
                                    <a target="_blank" href="http://busquedas.elperuano.pe/download/url/oficializan-el-evento-denominado-iii-convencion-de-derecho-resolucion-ministerial-no-215-2018-memdm-1657121-1">
                                        <h4>215-2018-MEM/DM</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>

                    
                </div>
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->
        <div class="container-contact100" id="section-contact">

                <div class="wrap-contact100">
                    <form class="contact100-form validate-form" method="post" action="php/enviar3.php" enctype="multipart/form-data">
                        <span class="contact100-form-title">
                            INSCRIPCIONES
                            <div class="spacer-single"></div>
                            <p>
                                Si su inscripción es como estudiante, por favor agregue su carnet o algún documento que acredite en donde estudia, de forma contraria su inscripción sera suspendida.
                            </p>
                            
                        </span>
        
                        <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                            <input class="input100" type="text" name="name" placeholder="Nombre completo">
                            <span class="focus-input100"></span>
                        </div>
        
                        <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                            <input class="input100" type="text" name="dni" placeholder="Dni">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                            <input class="input100" type="text" name="correo" placeholder="Correo">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container radio">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios"  value="Ambiental minero" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Ambiental minero
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios"  value="ABC de la minería">
                            <label class="form-check-label" for="exampleRadios2">
                                ABC de la minería
                            </label>
                          </div>
                          <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="exampleRadios"  value="Laboral minero" >
                            <label class="form-check-label" for="exampleRadios3">
                                Laboral minero
                            </label>
                          </div>
                          <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="exampleRadios"  value="Todos los módulos" >
                            <label class="form-check-label" for="exampleRadios3">
                                Todos los módulos
                            </label>
                          </div>
                        </div>
                        

                        <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                            <input class="input100" type="text" name="university" placeholder="Centro de estudios">
                            <span class="focus-input100"></span>
                        </div>
        
                        <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                            <input class="input100" type="text" name="phone" placeholder="Teléfono">
                            <span class="focus-input100"></span>
                        </div>
        
                        <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
                            <textarea class="input100" name="message" placeholder="Su mensaje"></textarea>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="col-md-4 text-center">
                                
                            <div class="upload-btn-wrapper">
                                    

                                <div class="btn-input">
                                    <i class="fa fa-camera m-r-6" aria-hidden="true"></i><p style="font-size: 20px;color: gray;">
                                            <input type="file" name="carnet">
                                            Carnet</p> </div>
                                </input>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            
                            <div class="upload-btn-wrapper">
                                    
                                <div class="btn-input">
                                    <i class="fa fa-camera m-r-6" aria-hidden="true"></i>
                                    <input type="file" name="voucher"class="btn-input" />Voucher</div>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-4 text-center">
                        <div class="container-contact100-form-btn">
                                <button class="contact100-form-btn">
                                    <span>
                                        <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                                        Enviar
                                    </span>
                                    
                                </button>
                        </div>
                    </div>
                    

                        
                    </form>
                </div>
            </div>
        



    <!-- footer begin -->
    <footer>
        <div class="container text-center text-light">
            <div class="row">
                <div class="col-md-12">
                    <div class="social-icons big">
                        <a href="https://www.facebook.com/convenciondederechominero/"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="https://www.youtube.com/channel/UCHICYZwKKOje8IX1ptrXjog?view_as=subscriber"><i class="fa fa-youtube fa-lg"></i></a>
                        <a href="https://www.instagram.com/cdmperu2018/"><i class="fa fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        &copy; Copyright 2018 - cdm by amica                     
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer close -->

    <a href="#" id="back-to-top"></a>
    <div id="preloader">
        <div class="preloader1"></div>
    </div>
	</div>

	<div id="dropDownSelect1"></div>


                <!-- section close -->

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?v=3"></script> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcwCgMxYJZugbx1T_SlMxRzLh3YzgPG70&callback=initMap"
    type="text/javascript"></script>
    <script src="js/map.js"></script>
    <script src="js/designesia.js"></script>


    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>

</body>
</html>
