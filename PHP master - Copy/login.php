<?php
    include('partials/header.php');
?>

<body>

    <!-- navbar -->
    <?php
        include('partials/navbar.php');
    ?>

    <br><br><br>    
    <div class="p-5 text-center">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-6">
                <h1>Login</h1>
                <!-- form , ktora presmeruje na thankyou html + po kliknuti na button vyskoci alert -->
                <form class="jsklas" action="" method="POST">
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control text-center" id="inputEmail4" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">Heslo</label>
                        <input type="password" name="heslo" class="form-control text-center" id="inputPassword4" placeholder="heslo" required>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" name="login_odoslat" value="Odoslat">
                </form>
				
				 <?php
            
                    if(isset($_POST['login_odoslat'])){
                        $email = $_POST['email'];
                        $heslo = $_POST['heslo'];
                        $pouzivatel = new Pouzivatel();
                        $login = $pouzivatel->login($email,$heslo);
                        if($login == true)
						{
                            header('Location: loggedin.php');
                            exit;
                        }
						else
						{
                            echo 'Nesprávne prihlasovacie udaje';
                        }
                    }
                
                ?>
				
                <br>
                <a href="register.php">Registerovat</a>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br>
    <!-- footer -->
    <?php
        include('partials/footer.php');
    ?>

</body>

</html>
