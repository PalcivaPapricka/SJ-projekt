<?php
    require("./_inc/config.php");
    $logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<div class="container-fluid sticky-top">

        <div class="container">
		
            <nav class="navbar navbar-expand-lg  fixed-top p-1">
			
                <a href="index.php" class="navbar-brand ">
                    <img src="img/ikona.PNG" width="150" height="60" alt="logo">
                </a>
				
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
                <div class="collapse navbar-collapse" id="navbarText">
				
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link   text-white">Domov</a>
                        <a href="onas.php" class="nav-item nav-link   text-white">O nás</a>
                        <a href="faq.php" class="nav-item nav-link text-white">FAQ</a>
                        <a href="praca.php" class="nav-item nav-link text-white">Pracovné Pozície</a>
                        <a href="kontakt.php" class="nav-item nav-link text-white">Kontakt</a>
						
						<?php if($logged_in == true): ?>
							<a href="logout.php" class="nav-item nav-link text-white">Logout</a>
							<a href="admin.php" class="nav-item nav-link text-white">Administracia</a>
						<?php else: ?>
							<a href="login.php" class="nav-item nav-link text-white">Login</a>
						<?php endif; ?>
                    </div>
					
                </div>
            
			</nav>
        </div>
	</div>