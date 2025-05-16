<?php
include "header.php";
include "bd.php";
$txtBuscar = $_GET["p"];
//var_dump($txtBuscar);
$encontrado = false;
foreach ($peliculas as $key => $pelicula) {
  if (strcasecmp($txtBuscar, $pelicula["titulo"]) == 0) {
    $datos = $pelicula;
    $encontrado = true;
    break;
  }
}

?>
<main>

  <?php if ($encontrado) { ?>
    <section>
      <h2>Datos</h2>
      <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Nombre</div>
            <?php echo ucwords($datos["titulo"]) ?>
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Director</div>
            <?php echo ucwords($datos["director"]) ?>
          </div>
        </li>
      </ol>
    </section>
    <section>
      <h2 class="mt-3">Horarios</h2>
      <ul class="list-group list-group-flush">
        <?php
        foreach ($datos["horarios"] as $key => $d) {
          echo "<li class='list-group-item'>$d</li>";
        }
        ?>
      </ul>

    </section>
  <?php } else{
      echo "<h2>No hay resulatdos para la busqueda: $txtBuscar</h2>";
  } ?>
  <h2></h2>
</main>
<?php include "footer.php" ?>