<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Integral Inmobiliaria</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    


</head>
<body style="background-color:#DFDFDF;">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <span class="logo"><img src="Gestion Inmobiliaria.jpg" ></span>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Alquileres.html">Alquileres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</header>    
    
<main>

    <section id="inicio">
    <div class="contenedor">
    <img src="1.jpg">
    </div>  
    </section>

    <section id="Servicios">
       
   <div class="sdij">
   <h1 class="sdij-r1">Encuentra la Propiedad que Buscas con Nosotros</h1>
   
   </div>
    
    <div id="contenido.management">
      <img class= "management" src="management1.jpg"></img>
    </div>
    </section>

    <h1 class="ml14">
    <span class="text-wrapper">
    <span class="letters">Propiedades</span>
    <span class="letters">Destacadas</span>
    <span class="line"></span>
    </span>
    </h1>

    <section id="propiedades">

    <div id="miCarrusel" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#miCarrusel" data-slide-to="0" class="active"></li>
    <li data-target="#miCarrusel" data-slide-to="1"></li>
    <li data-target="#miCarrusel" data-slide-to="2"></li>
    <li data-target="#miCarrusel" data-slide-to="3"></li>
    <li data-target="#miCarrusel" data-slide-to="4"></li>
    <li data-target="#miCarrusel" data-slide-to="5"></li>
    
  </ol>

  <!-- Slides del carrusel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="2.jpg" alt="Imagen 1">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jpg" alt="Imagen 2">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="4.jpg" alt="Imagen 3">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="5.jpg" alt="Imagen 4">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="6.jpg" alt="Imagen 5">
      <div class="carousel-caption">
      </div>
    </div>
   

  </div>

  <!-- Controles del carrusel -->
  <a class="carousel-control-prev" href="#miCarrusel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#miCarrusel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
 
<section id="Contacto">
<div class="container">
  <h2>Contacto</h2>
  <form method="POST" action="enviar_consulta.php">
    <div class="form-group">
      <label for="nombre">Nombre y Apellido:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50">
    </div>
    <div class="form-group">
      <label for="email">Correo electrónico:</label>
      <input type="email" class="form-control" id="email" name="email" required maxlength="100">
    </div>
    <div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="telefono" class="form-control" id="telefono" name="telefono" required maxlength="30">
    </div>
    <div class="form-group">
      <label for="mensaje">Mensaje:</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="10" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  <?php
   if (isset($_GET['e']))
   echo "<h3>¡Consulta Enviada!</h3>";
  ?>


</div>
    </section>

</main>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="Anime.js"></script> 

    <footer id="footer">

        <div class="column">
            <h3>Contactanos</h3> 
            <p><i class="fas fa-phone"></i>    +34 634 9455 93</p>
            <p><i class="fas fa-map-marker"></i>    Cardenal Almaraz, Salamanca. Cp. 37003 </p>
            <p><i class="fas fa-envelope"></i>    belenbarrientos.0706@gmail.com </p>
            
        </div>
        <div class="column">
            <h3 >Redes Sociales</h3>
            <nav id="redes">
	          <ul id="botones_redes">
		        <li><a href="facebook"><img src="logo_facebook.png"></a></li>
	        	<li><a href="instagram"><img src="logo_instagram.png"></a></li>
	        	<li><a href="http://whatsapp.com"><img src="whatsapp.png" ></a></li>
          	</ul>

   </nav>
        </div>
        <div class="column">
        <h3>Newslatter</h3>
        <p>Recibe las últimas actualizaciones<br> directamente en tu bandeja de entrada.</p>
        <form  method="post" action="enviar_consulta.php"> 
            <input type="email" name="correo" placeholder="Tu dirección de correo electrónico" required>
            <input type="submit" value="Suscribirse">
        </form>
        </div>
        





</footer>
	

</body>
</html>