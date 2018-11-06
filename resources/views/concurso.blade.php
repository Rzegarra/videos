<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Convención de derecho minero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="Eventbiz is event and conference website template">
    <meta name="keywords" content="camp, conference, conference theme, event, event schedule, event website, event wordpress theme, exhibition, expo"> -->
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
                                <li><a href="{{ url('speaker') }}">Ponentes</a></li>
                                <li><a href="{{ url('index') }}">Calendario</a></li>
                                <li><a href="{{ url('index') }}">Contacto</a></li>
                                <li><a class="active" href="{{ url('concurso') }}">Concurso de Ensayos</a></li>
                                <li><a href="{{ url('inscripciones') }}">Inscripciones</a></li>
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
        <section id="section-speakers">
                <div class="container relative">
                    <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>Concurso Nacional De  <span class="id-color"> Redacción</span> de</h2><p></p> 
                                <h2><span class="id-color">Ensayos</span> En Derecho Minero</h2>
                                <hr></hr>
                        </div>
                        <div class="spacer-double"></div>
                        <div class="spacer-double"></div>
                    </div>
                        <div class="row">
                                
                                <div class="side">
                                    <div class="btn-group-vertical botones">
                                            <button class="btn op1 coll boton_activo" type="button" data-toggle="collapse" data-target="#op_1" aria-expanded="true" aria-controls="op_1">Presentación</button>
                                            <button class="btn op2 coll" type="button" data-toggle="collapse" data-target="#op_2" aria-expanded="true" aria-controls="op_2">Requisitos</button>
                                            <button class="btn op3 coll" type="button" data-toggle="collapse" data-target="#op_3" aria-expanded="true" aria-controls="op_3">Fases y Plazos</button>
                                            <button class="btn op4 coll" type="button" data-toggle="collapse" data-target="#op_4" aria-expanded="false" aria-controls="op_4">Bases y Reglametos</button>
                                            <button class="btn op6 coll" type="button" data-toggle="collapse" data-target="#op_6" aria-expanded="false" aria-controls="op_6">Inscribirse al Concurso</button>
                                            <button class="btn op5 coll" type="button" data-toggle="collapse" data-target="#op_5" aria-expanded="false" aria-controls="op_5">Premios y Reconocimientos</button>
                                    </div>
                                </div>
                                <div class="main">
                                        <div class="collapse multi-collapse" id="op_6">
                                                <div class="card card-body">
                                                        <div class="container-contact100" id="section-contact">

                                                                <div class="wrap-contact100">
                                                                    <form class="contact100-form validate-form" method="post" action="php/enviar2.php" enctype="multipart/form-data">
                                                                        <span class="contact100-form-title">
                                                                            INSCRIBIRSE PARA EL CONCURSO 
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
                                                                        <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                                                                            <input class="input100" type="text" name="university" placeholder="Universidad">
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
                                                                                    <i class="fa fa-camera m-r-6" aria-hidden="true"></i><input type="file" name="carnet" />carnet</div>
                                                                                
                                                                                
                                                                                
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
                                                        
                                                     
                                                </div>
                                            </div>
                                    <div class="collapse multi-collapse" id="op_1">
                                        <div class="card card-body">
                                            El II Concurso de redacción de Ensayos en Derecho Minero es una propuesta académica que forma parte de la III Convención de Derecho minero, en la que se busca que participen estudiantes de la carrera profesional de derecho del tercer año en delante de todas las universidades del país, dando a conocer sus perspectivas y opiniones sobre la actividad minera en nuestro país.
                                            <!-- <div class="spacer-half"></div>
                                            Dicha competencia es organizada por la Asociación Koritos de Arequipa y el Estudio Jurídico Soluciones Innovadoras SAC. (SLI). -->
                                            <div class="spacer-half"></div>
                                            Dicho concurso versará sobre los siguientes temas:
                                            <div class="spacer-half"></div>

                                            <ul style="list-style-type: circle">
                                                <li><i class="arrow_triangle-right"></i> Desnaturalización de las figuras Contractuales en el sector minero.
                                                <li><i class="arrow_triangle-right"></i> Delitos Ambientales y Minería Ilegal.
                                                <li><i class="arrow_triangle-right"></i> Conflicto y propuestas de solución en minería.
                                                <li><i class="arrow_triangle-right"></i> Riesgos de la Minería Mundial y su Impacto en el Perú.
                                                <li><i class="arrow_triangle-right"></i> Minería Actividad de desarrollo, explotación y beneficio.
                                                <li><i class="arrow_triangle-right"></i> Minería Artesanal e Informal en el Perú.

                                            </ul>
                                             
                                        </div>
                                    </div>
                                    <div class="collapse multi-collapse" id="op_2">
                                        <div class="card card-body">
                                            Estudiantes de la Carrera Profesional de Derecho desde el tercer año, en adelante, de cualquier universidad del País. Todos los participantes deberán acreditar este supuesto, al momento de la inscripción.
                                            <div class="spacer-half"></div>
                                            Realizar la Inscripción virtualmente en la pestaña de "inscribirse al concurso", consignando de manera obligatoria todos los datos solicitados.
                                        </div>
                                    </div>
                                    <div class="collapse multi-collapse" id="op_3">
                                        <div class="card card-body">
                                            <div style="text-decoration: underline;"> INSCRIPCIÓN:</div> Las inscripciones se realizarán desde 01 de julio hasta el 29 de julio de 2018 hasta las 23:59 hrs.
                                            <div class="spacer-half"></div>
                                            <div style="text-decoration: underline;">PRESENTACIÓN DE ENSAYO:</div> El ensayo deberá ser subido hasta el día 19 de agosto de 2018 hasta las 23:59 hrs.
                                            <div class="spacer-half"></div>
                                            <div style="text-decoration: underline;">PUBLICACIÓN DE RESULTADOS:</div> Lunes 03 de septiembre de 2018.
                                            <div class="spacer-half"></div>
                                            <div style="text-decoration: underline;">SUBSANACIÓN DE OBSERVACIONES PARA SEMIFINALISTAS:</div> Se realizará hasta el día 07 de septiembre de 2018 hasta las 23:59 hrs.
                                            <div class="spacer-half"></div>
                                            <div style="text-decoration: underline;">PUBLICACIÓN DE RESULTADOS FINALES:</div> Será el día 10 de septiembre de 2018.
                                        </div>
                                    </div>
                                    <div class="collapse multi-collapse" id="op_4">
                                        <div class="card card-body">
                                            Descarga las Bases y Reglamentos en el siguiente Link  : <a class="nubeD" href="documento/bases y reglamento.pdf" download="bases y reglamento"><i class="icon_cloud-download id-color size40 mb20"></i></a>
                                            <div class="spacer-double"></div>

                                            Para poder Inscribirse:
                                            <ul style="list-style-type: circle">
                                                <li><i class="icon_check"></i> Ser estudiante de la Carrera Profesional de Derecho del tercer año en adelante.
                                                <li><i class="icon_check"></i> Todos los participantes deberán acreditar casa de estudios.
                                                <li><i class="icon_check"></i> Agregar los documentos necesarios, de lo contrario no se tendrá en cuenta la participación de concurso.

                                            </ul>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="collapse multi-collapse" id="op_5">
                                        <div class="card card-body">
                                            <u>Primer puesto:</u>  
                                            <ul>
                                                <li><i class="arrow_triangle-right"></i>Exposición del Ensayo en la Convención.</li>
                                                <li><i class="arrow_triangle-right"></i>Reconocimiento y Certificación por parte de la Asociación Koritos, la Facultad de Derecho de la Universidad Católica San Pablo y la Facultad de Ciencias Jurídicas y Empresariales de la Universidad de Católica de Santa María.
                                                </li>
                                                <li><i class="arrow_triangle-right"></i>Dos entradas generales - III Convención de Derecho Minero                            </li>
                                                <li><i class="arrow_triangle-right"></i>s/. 1000.00  (Mil con 00/100 soles).
                                                </li>
                                            </ul>
                                            <div class="spacer-half"></div>
                                             
                                            
                                            <div class="spacer-half"></div>
                                            <u>Segundo puesto:</u> 
                                            <ul>
                                                <li><i class="arrow_triangle-right"></i>Exposición del Ensayo en la Convención.</li>
                                                <li><i class="arrow_triangle-right"></i>Reconocimiento y Certificación por parte de la Asociación Koritos, la Facultad de Derecho de la Universidad Católica San Pablo y la Facultad de Ciencias Jurídicas y Empresariales de la Universidad de Católica de Santa María.</li>
                                                <li><i class="arrow_triangle-right"></i>Una entrada general- III Convención de Derecho Minero</li>
                                                <li><i class="arrow_triangle-right"></i>s/. 500.00 (Quinientos con 00/100 soles).
                                                </li>
                                            </ul>
                                            <div class="spacer-half"></div>
                                            <u>Tercer puesto:</u> 
                                            <ul>
                                                <li><i class="arrow_triangle-right"></i>Una entrada general - III Convención de Derecho Minero 
                                                </li>
                                                <li><i class="arrow_triangle-right"></i>-	Reconocimiento y Certificación por parte de la Asociación Koritos, la Facultad de Derecho de la Universidad Católica San Pablo y la Facultad de Ciencias Jurídicas y Empresariales de la Universidad de Católica de Santa María.
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </section>

        



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
        $(".op1").on('click', function(){
            $(".collapse").collapse('hide');
            $("#op_1").collapse('show');
            $(".op4").removeClass("boton_activo");
            $(".op2").removeClass("boton_activo");
            $(".op3").removeClass("boton_activo");
            $(".op5").removeClass("boton_activo");
            $(".op1").addClass("boton_activo");
            

        });
        $(".op2").on('click', function(){
            $(".collapse").collapse('hide');
            $("#op_2").collapse('show');
            $(".op1").removeClass("boton_activo");
            $(".op4").removeClass("boton_activo");
            $(".op3").removeClass("boton_activo");
            $(".op5").removeClass("boton_activo");
            $(".op2").addClass("boton_activo");
        });
        $(".op3").on('click', function(){
            $(".collapse").collapse('hide');
            $("#op_3").collapse('show');
            $(".op1").removeClass("boton_activo");
            $(".op2").removeClass("boton_activo");
            $(".op4").removeClass("boton_activo");
            $(".op5").removeClass("boton_activo");
            $(".op3").addClass("boton_activo");
        });
        $(".op4").on('click', function(){
            $(".collapse").collapse('hide');
            $("#op_4").collapse('show');
            $(".op1").removeClass("boton_activo");
            $(".op2").removeClass("boton_activo");
            $(".op3").removeClass("boton_activo");
            $(".op5").removeClass("boton_activo");
            $(".op4").addClass("boton_activo");
        });
        $(".op5").on('click', function(){
            $(".collapse").collapse('hide');
            $("#op_5").collapse('show');
            $(".op1").removeClass("boton_activo");
            $(".op2").removeClass("boton_activo");
            $(".op3").removeClass("boton_activo");
            $(".op4").removeClass("boton_activo");
            $(".op5").addClass("boton_activo");
        });
    </script>


    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-23581568-13');
    </script>

</body>
</html>
