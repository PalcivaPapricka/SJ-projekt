

<footer>
    <div class="container-fluid bg-dark text-white-50 footer ">
	
        <div class="container">
		
            <div class="row g-3 ">
			
                <div class="col-md-6 col-lg-3 ">
                    <h1 class="color">Nitra ZOO</h1>
                    <p class="mb-0">Totálne reálna a rozhodne nie fikcionálna zoologická záhrada ktorá sa nachádza v Nitre</p>
                </div>
				
				
                <div class="col-md-6 col-lg-3 mx-auto">
                    <h5 class="color mb-4">Nájdete nás</h5>
                    <a class="btn btn-link" href="https://www.google.com/maps/place/Trieda+Andreja+Hlinku+603%2F1,+949+01+Nitra-Chrenov%C3%A1/@48.3084366,18.0858511,17z/data=!3m1!4b1!4m6!3m5!1s0x476b3ee413e5c133:0x862b1fda735b50b3!8m2!3d48.3084331!4d18.090722!16s%2Fg%2F11c2df1k6c?entry=ttu" >Trieda Andreja Hlinku 1 Nitra</a>
                    <a class="btn btn-link" href="tel:0908526425">+421 0908 526 425</a>
                    <a class="btn btn-link" href="mailto:zooNitra@gmail.com" >zooNitra@gmail.com</a>
                </div>
				
				
                <div class="col-md-6 col-lg-3 mx-auto">   
					<a class="btn btn-link mt-4" href="onas.php">O nás</a>
                    <a class="btn btn-link" href="faq.php">FAQ</a>
                    <a class="btn btn-link" href="praca.php">Pracovné Pozície</a>
                    <a class="btn btn-link" href="kontakt.php">Kontakt</a>
                </div>	
				
            </div>
        </div>
		
        <div class="container" >
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" >Nitra Zoo</a>, All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>


	</footer>
	
	
	 <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
        $page_object  = new Page();
        $page_object->set_page_name($page_name);
        echo($page_object->add_scripts());
    ?>
	
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>	