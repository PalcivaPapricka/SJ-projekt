<?php
    require("partials/header.php");
	require("partials/navbar.php");
    if((!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) || ($_SESSION["opravnenia"] < 2) ){
        header('Location: neopravnene.php');
    }
?>
    <main>
	<br><br><br>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
                <h1>Administracia</h1>
                <br><br>
				<h2>Pracovne ponuky:</h2>
                <button onclick="document.getElementById('praca').style.display='block'">Pridat pracovnu ponuku</button>
                <div id="praca" style="display:none" >
                    <form action="" method="POST">
                        <input type="text" name="meno" placeholder="meno" required>
                        <input type="email" name="email" placeholder="email" required>
                        <input name="pozicia" placeholder="pozicia" required>
                        <input type="text" name="kompetencie" placeholder="kompetencie" required>
                        <button type="submit" name="praca_odoslat">pridat</button>
                    </form>
                </div>

                <?php
                    $praca = new Praca();
                    $arr = $praca->selectall();
                    
                    echo '<table>';
                    echo '<tr>
							  <th>meno</th>
                              <th>email</th>
                              <th>pozicia</th>
                              <th>kompetencie</th>
                              <th>delete</th>
                          </tr>';
						  
						  
                    foreach($arr as $pracovnik)
					{
                        echo '<tr>';
							echo '<td>'.$pracovnik->meno;'</td>';
							echo '<td>'.$pracovnik->email;'</td>';
							echo '<td>'.$pracovnik->pozicia;'</td>';
							echo '<td>'.$pracovnik->kompetencie;'</td>';
							echo '<td>
									<form action="" method="POST">
										<button type="submit" name="odstranit" value="'.$pracovnik->id.'">Vymazať</button>
									</form>
										
									<form action="" method="GET">
										<button type="submit" name="editovat" value="'.$pracovnik->id.'">Edit</button>
									</form>
										
								</td>';
                        echo '</tr>';
                    }
                        
                    echo '</table>';
					
					if (isset($_POST['praca_odoslat'])) 
					{
						$data=
						[
                            'meno' => $_POST['meno'],
							'email' => $_POST['email'],
							'pozicia' => $_POST['pozicia'],
							'kompetencie' => $_POST['kompetencie']
                        ];

						
						$praca2 = new Praca();
						$pridat_pracu = $praca2->insert($data);
						echo $pridat_pracu;
						header('Location: ' . $_SERVER['PHP_SELF']);
                        
					}
					
					
					 if (isset($_GET['editovat'])) 
					 {
                        $id = $_GET['editovat'];
                        $pracovnik = $praca->selectid($id);
                        echo '<form action="" method="POST">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="text" name="meno" value="'.$pracovnik->meno.'">
                                <input type="email" name="email" value="'.$pracovnik->email.'">
                                <input type="text" name="pozicia" value="'.$pracovnik->pozicia.'">
                                <input type="text" name="kompetencie" value="'.$pracovnik->kompetencie.'">
                                <button type="submit" name="editovat2">editovat</button>
                            </form>';
                    }
					
				
					if(isset($_POST['odstranit']))
					{
                        $id = $_POST['odstranit'];
                        $praca->deletefrom($id);
                        
                    }
					
					
					if (isset($_POST['editovat2'])) 
					{
                        $arr = [
                            'id' => $_POST['id'],
                            'meno' => $_POST['meno'],
                            'email' => $_POST['email'],
                            'pozicia' =>$_POST['pozicia'],
                            'kompetencie' => $_POST['kompetencie']
                        ];
                        $praca->update($arr);
                        
                    }
					
                ?>
				
				 <p><strong>Oprávnenia:</strong> <?php echo isset($_SESSION['opravnenia']) ? htmlspecialchars($_SESSION['opravnenia']) : 'N/A'; ?></p>
				
				
                
            </div>
        </div>
    </section> 
	
	<br><br><br><br>
	<section class="container">
        <div class="row">
            <div class="col-100 text-left">
				<h2>Pouzivatelia:</h2>
                <button onclick="document.getElementById('pouzi').style.display='block'">Pridat noveho pouzivatela</button>
                <div id="pouzi" style="display:none" >
                    <form action="" method="POST">
                        <input type="email" name="email" placeholder="email" required>
						<input type="text" name="heslo" placeholder="heslo" required>
                        <input name="opravnenia" placeholder="opravnenia" required>                 
                        <button type="submit" name="pouzi_odoslat">pridat</button>
                    </form>
                </div>

                <?php
                    $pouzivatel = new Pouzivatel();
                    $arr = $pouzivatel->selectall();
                    
                    echo '<table>';
                    echo '<tr>
							  
                              <th>email</th>
                              <th>opravnenia</th>
                              <th>delete</th>
                          </tr>';
						  
						  
                    foreach($arr as $pracovnik)
					{
                        echo '<tr>';
							
							echo '<td>'.$pracovnik->email;'</td>';
							echo '<td>'.$pracovnik->opravnenia;'</td>';
							
							echo '<td>
									<form action="" method="POST">
										<button type="submit" name="odstranitpouzi" value="'.$pracovnik->id.'">Vymazať</button>
									</form>
										
									<form action="" method="GET">
										<button type="submit" name="editovatpouzi" value="'.$pracovnik->id.'">Edit</button>
									</form>
										
								</td>';
                        echo '</tr>';
                    }
                        
                    echo '</table>';
					
					if (isset($_POST['pouzi_odoslat'])) 
					{
						$email = $_POST['email'];
						$heslo = $_POST['heslo'];
                        $opravnenia = $_POST['opravnenia'];
						
						
						$pouzivatel2 = new Pouzivatel();
						$pridat_pouz = $pouzivatel2->insertinto($email,$heslo,$opravnenia);
						echo $pridat_pouz;
						
					}
					
					
					 if (isset($_GET['editovatpouzi'])) 
					 {
                        $id = $_GET['editovatpouzi'];
                        $pracovnik = $pouzivatel->selectid($id);
                        echo '<form action="" method="POST">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="email" name="email" value="'.$pracovnik->email.'">
								<input type="hidden" name="heslo" value="'.$pracovnik->heslo.'">
                                <input type="text" name="opravnenia" value="'.$pracovnik->opravnenia.'">
                               
                                <button type="submit" name="editovat3">editovat</button>
                            </form>';
                    }
					
				
					if(isset($_POST['odstranitpouzi']))
					{
                        $id = $_POST['odstranitpouzi'];
                        $pouzivatel->deletefrom($id);
                        
                    }
					
					
					if (isset($_POST['editovat3'])) 
					{
                        $arr = [
							'id' => $_POST['id'],
                            'email' => $_POST['email'],
							'heslo' =>$_POST['heslo'],
                            'opravnenia' =>$_POST['opravnenia']
                        ];
                        $pouzivatel->update($arr);
                        
                    }
					
					
                ?>
				
				
				
				
                
            </div>
        </div>
    </section> 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>
<?php
    include('partials/footer.php');
?>