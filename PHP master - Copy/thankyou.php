<?php
    include('partials/header.php');
?>



<body>

	<!-- navbar -->
    <?php
        include('partials/navbar.php');
    ?>
	
	<?php
					
					if (isset($_POST['praca_odoslat'])) 
					{
						$data=
						[
                            'meno' => $_POST['meno'],
							'email' => $_POST['email'],
							'pozicia' => $_POST['pozicia'],
							'kompetencie' => $_POST['kompetencie']
                        ];

						
						$praca = new Praca();
						$pridat_pracu = $praca->insert($data);
						echo $pridat_pracu;
						header("Location: thankyou.php");
					}
	?>

	<br><br><br>	
	<!-- banner -->
	<div class="p-5 text-center lol bg-image " >
	  <div class="mask">
		<div class="d-flex justify-content-center align-items-center">
		  <div class="text-white">
			<h1 class="mb-3">Ďakujeme</h1>
			<h4 class="mb-3">Odpoveď môžete očakávať čoskoro</h4>
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