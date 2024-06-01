<?php
    include('partials/header.php');
?>

<body>
     <!-- navbar -->
    <?php
        include('partials/navbar.php');
    ?>
	
	<br><br><br>	
	
	<div class="container-fluid py-5">
	
        <div class="container py-5">
			<!-- nadpis -->
            <div class="mx-auto text-center"  style="max-width: 500px;">
                <h1 class="mb-4">Často kladené otázky</h1>
            </div>
			
            <div class="row">
				
                <div class="col-lg-6">
					<!-- prvy akordeon -->
                    <div class="accordion" id="accordionFAQ1">
					
                        <div class="accordion-item ">
						
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    O koľkej sa zoo otvára a zatvára?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                   Otváracie hodiny sú stanovené v závislosti od konkrétneho ročného obdobia. 
                                </div>
                            </div>	
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Je zoo naozaj otvorená každý deň v roku?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
									Zoo Nitra je otvorená celoročne, t.z. 365 dní v roku. Môžete ju tak navštíviť počas pracovných dní, sviatkov, aj počas víkendov. V prípade, že sviatok pripadá na nedeľu, aj v takom prípade je zoologická záhrada otvorená. 
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Je možné počas dňa opustiť zoologickú záhradu a v ten istý deň znova vstúpiť?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Bohužiaľ, dva razy sa na jednu vstupenku bránami zoo nedostanete. Pokiaľ si zakúpite vstupenku a vstúpite do areálu zoo, vstupenka sa stáva neplatná a už nie je možné ju opäť uplatniť.
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    Zistil som, že som v zoo niečo stratil. Na koho sa môžem obrátiť?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Pokiaľ po odchode zo zoo zistíte, že ste niečo u nás stratili, neváhajte kontaktovať našu zoo, V prípade, že niekto z návštevníkov, resp. našich zamestnancov stratenú vec našiel a odovzdal na pokladniach, starostlivo ju uschováme a následne Vám bude vydaná.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!-- druhy akordeon -->
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                    Môžem zoo označiť na svojich fotografiách na sociálnych sieťach?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"  data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Profily na jednotlivých sociálnych platformách máme dostupné na označovanie našimi návštevníkmi, či priaznivcami.
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" >
                                    Akú máte ponuku v rámci vzdelávania?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Samozrejme, edukácia detí a mládeže je jednou z priorít Národnej zoo Bojnice. Vzdelávanie má na starosti naša lektorka, ktorá počas školského roka vedie tradičnú a obľúbenú zooškolu a v mimoškolskom období sa venuje voľnočasovým aktivitám detí.
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" >
                                    Aká časť dňa je najlepšia na návštevu zoo?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Je len veľmi ťažké špecifikovať, ktorý čas je na návštevu zoo najideálnejší. Vonkoncom sa nedá odhadnúť, v ktorom čase bude to ktoré zviera tráviť vo výbehu čas a je to v každej ubikácii individuálne.
                                </div>
                            </div>
                        </div>
						
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" >
                                    Ako dlho trvá prehliadka celej zoo?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"  data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dĺžka prehliadky je veľmi individuálna. Viete sa zdržať 2 hodiny, ale pokojne aj 5 hodín. Záleží na vašom čase. Ale taká štandardná doba v miernom tempe, za ktorú si viete pozrieť našu zoo, je cca. 3 hodiny.  
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



	<!-- footer -->
	
    <?php
             include('partials/footer.php');
        ?>
	
	
	
	
	

	
</body>

</html>