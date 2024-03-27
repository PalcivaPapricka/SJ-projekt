<?php
    include('header.php');
?>

<body>
	<!-- navbar -->
    <?php
        include('navbar.php');
    ?>
	
	<br><br><br>	
	
	<div class="container-fluid py-5">
	
        <div class="container py-5">
		
			
            <div class="row">
			
                <div class="col-lg-6">
				
					<h1 class="mb-4">Volné pracovné pozície</h1>
					<!-- akordeon so zoznammi  -->
                    <div class="accordion" id="accordionFAQ1">
					
                        <div class="accordion-item ">
						
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Ošetrovateľ 
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                   	<ul class="list-group">
									    <li class="list-group-item active" aria-current="true">Náplň práce:</li>
									    <li class="list-group-item">Chov vzácnych a ohrozených zvierat</li>
									    <li class="list-group-item">Pozorovanie správania sa zvierat  – etológia</li>
									    <li class="list-group-item">Úprava chovných zariadení podľa potrieb zvierat</li>								  
									</ul>
                                </div>
                            </div>	
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Záhradník
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
									<ul class="list-group">
									    <li class="list-group-item active" aria-current="true">Náplň práce:</li>
									    <li class="list-group-item">Odborné záhradnícke práce v areáli zoo</li>
									    <li class="list-group-item">Údržba zelene v areáli, výsadba rastlín, starostlivosť o okrasné rastliny a dreviny</li>
									    <li class="list-group-item">Tvarovanie rastlín</li>    
									</ul>
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Pracovník výdaja stravy
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                   	<ul class="list-group">
									    <li class="list-group-item active" aria-current="true">Náplň práce:</li>
									    <li class="list-group-item">Výdaj stravy pre zamestnancov ZOO v čase obeda</li>
									    <li class="list-group-item">Objednávanie stravy</li>
									    <li class="list-group-item">Udržiavanie poriadku na prevádzke </li>	   
									</ul>
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    Vodár- kurenár
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    <ul class="list-group">
									    <li class="list-group-item active" aria-current="true">Náplň práce:</li>
									    <li class="list-group-item">Zabezpečenie prevádzkyvodovodných a kanalizačných potrubí</li>
									    <li class="list-group-item">Údržba a oprava vodovodných  a kanalizačných potrubí</li>
									    <li class="list-group-item">Výmena kotlov,radiátorov,bojlerov,rozvodov</li>					  
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
				
				<div class="col-lg-6">	
				<h1>Máte záujem o prácu ?</h1>
					<!-- form , ktora presmeruje na thankyou html + po kliknuti na button vyskoci alert -->
					<form class="jsklas" action="thankyou.html">
					
						<div class="form-group">
							<label for="inputName">Meno</label>
							<input type="text" class="form-control" id="inputName" placeholder="meno" required>
						</div>	
					
						<div class="form-row">
							<div class="form-group">
								<label for="inputEmail4">Email</label>
								<input type="email" class="form-control" id="inputEmail4" placeholder="email" required>
							</div>						 
						
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Vaše klavifikácie</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
						</div>
						
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck" required>
								<label class="form-check-label" for="gridCheck"> Súhlasím so spracovaním osobných údajov </label>
							</div>
						</div>
						<br>
						<button  type="submit" class="btn btn-primary">Odoslať</button>
						</div>
					</form>
			</div>
		</div>	
	</div>
	</div>

	<!-- footer -->
	
        <?php
             include('footer.php');
        ?>
	
	
	<script src="js/alert.js"></script>
	
</body>

</html>