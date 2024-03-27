<?php
    include('header.php');
?>

<body>
	<!-- navbar -->
	<?php
        include('navbar.php');
    ?>
	
	<br><br><br><br>
	
	<div class="container ">
		<div class="row g-5 align-items-center">
			<div class="col-lg-6">
				<!-- carousel so 4mi obrazkami -->
				<div id="carouselExampleCaptions" class="carousel slide">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
					</div>
			
					<div class="carousel-inner">
						<div class="carousel-item active 300-px-wide">
							<img src="img/carosel1.jpg" height="650" class="d-block w-100 rounded" alt="zviera">
							<div class="carousel-caption d-none d-md-block">
								<h5>Surikata vlnkavá</h5>
							</div>
						</div>
				
						<div class="carousel-item">
							<img src="img/carosel2.jpg"  height="650" class="d-block w-100 rounded" alt="zviera">
							<div class="carousel-caption d-none d-md-block ">
								<h5>Panda červená</h5>
							</div>
						</div>
						
						<div class="carousel-item">
							<img src="img/carosel3.jpg"   height="650" class="d-block w-100 rounded" alt="zviera">
							<div class="carousel-caption d-none d-md-block ">
								<h5>Žirafa masajská</h5>
							</div>
						</div>
						
						<div class="carousel-item">
							<img src="img/carosel4.jpg"   height="650" class="d-block w-100 rounded" alt="zviera">
							<div class="carousel-caption d-none d-md-block ">
								<h5>Lama alpaka</h5>
							</div>
						</div>
						
						
					</div>
					
					
					<!-- ovladanie pre carosell -->
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
		
				</div>
			</div>
			
			<div class="col-lg-6 ">
				
				<br><br>
                    <h1 class="mb-4 color">Základné informácie o ZOO</h1>
                    <p class="mb-4">Zoologická záhrada v Nitre je mestská príspevková organizácia, ktorej zriaďovateľom je  mesto Nitra. Ročne nás navštívi okolo 100 tisíc návštevníkov.</p>
                    <p class="mb-4">Našou misiou je spájať svet zvierat, ľudí a prírody cez poznanie a pozitívne zážitky. Prostredníctvom vysokej úrovne starostlivosti o zvieratá, programov záchrany ohrozených druhov a kvalitného vzdelávania plníme významnú úlohu v aktívnej ochrane prírody.</p>	
			</div>
		</div>
	</div>
	
	<br><br>
	<!-- footer -->

		<?php
             include('footer.php');
        ?>
</body>

</html>