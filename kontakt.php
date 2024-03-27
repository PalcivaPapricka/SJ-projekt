<?php
    include('header.php');
?>

<body>
	<!-- navbar -->
	<?php
        include('navbar.php');
    ?>
	
	<br><br><br><br><br>		

	<div class="container-fluid py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
                   <h3>Nájdete nás</h3>
				   <!-- google maps iframe -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10614.839764656655!2d18.0910518!3d48.3084298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xba2bad032d96b960!2sFakulta%20pr%C3%ADrodn%C3%BDch%20vied%20a%20informatiky!5e0!3m2!1ssk!2ssk!4v1669307792855!5m2!1ssk!2ssk" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 	
				</div>
	
				<!-- prva tabulka -->
				<div class="col-lg-6">
					<h3>Kontaktné údaje</h3>
					<table class="table">
						<thead>
							<tr>
							  <th scope="col"></th>		
							  <th scope="col">Meno</th>
							  <th scope="col">Pozícia</th>
							  <th scope="col">Email</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <th scope="row"></th>
							  <td>Viktor Kramar</td>
							  <td>Konatel</td>
							  <td>vktrkrmr@zoo.sk</td>
							</tr>
							<tr>
							  <th scope="row"></th>
							  <td>Jakub Vidlicka</td>
							  <td>Manažér</td>
							  <td>jakubvidlicka@zoo.sk</td>
							</tr>
							<tr>
							  <th scope="row"></th>
							  <td>Martin Prasiatko</td>
							  <td>Veterinár</td>
							  <td>martinprasiatko@zoo.sk</td>
							</tr>
						 </tbody>
					</table>
					<br>
						<!-- druha tabulka -->
						<table class="table">
						<tbody>
							<tr>
							  <th scope="row"></th>
							  <td> Email:</td>
							  <td>
									<a class="btn btn-link" href="mailto:zooNitra@gmail.com" >zooNitra@gmail.com</a>
							  </td>
							
							</tr>
							<tr>
							    <th scope="row"></th>
								<td> Telefóne číslo:</td>
							    <td>
									<a class="btn btn-link" href="tel:0908526425">+421 0908 526 425</a>   
								</td>
							  
							</tr>
							<tr>
							    <th scope="row"></th>
								<td> Adresa:</td>
							    <td>
								    <a class="btn btn-link" href="https://www.google.com/maps/place/Trieda+Andreja+Hlinku+603%2F1,+949+01+Nitra-Chrenov%C3%A1/@48.3084366,18.0858511,17z/data=!3m1!4b1!4m6!3m5!1s0x476b3ee413e5c133:0x862b1fda735b50b3!8m2!3d48.3084331!4d18.090722!16s%2Fg%2F11c2df1k6c?entry=ttu" >Trieda Andreja Hlinku 1 Nitra</a>
							    </td>

							</tr>
						 </tbody>
					</table>
					
					
					
				</div>
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