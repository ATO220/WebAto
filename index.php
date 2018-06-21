<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Laureano Serrano Desarrollo Web</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <header>
    	<div class="menu col-sm-12">
    		<ul>
    			<li><a href="#perfil">Perfil</a></li>
    			<li><a href="#habilidades">Habilidades</a></li>
    			<li><a href="#contacto">Contacto</a></li>
    		</ul>
    	</div>
        <div class="slider">
			<div class="row">
				<div class="col-sm-12">
					<div id="carrusel-img" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li id="Indicadores" data-slide-to= "0" class="active"></li>
							<li id="Indicadores" data-slide-to= "1"></li>
							<li id="Indicadores" data-slide-to= "2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/img-slider/imagen1.jpg" alt="imagen1" class="d-block w-100">
								<div class="carousel-caption" >
									<h5>Serrano Laureano</h5>
									<p>Tu sitio Web personalizado con valor propio <br>Optimizá tu alcance al público</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/img-slider/imagen2.jpg" alt="imagen2" class="d-block w-100">
								<div class="carousel-caption">
									<h5>Diseño Responsive</h5>
									<p>Su web se adaptará al dispositivo desde el cual se reproduzca <br>para una mejor experiencia de usuario</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/img-slider/imagen3.jpeg" alt="imagen3" class="d-block w-100">
								<div class="carousel-caption">
									<h5>Desarrollo Web</h5>
									<p>Html, Css, Bootstrap, Javascript, Angular Js</p><br>
								</div>
							</div>
						</div>
						<a href="#carrusel-img" role="button" data-slide="prev" class="carousel-control-prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>
						<a href="#carrusel-img" role="button" data-slide="next" class="carousel-control-next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>
			</div>
		</div>
    </header>

    <div class="presentacion mt-l">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-2" id="texto-presentacion">
                <h5 class="bloque m-5 mt-3 p-3" data-move-y="30%" id="perfil">Perfil Profesional</h5>
                <p class="bloque m-2 mt-3" data-move-y="40%">Soy Desarrollador Web, actualmente me encuentro trabajando para una compañía que brinda servicios de Marketing Digital, Chatbot y un CRM, realizando actualizaciones, features y mantenimiento al codigo de la plataforma de gestión de clientes.
                    Realizo además trabajos particulares de maquetacion, front-end y back-end.</p>
            </div>
            <div class="col-sm-12 col-md-6 mt-3">
                <img class="bloque img-responsive rounded-circle pull-right" data-rotate3d="4,7,10,300deg" src="img/img-profile/yop.png" alt="" id="imagen-perfil">
            </div>
        </div>
    </div>
	<div class="habilidades mb-xl-0 container align-center mt-xl-5">
		<div class="row">
			<div class="bloque habilidades-titulo col-sm-12 col-md-offset-4 col-md-4 p-3 mt h2 text-center bg-white" data-scale="2,2" id="habilidades">Habilidades</div>
		</div>
		<div class="row mt-5 mb-5">
			<div class="col-6 col-lg-2 col-sm-6 col-md-4 mt-5">
				<img class="bloque img-fluid mb-3" src="img/iconos/html.png" alt="" data-scale-y="2">
				<div class="bloque texto-icono border border-warning text-center mt pb-s pt-s" data-move-y="40%">HTML</div>
			</div>
			<div class="col-6 col-lg-2 col-sm-6 col-md-4 mt-5">
				<img class="bloque img-fluid mb-3" src="img/iconos/css.png" alt="" data-scale-x="2">
				<div class="bloque texto-icono border-celeste text-center mt pb-s pt-s" data-move-y="40%">CSS</div>
			</div>
			<div class="col-6 col-lg-2 col-sm-6 col-md-4 mt-5">
				<img class="bloque img-fluid mb-3" src="img/iconos/javascript.png" alt="" data-scale-y="2">
				<div class="bloque texto-icono border-amarillo text-center mt pb-s pt-s" data-move-y="40%">JAVASCRIPT</div>
			</div>
			<div class="col-6 col-lg-2 col-sm-6 col-md-4 mt-5">
				<img class="bloque img-fluid mb-3" src="img/iconos/jquery.png" alt="" data-scale-x="2">
				<div class="bloque texto-icono border border-primary text-center mt pb-s pt-s" data-move-y="40%">JQUERY</div>
			</div>
			<div class="col-6 col-lg-2 col-sm-6 col-md-4 mt-5">
				<img class="bloque img-fluid mb-3" src="img/iconos/bootstrap.png" alt="" data-scale-y="2">
				<div class="bloque texto-icono bootstrap border-violeta text-center mt pb-s pt-s" data-move-y="40%">BOOTSTRAP</div>
			</div>
			<div class="col-6 col-lg-2 col-sm-6 col-md-4 mt-5">
				<img class="bloque img-fluid mb-3" src="img/iconos/angular.png" alt="" data-scale-x="2">
				<div class="bloque texto-icono border border-danger text-center mt pb-s pt-s" data-move-y="40%">ANGULAR</div>
			</div>
		</div>
	</div>
    <div class="contacto border-info pt-xl-4 mt-xl-5 mb-xl-5 pb-xl-3 pt-2">
        <h3 class="text-center titulo-form" id="contacto">Contacto</h3>
        <p class="text-center titulo-form">En que puedo ayudarte? Dejame tu mensaje y comunicaré contigo en la brevedad.</p>
        <form action="enviar.php" class="pl-lg-4 pr-lg-4 m-5" method="post" name="myForm" id="contacto">
            <div class="form-row">
                <div class="form-group col-sm-12 col-md-4">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="email">Mail</label>
                    <input type="text" class="form-control" id="email" name="email">
					<span class="text-danger d-none" id="mailInvalid">El email ingresado es inválido</span>
                    <small id="emailHelp" class="form-text text-mail">Ingrese un mail válido. Ejemplo: JuanPerez@gmail.com</small>

                </div>
                <div class="form-group col-sm-12 col-md-4">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">

                </div>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
            </div>
            <button onclick="ValidateEmail(email)" class="btn btn-info mb-4">Enviar</button>
        </form>
    </div>
</div>
<p class="text-center mt-xl text-muted">Laureano Serrano - Todos los derechos reservados.</p>
</body>


<script src="js/jquery.min.js"></script>
<script src="js/jquery.smoove.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script>
$('.bloque').smoove({});
</script>

</body>
</html>