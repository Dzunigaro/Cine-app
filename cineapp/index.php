<?php
include "header.php";
include "bd.php"
?>

<main>
  <section class="row justify-content-evenly align-items-center">
    <h2 class="col-sm-12 mb-3  text-center">Cartelera Semanal</h2>

    <?php
    foreach ($peliculas as $key => $pelicula) {
      //var_dump($pelicula);
      echo "<div class='card col-md-6 col-lg-3' style='width: 18rem;'>
                <img src='img/$pelicula[imagen]' class='card-img-top' alt='Banner pelicula patito'>
                <div class='card-body'>
                  <a href='cartelera.php?p=$pelicula[titulo]' class='btn btn-negro'>Ver Horarios</a>
                </div>
              </div>";
    }
    ?>



  </section>

  <section>
    <h2 class="mt-3 mb-3 text-center">Proximos Estrenos</h2>
  </section>

</main>

<?php include "footer.php" ?>