<?php
	
    include('partials/header.php');
	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<body>
	<!-- navbar -->
	<?php
        include('partials/navbar.php');
    ?>
	
	<!-- kreatívny bod -->
	<!-- cookies lista -->
	<div class="cookies">
		Kliknutím na tlačidlo „Rozumiem“ súhlasíte s využívaním cookies a predaním údajov o správaní na webe na zobrazenie cielenej reklamy na sociálnych sieťach a reklamných sieťach na ďalších weboch.
		<button>Rozumiem</button>
	</div>
	<!-- kreatívny bod -->

	
	
	
	<br><br><br>	
	<!-- banner -->
	<div class="p-5 text-center bg-image " >
	  <div class="mask">
		<div class="d-flex justify-content-center align-items-center h-100">
		  <div class="text-white">
			<h1 class="mb-3">Nebuďte medvede!</h1>
			<h4 class="mb-3">Avšak zvyšných 400 zvierat v našej zoo nepotrebuje spať celú zimu a tešia sa na vašu návštevu!</h4>
		  </div>
		</div>
	  </div>
	</div>



	<!-- obrazok + text  -->
    <div class="container-fluid py-5">
	
        <div class="container">
		
            <div class="row g-5 align-items-center">
			
                <div class="col-lg-6 ">
                    <img class="img-fluid rounded" src="img/zoo1.avif" alt="dieta a zviaratko">
                </div>
				
                <div class="col-lg-6 ">
				
				<br><br>
				
                    <h1 class="mb-4 color">Nitrianska Zoo otvorená aj v zime</h1>
                    <p class="mb-4">Nie všetky naše zvieratá sa ukladajú na zimný spánok. A preto sa nemusíte ani vy , navštíte naše nové a rozšírené výstavy a výbehy.</p>
                    <p class="mb-4">V zimnom obdobý ponúkame programy pre materské a základné školy ale aj pre širokú verejnosť.</p>
					
                    <div class="row g-3">
					
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Areál je otvorený od 9:15 do 16:15</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Vstupenky od 7 €</h6>
                        </div>
						
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Viac ako 400 zvierat</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Zábava pre celú rodinu</h6>
                        </div>
						
                    </div>
					
                    <div class="d-flex align-items-center mt-4">
						<a class="btn btn-primary rounded-pill px-4 me-3" id="but-1" href="onas.html">O nás</a>
                    </div>	
                </div>
            </div>
        </div>
	</div>
 

	<!-- 3 obrazky -->
	<section class="container-fluid py-5">
		<div class="container">
        <h2 class="center color">Naše nové prírastky</h2>	
		<br>
		
		<div class="row g-5 align-items-center">
			
            <div class="col-12 col-md-4 ga2">

                <img src="img/zoo2.jpg" alt="nosorozec" width="350" height="250" class="rounded">
                <h3>Nosorožec tuponosý</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="col-12 col-md-4 ga2">
                <img src="img/zoo3.jpg" alt="hroch" width="350" height="250" class="rounded">
                <h3>Hroch obojživelný</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="col-12 col-md-4 ga2">
                <img src="img/zoo4.jpg" alt="kamzik" width="350" height="250" class="rounded">
                <h3>Kamzík vrchovský</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
			</div>
		</div>
		</div>
        </section>

        <?php
             include('partials/footer.php');
        ?>

	
	<!-- <script src="js/main.js"></script> -->
	 
</body>

</html>