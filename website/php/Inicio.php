<?php
// Iniciar la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link href="Recursos/Css/bootstrap-4.3.1-dist/bootstrap.min.css" rel="stylesheet" />
    <link href="Recursos/Css/Estilos.css" rel="stylesheet" />
    <title>Denuncia</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light h-menu">
            <a class="navbar-brand" href="Inicio.php">
                <img class="h-logo" src="Recursos/Imagenes/defe.png" alt="GREEN" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="Inicio.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Denuncia.php" tabindex="-1">Denuncias</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-success btn-lg" href="#" tabindex="-1" data-toggle="modal" data-target="#exampleModalCenter">Ingresar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" tabindex="-1">
                            <?php

                            ?>
                            <img src="Recursos/Imagenes/icono_usuario.png" alt="Icono de usuario" />
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="CerrarSesion.php">Cerrar sesión</a>
                        </div>
                    </li>
                    <?php
                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <article class="container b-contenedor">
        <div class="row">
            <div class="col-sm-6 t-inicio">
                <h1 class="font-weight-bold">Basta de callar, no al acoso sexual!</h1>
                <h3 class="font-weight-bold">No te dejes de intimidar, sal con fuerza.</h3>
                <a href="Denuncia.php" class="btn btn-info btn-lg font-weight-bold">
                    Realiza tu denuncia ¡Ahora!
                </a>
            </div>
            <div class="col-sm-6">
                <img class="img-paisaje" src="Recursos/Imagenes/image_1.png" alt="Paisaje ilustrado" />
            </div>
        </div>
    </article>
    <div class="separador-50"></div>
    <article class="b-cifras text-white">
        <div class="container">
            <div class="separador-30"></div>
            <div class="text-center">
                <h1 class="h1">¡La union hace la fuerza!</h1>
            </div>
            <div class="separador-30"></div>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <h5>Hemos recibido</h5>
                    <div class="separador-20"></div>
                    <h1 class="font-weight-bold">
                        <a href="ListaDenuncias.php" class="text-white">

                        </a>
                    </h1>
                    <div class="separador-20"></div>
                    <h4 class="font-weight-bold">
                        <a href="ListaDenuncias.php" class="text-white">
                            Denuncias por Hostigamiento sexual
                        </a>
                    </h4>
                </div>
                <div class="col-sm-4 text-center">
                    <h5>Activos</h5>
                    <div class="separador-20"></div>
                    <h1 class="font-weight-bold">20</h1>
                    <div class="separador-20"></div>
                    <h4 class="font-weight-bold">Unidas #Siempre</h4>
                </div>
                <div class="col-sm-4 text-center">
                    <h5>Centro federado de Economia</h5>
                    <div class="separador-20"></div>
                    <h1 class="font-weight-bold">11</h1>
                    <div class="separador-20"></div>
                    <h4 class="font-weight-bold">Organizadores</h4>
                </div>
            </div>
            <div class="separador-30"></div>
        </div>
    </article>
    <div class="separador-50"></div>
    <article class="container b-comoayudar">
        <div class="row">
            <div class="col-sm-6">
                <div class="separador-30"></div>
                <h1 class="font-weight-bold">¿Qué podemos denunciar?</h1>
                <div class="separador-20"></div>
                <p>Es importante tener en cuenta que cualquier forma de acoso sexual es una violación de los derechos humanos y puede ser denunciada. </p>
                <div class="separador-30"></div>
                <a href="Denuncia.php" class="btn btn-lg btn-info">Realiza tu denuncia ¡Ahora!</a>
            </div>
            <div class="col-sm-3 text-center">
                <img src="Recursos/Imagenes/verbal_fisico.png" alt="Delito mala gestión de residuos" />
                <p class="font-weight-bold">Acoso sexual verbal
                </p>
                <p class="text-justify">Se refiere a comentarios, insinuaciones o expresiones verbales de naturaleza sexual no deseadas, etc...</p>
            </div>
            <div class="col-sm-3 text-center">
                <img src="Recursos/Imagenes/acoso_fisico.png" alt="Delito delincuencia medioambiental" />
                <p class="font-weight-bold">Acoso sexual físico</p>
                <p class="text-justify">Involucra contacto físico no deseado con connotaciones sexuales.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="Recursos/Imagenes/verbal_fisico.png" alt="Delito de contaminación" />
                <p class="font-weight-bold">Acoso sexual visual o no verbal</p>
                <p class="text-justify">Se refiere a gestos, miradas o exposiciones de contenido sexual de manera inapropiada</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="Recursos/Imagenes/verbal_fisico.png" alt="Delito contra la vida animal" />
                <p class="font-weight-bold">Acoso sexual psicológico</p>
                <p class="text-justify">Una grave amenaza a la supervivencia de la biodiversidad del planeta, las especies más afectadas por el tráfico ilegal son aves tropicales, reptiles, arácnidos, monos, etc...</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="Recursos/Imagenes/verbal_fisico.png" alt="Delitos forestales" />
                <p class="font-weight-bold">Acoso sexual en línea (ciberacoso sexual)</p>
                <p class="text-justify">Sucede en plataformas digitales o redes sociales...</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="Recursos/Imagenes/verbal_fisico.png" alt="Delitos pesqueros" />
                <p class="font-weight-bold">Acoso sexual laboral o académico</p>
                <p class="text-justify">Se da en contextos de jerarquía o poder, como en el trabajo o en instituciones educativas.</p>
            </div>
        </div>
    </article>
    <div class="separador-50"></div>
    <article class="b-boletin text-white">
        <div class="container">
            <div class="separador-30"></div>
            <div class="row">
                <div class="col-sm-9">
                    <h4>Bienvenido a nuestra plataforma, un espacio seguro donde puedes reportar casos de acoso sexual y hostigamiento de manera confidencial y segura. Sabemos lo difícil que puede ser dar este paso, pero no estás solo. Aquí podrás describir lo sucedido, adjuntar pruebas si lo deseas y proporcionar únicamente tu código institucional o DNI para validar tu reporte.</h4>
                    <div class="separador-20"></div>
                    <p class="font-weight-bold">¡Regístrate en nuestra plataforma!</p>
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="email" class="txt-boletin form-control text-white" placeholder="Ingresa tu correo electrónico" />
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <a class="btn btn-lg btn-light" data-toggle="modal" data-target="#exampleModalCenter" href="#">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <img src="Recursos/Imagenes/paz.jpg" alt="GREEN Boletín" />
                </div>
                <div class="separador-30"></div>
            </div>
        </div>
    </article>
    <div class="separador-50"></div>
    <article class="b-movimientos container">
        <div class="text-center">
            <h1>!El silencio no es consentimiento. ¡Hazte escuchar!</h1>
        </div>
        <div class="row justify-content-center">
            <div class="movimientos-carousel col-sm-6">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="Recursos/Imagenes/movimiento_acoso.png" class="d-block w-100" alt="Movimiento planeta">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>#BastaDeAcoso</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="Recursos/Imagenes/movimiento_actuemos.jpg" class="d-block w-100" alt="Movimiento osos polares">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>#RespetoAnteTodo
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="Recursos/Imagenes/movimiento_uni.jpg" class="d-block w-100" alt="Movimiento plástico">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>#DenunciaElAcoso</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <div class="separador-40"></div>
    <footer>
        <div class="f-pie container">
            <div class="row">
                <div class="col-sm-12">
                    <center><a href="Inicio.php" class="btn btn-link text-dark font-weight-bold">Inicio</a>
                        <a href="Denuncia.php" class="btn btn-link text-dark font-weight-bold">Denuncias</a>
                        <strong class="btn text-dark font-weight-bold">Hemos recibido <span class="contador-visitas">...</span> visitas de pesonas interasadas en ayudar al planeta!</strong>
                    </center>
                </div>
                <div class="col-sm-6">
                    <div class="separador-50"></div>
                    <a href="Inicio.php" class="btn btn-link logo">
                        <img src="Recursos/Imagenes/defe.png" alt="GREEN Logo" />
                    </a>
                    <a href="#" class="btn btn-link text-dark">Política de Privacidad</a>
                    <a href="#" class="btn btn-link text-dark">Términos y Condiciones</a>
                </div>
                <div class="col-sm-6 text-right redes-sociales">
                    <div class="separador-50"></div>
                    <div class="separador-10"></div>
                    Conéctate con nosostros:
                    <img src="Recursos/Imagenes/icono_twitter.png" alt="GREEN Facebook" />
                    <img src="Recursos/Imagenes/icono_instagram.png" alt="GREEN Instagram" />
                    <img src="Recursos/Imagenes/icono_facebook.png" alt="GREEN Facebook" />
                </div>
            </div>
            <div class="separador-30"></div>
            <center>
                <p class="t-derechos">© 2025 Derechos reservados, una plataforma de ayuda contra la lucha del acoso..</p>
            </center>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="text-center">
                        <img src="Recursos/Imagenes/defe.png" alt="GREEN Logo" />
                        <div class="separador-10"></div>
                        <p class="t">Nuestro compromiso es proteger tu privacidad y garantizar que tu denuncia llegue a las autoridades correspondientes para que se tomen las medidas necesarias.</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="separador-20"></div>
                    <!-- Botón para iniciar sesión con Facebook -->
                    <button class="btn btn-large btn-info btn-facebook" onclick="window.location.href='registros/Facebook/sesion_fb.php'">Iniciar con Facebook</button>
                    <div class="separador-10"></div>
                    <!-- Botón para iniciar sesión con Twitter -->
                    <button class="btn btn-large btn-twitter" onclick="window.location.href='registros/twitter/sesion_twitter.php'">Iniciar con Twitter</button>
                    <div class="separador-10"></div>
                    <!-- Botón para iniciar sesión con Google -->
                    <button class="btn btn-large btn-google" onclick="window.location.href='registros/google/sesion_google.php'">Iniciar con Google</button>
                    <div class="separador-10"></div>
                    <!-- Botón para iniciar sesión con correo electrónico -->
                    <a href="registros/register_facebook.php"><button id="btnLoginEmail" class="btn btn-large btn-email" data-toggle="modal" data-target="#modalLogin">Iniciar con correo electrónico</button></a>
                    <div class="separador-20"></div>
                    <!-- Enlace para "Olvidé mi contraseña" -->
                    <a href="/website/php/Gracias.php" data-toggle="modal" data-target="#modalResetPassword">Olvidé mi contraseña</a>
                    <div class="separador-30"></div>
                </div>

                <!-- Modal de Inicio de Sesión con Correo Electrónico -->
                <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLoginTitle">Iniciar Sesión</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formLogin" method="POST" action="login.php">
                                    <div class="form-group">
                                        <label for="loginEmail">Correo Electrónico</label>
                                        <input type="email" name="email" id="loginEmail" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="loginPassword">Contraseña</label>
                                        <input type="password" name="password" id="loginPassword" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal de Registro de Usuario -->
                <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="modalRegistroTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalRegistroTitle">Registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formRegistro" method="POST" action="register.php">
                                    <div class="form-group">
                                        <label for="registerNombre">Nombre</label>
                                        <input type="text" name="nombre" id="registerNombre" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="registerEmail">Correo Electrónico</label>
                                        <input type="email" name="email" id="registerEmail" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="registerTelefono">Teléfono</label>
                                        <input type="text" name="telefono" id="registerTelefono" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="registerPassword">Contraseña</label>
                                        <input type="password" name="password" id="registerPassword" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="registerPasswordConfirm">Confirmar Contraseña</label>
                                        <input type="password" name="password_confirm" id="registerPasswordConfirm" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal de Recuperación de Contraseña -->
                <div class="modal fade" id="modalResetPassword" tabindex="-1" role="dialog" aria-labelledby="modalResetPasswordTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalResetPasswordTitle">Recuperar Contraseña</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formResetPassword" method="POST" action="reset_password.php">
                                    <div class="form-group">
                                        <label for="resetEmail">Correo Electrónico</label>
                                        <input type="email" name="email" id="resetEmail" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-warning btn-block">Enviar Enlace de Recuperación</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <script src="Recursos/Javascript/jquery-3.4.1.min.js"></script>
                <script src="Recursos/Javascript/popper.min.js"></script>
                <script src="Recursos/Javascript/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
                <script src="Recursos/Javascript/Scripts.js"></script>
                <script src="https://kit.fontawesome.com/c3e49213ce.js" crossorigin="anonymous"></script>
</body>

</html>