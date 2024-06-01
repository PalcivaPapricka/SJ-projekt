<?php
    require("partials/header.php");
	require("partials/navbar.php");
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
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
                        exit();
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
                        exit();
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
                        exit();
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