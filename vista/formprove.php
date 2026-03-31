<!DOCTYPE html>
<html lang="en">
<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>InstaTech</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../css/style7.css">
   <link rel="stylesheet" href="../css/formsinsta7.css">
   <link rel="stylesheet" href="../css/cuentas7.css">
   <link rel="shortcut icon" href="../images/logooo.png">
   <!-- Responsive-->
   <link rel="stylesheet" media="all" href="../css/styleeforms.css" />
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   
   <!-- owl stylesheets -->

</head>
   <body>
      <!-- header section start -->
      <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="logo"><a href="../index.php"><img style="width: 25%; " src="../images/logooo.png"></a></div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Inicio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="../vista/quienessomos.php">¿Quiénes Somos?</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="../vista/formusuario.php">Ver catálogo</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="../vista/formusuario.php">Inicia sesión</a>
               </li>
               <li class="nav-item">
                  <!-- Lista -->
                  <div id="polo">
                  <ul>
                     <li class="open_submenu">
                        <a  class="nav-link" href="#"><img id="lo18" src="../images/lo18.png"></a>
                        <div class="submenu">
                           <ul>
                              <li><a id="mpv" href="../vista/formtec.php">Cuenta de Técnico</a></li>
                              <li><a id="mpv" href="../vista/formusuario.php">Cuenta de Cliente</a></li>

                           </ul>
                        </div>
                     </li>
                  </ul>
              </div>
               <script type="text/javascript">

                var subMenu = document.querySelector ('.submenu');
                var openSubMenu = document.querySelector ('.open_submenu');

                openSubMenu.addEventListener('click', function() {
                   subMenu.classList.toggle('show');
                })

                document.addEventListener('click', function(e) {
                  if (subMenu.classList.contains('show')
                     && !subMenu.contains(e.target)
                     && !openSubMenu.contains(e.target)) {
        
                        subMenu.classList.remove('show');
                                          }
                                       });
               </script>
               <!-- LISTA -->
               </li>
            </ul>
         </div>
      </nav>
   </div>

      <!-- header section end -->


      <div class="client_section layout_padding">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <h1 class="client_taital">Cuenta de Proveedor</h1>
                  <div class="client_section_2">
                     <div class="client_left">
                  <div onclick="location.href='../vista/formprove.php';" class="box_main active"  >
                     <div class="icon_1"><img style="width: 50%; " src="../images/prove.png"></div>
                     <h4 class="daily_text_1">Cuenta de Proveedor</h4>
                  </div>
                     </div>
                     <div class="client_right1">
                     <p class="client_textit">Con la cuenta de proveedor tienes la posibilidad de trabajar junto <br><br> a nosotros, surtiendo el cátalogo con tus productos <br><br> tecnológicos y vendiéndolos de una forma mucho mas fácil para tus <br><br> clientes. <br><br>Trabaja con nosotros.</p>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
      </div>
   </div>
      
   <!-- dsasass --> 


   <main id="forty">
      <div class="ffsi">
        <div class="box">
            <div class="form sign_in">
                <h3>Inicia sesión <br> como proveedor</h3>
                <span>Usa tu cuenta ya creada</span>
                

                <form action="../controlador/iniciarSesionProv.php" method="post" id="form_input">

                    <div class="type">
                    <input  type="text" name="Usuario" placeholder="Usuario"  required>
                    </div>

                    <div class="type">
                    <input  type="password" name="Contrasena" placeholder="Contraseña" required >
                    </div>


                    <button class="btn bkg" type="submit">Iniciar Sesión</button> 
                </form>
            </div>
    
            <div class="form sign_up">
                <h3>Registrarse</h3>
                <span>Crea una cuenta nueva</span>



                <form action="../controlador/registroProv.php" method="post" id="form_input">

                    <div class="type">
                      <input type="text" name="Usuario" placeholder="Nombre de Usuario" required>
                    </div>

                    <div class="type">
                      <input type="password" name="Contrasena" placeholder="Contraseña" required>
                    </div>

                    <div class="type">
                      <input type="email" name="CorreoDeEmpresa" placeholder="Correo de empresa" required>
                    </div>
                    

                    <button type="submit" class="btn bkg">Regístrate</button>
                </form>
            </div>
        </div>

        <div class="overlay">
            <div class="page page_signIn">
                <h3>Bienvenido de nuevo!</h3>
                <p>Para continuar, inicia sesión con la informacion proporcionada por los administradores.</p>
                <button class="btn btnSign-in">Regístrate <i class="bi bi-arrow-right"></i></button>
            </div>

            <div class="page page_signUp">
                <h3>Hola Amigo!</h3>
                <p>Introduce tus datos personales y comienza con nosotros.</p>

                <button class="btn btnSign-up">
                    <i class="bi bi-arrow-left"></i>Inicia sesión</button>
            </div>
        </div>
    </div>
    

    <!-- link script -->
    <script type="text/javascript">
    const ffsi = document.querySelector('.ffsi')
    const btnSignIn = document.querySelector('.btnSign-in')
    const btnSignUp = document.querySelector('.btnSign-up')

      btnSignIn.addEventListener('click', () => {
    ffsi.classList.add('active')
      })

      btnSignUp.addEventListener('click', () => {
   ffsi.classList.remove('active')
       })
     </script>
     </main>

 
     <div class="footer_section layout_padding">
   <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img id="lgg" src="../images/logooo.png" alt="Logo de InstaTech">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2 id="snf" >SOBRE NOSOTROS</h2>
                <p id="pe"> InstaTech es un proyecto el cual busca ser una página de mercadeo Nacional e Internacional en el ámbito de la tecnología y abarcando casi toda esta área</p>
                <p id="pe"> Para saber más de nosotros puedes hacerlo dando <a id="sb" href="../vista/quienessomos.php">click aquí</a></p>
            </div>

            
            <div class="box">
                <h2 id="rsf" >SÍGUENOS Y CONTÁCTANOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/profile.php?id=61552785295235" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/IntaTech_Tecno" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/instatech_oficial/" class="fa fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UCWIyZyGbbpICBHqXvXXvZgA" class="fa fa-youtube"></a>
                    <p id="titi" >Cl 65 #87-74, Robledo, Medellín, Robledo, Medellín, Antioquia<br><br>+57 301 75 23725 <br><br> samuelandresmarinalvares@gmail.com</p>

                </div>
            </div>
        </div>
        <hr>
        <div class="grupo-2">
            <small>&copy; 2023 <b>InstaTech</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
     </div>
   <!-- footer section end -->

   <!-- Javascript files-->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/bootstrap.bundle.min.js"></script>
   <script src="../js/jquery-3.0.0.min.js"></script>
   <script src="../js/plugin.js"></script>
   <!-- sidebar -->
   <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../js/custom.js"></script>
   <!-- javascript -->
   <script src="../js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
