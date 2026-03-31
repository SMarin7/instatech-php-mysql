
<head>
<link rel="shortcut icon" href="img/iconoAdmin.png" type="image/x-icon">
<link rel="stylesheet" href="css/crudsAdmin.css">

 <!-- bootstrap css -->
 <link rel="shortcut icon" href="../../images/logooo.png">
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->


   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>



<section class="contenidoGeneral">
<body>



<header class="menu-wrap">
   <nav class="navegacion">
				<a class="salir" href="../../controlador/CerrarSesionAdmin.php"><box-icon name='exit' type='solid' ></box-icon></a> 
      <div class="admin3">
      <img id="imagenA" src="img/Admin-Profile.png" alt=""> 
      <p class="Ad"><b>Administrador</b></p>
      </div>
   </nav>   
</header>

<div class="TABLAS">

<div>
  <header>
 <br><br><br>
   <div class="Tablas">
   
   <h1 class="tituloTa">ADMINISTRAR TABLAS</h1>

  </div>

    <div class="row">
               <div class="proveedor">
                  <div onclick="location.href='tablaProve.php';"  class="box_main ">
                     <div class="icon_1"><img style="width: 67%; " src="img/prove.png"></div>
                     <h4 class="daily_text_1"> Tabla Proveedor</h4>
                  </div>
               </div>
               <div class="tecnico">
                  <div onclick="location.href='tablaTecn.php';" class="box_main "  >
                     <div class="icon_1"><img style="width: 57%; " src="img/tec.png"></div>
                     <h4 class="daily_text">Tabla <br> Técnico </h4>
                  </div>
               </div>
               <div class="cliente">
                  <div onclick="location.href='tablaClien.php';"  class="box_main ">
                     <div class="icon_1"><img style="width: 55%; "  src="img/clien.png"></div>
                     <h4 class="daily_text_1">Tabla <br> Cliente</h4>
                  </div>
               </div>
            </div> 
    </div>
  </header>
</div>

</div>
</div>

</body>
</section>
