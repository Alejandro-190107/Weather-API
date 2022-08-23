<?php include('assets/Api/api.php');?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="assets/img/logo.png" rel="icon">
        <link rel="stylesheet" href="assets/librerias/bootstrap.min.css"> <!--* Libraries Bootstrap -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<title> Weather API </title>
	</head>
	<body>

		<header>
			<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
				<a class="navbar-brand" href="index.php"> Weather API </a>
				<img src="assets/img/img-nav.gif" height="50" class="d-inline-block align-top" alt="mdb logo">  
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
					<ul class="navbar-nav ml-auto nav-flex-icons">
						<li class="nav-item"> <a class="nav-link waves-effect waves-light" target="_blank" href="https://github.com/Alejandro-190107" style="color: white;"> <i class="fab fa-github-square"></i> </a> </li>
						<li class="nav-item"> <a class="nav-link waves-effect waves-light" href="#" style="color: white;"> <i class="fab fa-linkedin"></i></a> </li>
						<li class="nav-item"> <a class="nav-link waves-effect waves-light" target="_blank" href="#" style="color: white;"> <i class="fas fa-globe"></i></a> </li>
	  				</ul>
				</div>

  			</nav>
		</header>

        <!-- container -->
        <div class="container">
            
                <!-- Card content -->
                <div class="card text-center"">
                    <!-- card-header -->
                    <div class=" card-header success-color white-text">
                        <h5 class="card-title"> Información Del Clima. </h5>
                    </div>
                    <!-- card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="assets/img/img-card.png" alt="Card image cap">
                        </div>
                        <!-- Card image -->
                        <!-- table-responsive -->
                        <div class="table-responsive">
                            <!--Table-->
                            <table class="table">
                                <!--Table head-->
                                <thead class="table-dark">
                                    <tr>
                                        <th class="th-lg"> <i class="fas fa-city"></i> Ciudad </th>
                                        <th class="th-lg"> <i class="fas fa-globe-americas"></i> País </th>
                                        <th class="th-lg"> <i class="fas fa-temperature-low"></i> Temperatura </th>
                                    </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                    <tr>
                                        <td> <?php echo $array['name']; ?> </td>
                                        <td> <?php echo $array['sys']['country']; ?> </td>
                                        <td> <?php echo $array['main']['temp'] . " ºC"; ?> </td>
                                    </tr>
                                </tbody>
                                <!--Table body-->
                            </table>
                            <!--Table-->
                        </div>
                        <!-- table-responsive -->
                    </div>
                    <!-- card-body -->
                </div>
                <!-- Card content -->
           
		</div>
         <!-- container -->
		
		<footer class="page-footer font-small blue fixed-bottom">
			<div class="footer-copyright text-center text-light py-3"> <b><i class="far fa-copyright"></i> 2022 Creado Por Alejandro López</b></div>
		</footer>

        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
		<script src="assets/librerias/jquery-3.6.0.min.js"></script> <!--! Libraries jquery -->
        <script src="assets/librerias/popper.min.js"></script> <!--! Libraries Icons -->
        <script src="assets/librerias/bootstrap.min.js"></script> <!--! Libraries Bootstrap -->
        <script src="https://kit.fontawesome.com/a81368914c.js"></script> <!--! Libraries Font Of fontawesome -->

	</body>
</html>