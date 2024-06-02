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
    <div class="container">
      <h2 class="mb-4">Otazky a odpovede</h2>

      <div class="accordion">
        <?php
        $qna_object = new Qna();
        $qna = $qna_object->select();

        for ($i = 0; $i < count($qna); $i++) {
        ?>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#otazka<?= $i ?>" aria-expanded="false" aria-controls="otazka<?= $i ?>">
                <?= $qna[$i]["otazka"] ?>
              </button>
            </h2>
            <div id="otazka<?= $i ?>" class="accordion-collapse collapse">
              <div class="accordion-body">
                <?= $qna[$i]["odpoved"] ?>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>




	<!-- footer -->
	
    <?php
             include('partials/footer.php');
        ?>
	
	
	
	
	

	
</body>

</html>