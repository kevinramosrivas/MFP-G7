<?php
    session_start();

    if(!isset($_SESSION['datos_usuario']) || !$_SESSION['role']=='admin') {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar_Tipo_Usuario</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
        <div class="row">
            <div class="col-md-5 p-5 fst-quote-container text-white min-h-100vh">
                <div class="container">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <img src="assets/img/admin_prueba.png" alt="admin-foto" />
                            <div class="text-white ms-3">
                                <p class="fw-bold fst-italic mb-0">Administrador</p>
                                <p class="mb-0"> <?php echo($_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'])?> </p>
                            </div>
                        </div>

                        <div class="text-center mt-5">
                            <div class="d-flex justify-content-center align-items-center"> 
                                <i class="fas fa-graduation-cap logo text-dark"></i>
                                <h2 class="fw-lighter ms-3 fw-bold mb-0 fst-italic text-decoration-underline text-dark">E. SAN MARCOS</h2>       
                            </div>
                            <div>
                                <p class="pt-4 lh-lg mb-0">
                                    El colegio San Marcos es uno de los mejores colegios en Lima reconocido por la educación personalizada
                                    y centrada en el alumno. La misión del colegio es formar personas íntegras, responsables, sensibles, 
                                    seguras de sí mismas, con pasión por el aprendizaje y que sean miembros comprometidos y activos en 
                                    una comunidad global.
                                </p>
                            </div>
                            <div class="text-center mt-5">
                                <p class="text-white fst-italic">¿Ayuda?</p>
                                <button class="btn btn-light w-100 mx-auto py-3 fw-bold">DOCUMENTACIÓN</button>
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
            <div class="col-md-7 min-h-100vh d-flex align-items-center">
                <div class="container py-5">
                    <div class="d-flex justify-content-between align-self-start align-items-center ">
                        <div id="cerrarSesion" class="d-flex align-items-center mb-5 pointer">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                            </svg>
                    
                            <a href="admin_principal.php" class="mb-0 ms-2 text-secondary">Volver</a>
                        </div>
                        <div id="volver" class="d-flex align-items-center mb-5 pointer d-none">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#8692A6"/>
                            </svg>
                    
                            <p class="mb-0 ms-2 text-secondary">Volver</p>
                        </div>
                        <div class="d-flex flex-column justify-content-end mb-5 me-lg-5">
                            <p style="font-size: 13px; color: #bdbdbd;" class="mb-0 me-lg-5">Cuenta Administrativa</p>
                            <p class="text-secondary mb-0 text-end me-lg-5" id="titlePhase">Menu Principal</p>
                        </div>
                    </div>
                    
                    <div class="container mx-lg-5" id="containerLoginPageRight">
                        <div>
                            <h5 class="fw-bold fs-4" id="titleLoginPage">¡Bienvenido, Administrador!</h5>
                            <p class="text-secondary" id="textLoginPage">Hola, <?php echo($_SESSION['datos_usuario']['nombres'].' '.$_SESSION['datos_usuario']['apellidos'])?> seleccione el tipo de usuario que quiere crear.</p>
                        </div>
                        <div class="row mx-auto" id="containerBtnRoles">
                            <a href="registro_padre_alumno.php">
                                <div href="#" id="btnCrearAlumno" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                    <div class="bg-1st p-3 pb-2 ms-2 me-4 polygon">
                                        <i class="far fa-user fs-5 text-white"></i>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-bold mb-0">ALUMNO</p>
                                            <p class="text-secondary fs-6">Crear un nuevo usuario tipo alumno</p>
                                        </div>
                                        <div class="pe-3 d-none arrow">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="registro_docente.php">
                                <div href="#" id="btnCrearDocente" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                    <div class="bg-1st p-3 pb-2 ms-2 me-4 polygon">
                                        <i class="fas fa-suitcase fs-5 text-white"></i>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between align-items-center">
                                        <div>
                                            <p class="fw-bold mb-0">DOCENTE</p>
                                            <p class="text-secondary fs-6">Crear un nuevo usuario tipo docente</p>
                                        </div>
                                        <div class="pe-3 d-none arrow">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                            </svg>
                                        </div> 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/loginLogic.js"></script>
        <!--Fotter-->
         <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- FontAwesome para iconos -->
        <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
    </body>
</html>