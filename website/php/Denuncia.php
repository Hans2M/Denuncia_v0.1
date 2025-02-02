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
                <img class="h-logo" src="Recursos/Imagenes/defe.png" alt="GREEN Logo" />
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
                    <?php
                    if (empty($_SESSION["sesionusuario"])) {
                    ?>
                        <li class="nav-item">
                            <a class="btn btn-success btn-lg" href="#" tabindex="-1" data-toggle="modal" data-target="#exampleModalCenter">Ingresar</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" tabindex="-1">
                                <?php
                                echo ($_SESSION["sesionusuario"]);
                                ?>
                                <img src="Recursos/Imagenes/icono_usuario.png" alt="Icono de usuario" />
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="CerrarSesion.php">Cerrar sesión</a>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </header>

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<article class="f-denuncia">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">¡Denuncia al acoso!</h1>
            <h2>Esta plataforma está para facilitarte tu denuncia.</h2>
        </div>
    </div>

    <div class="container">
        <form id="denuncia" method="POST" action="guardar_denuncia.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="radio" id="datos_personales" name="tipodenuncia" value="0" /> <label for="datos_personales">Datos personales</label>
                <input type="radio" id="anonimo" name="tipodenuncia" value="1" checked /> <label for="anonimo">Anónimo</label>
            </div>

            <div id="formulario-completo">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellidos</label>
                            <input id="apellido" name="apellido" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo electrónico</label>
                            <input id="correo" name="correo" type="email" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input id="direccion" name="direccion" type="text" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="identificacion">No. Identificación</label>
                            <input id="identificacion" name="identificacion" type="number" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="denuncia">Denuncia</label>
                            <textarea id="denuncia" name="denuncia" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="archivos">Adjuntar evidencia</label>
                            <input type="file" class="form-control" id="archivos" name="archivos[]" multiple />
                        </div>
                    </div>
                </div>
            </div>

            <div id="formulario-anonimo" style="display: none;">
                <div class="form-group">
                    <label for="correo-anonimo">Correo Universitario</label>
                    <input id="correo-anonimo" name="correo_anonimo" type="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="dni-anonimo">DNI</label>
                    <input id="dni-anonimo" name="dni_anonimo" type="number" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="nombre-anonimo">Nombre</label>
                    <input id="nombre-anonimo" name="nombre_anonimo" type="text" class="form-control" />
                </div>
            </div>

            <div class="form-group text-center">
                <input type="checkbox" id="acepto" required /> <label for="acepto">Acepto términos y condiciones.</label>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-info">Enviar</button>
            </div>
        </form>
    </div>
</article>

<script>
    $(document).ready(function () {
        $('input[name="tipodenuncia"]').on('change', function () {
            if ($('#datos_personales').is(':checked')) {
                $('#formulario-completo').show();
                $('#formulario-anonimo').hide();
            } else {
                $('#formulario-completo').hide();
                $('#formulario-anonimo').show();
            }
        });
    });
</script>

</body>
</html>


    <div class="separador-40"></div>
    <footer>
        <div class="f-pie container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="Inicio.php" class="btn btn-link text-dark font-weight-bold">Inicio</a>
                    <a href="Denuncia.php" class="btn btn-link text-dark font-weight-bold">Denuncias</a>
                    <strong class="btn text-dark font-weight-bold">Hemos recibido <span class="contador-visitas">...</span> visitas de pesonas interasadas en ayudar al planeta!</strong>
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
            <center><p class="t-derechos">© 2025 Derechos reservados, una plataforma de ayuda contra la lucha del acoso..</p></center>
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
                    <button class="btn btn-large btn-info btn-facebook">Iniciar con Facebook</button>
                    <div class="separador-10"></div>
                    <button class="btn btn-large btn-twitter">Iniciar con Twitter</button>
                    <div class="separador-10"></div>
                    <button class="btn btn-large btn-google">Iniciar con Google</button>
                    <div class="separador-10"></div>
                    <button id="btnLoginEmail" class="btn btn-large btn-email">Iniciar con Email</button>
                    <div class="separador-20"></div>
                    <a href="#">Olvidé mi contraseña</a>
                    <div class="separador-30"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
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
                    <form id="formLogin" method="post" action="#">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="btnGroupAddon">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <input type="email" name="correoelectronico" required class="form-control" placeholder="Correo electrónico" aria-label="Input group example" aria-describedby="btnGroupAddon" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" id="btnGroupAddon">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                                <input type="password" name="clave" required class="form-control" placeholder="Contraseña" aria-label="Input group example" aria-describedby="btnGroupAddon" />
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-info">Iniciar sesión</button>
                        </div>
                        <div id="msgLoginError" class="form-group alert alert-danger" role="alert" style="display: none;">
                            Usuario o clave incorrectos.
                        </div>
                        <div class="separador-10"></div>
                        Aún no tengo una cuenta, <button type="button" class="btn btn-link" id="btnRegistrarme">registrarme</button>
                    </form>
                    <div class="separador-30"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
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
                    <form id="formRegistro" method="post" action="">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="nombre" required class="form-control" placeholder="Nombre de usuario" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-at"></i>
                                    </div>
                                </div>
                                <input type="email" name="correoelectronico" required class="form-control txt-email" placeholder="Correo electrónico" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="telefono" required class="form-control txt-phone" placeholder="Teléfono" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                                <input type="password" name="clave" required class="form-control" placeholder="Contraseña" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                                <input type="password" name="claveconfirmar" required class="form-control" placeholder="Confirmar contraseña" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="acepto" id="acepto" required />
                            <label for="acepto">Acepto los términos y condiciones</label>
                        </div>
                        <div id="msgLoginRegistro" class="form-group alert alert-danger" role="alert" style="display: none;">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-info">Registrarme</button>
                        </div>
                        <div class="separador-10"></div>
                        Ya tengo una cuenta, <button type="button" class="btn btn-link" id="btnIrLogin">Iniciar sesión</button>
                        <form>
                            <div class="separador-30"></div>
                </div>
            </div>
        </div>
    </div>



    <script src="Recursos/Javascript/jquery-3.4.1.min.js"></script>
    <script src="Recursos/Javascript/popper.min.js"></script>
    <script src="Recursos/Javascript/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
    <script src="Recursos/Javascript/lodash.min.js"></script>
    <script src="Recursos/Javascript/Scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDffOY9ydazyFX6Nd7ytjFH9djys3unB2c&libraries=places" async defer></script>
    <script src="https://kit.fontawesome.com/c3e49213ce.js" crossorigin="anonymous"></script>
</body>

</html>