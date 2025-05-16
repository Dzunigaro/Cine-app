<?php include "header.php" ?>
  <main class="row">
    <form action="" class="col-md-6">
      <div class="form-floating mb-3">
        <input name="nombre" type="text" class="form-control" id="nombre">
        <label for="nombre">Nombre</label>
      </div>
      <div class="form-floating mb-3">
        <input name="email" type="email" class="form-control" id="email">
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <select name="asunto" class="form-select" aria-label="Default select example">
          <option value="1">Consulta</option>
          <option value="2">Cotización</option>
          <option value="3">Garantía</option>
          <option value="4">Reclamo</option>
        </select>
      </div>
      <div class="form-floating mb-5">
        <div class="form-floating">
          <textarea class="form-control" id="mensaje"></textarea>
          <label for="mensaje">Mensaje</label>
        </div>
      </div>
      <div class="form-floating mb-3">
        <input class="btn btn-success" type="submit" value="Enviar">
      </div>
    </form>

    <address class="col-md-6">
      <p><span>Teléfono: </span> <a href="tel:+50626611020">2661-1020</a></p>
      <p><span>Skype: </span> <a href="skype:luisdiegofc09">luisdiegofc09</a></p>
      <p><a target="_blank" href="https://wa.me/50660088060"><img src="img/clictohat.svg" alt=""></a></p>
      <p><span>Email: </span> <a target="_blank" href="mailto:patito@hotmail.com">patito@hotmail.com</a></p>
      <p><span>Dirección: </span> Detrás de las oficinas de Torito, Puntarenas centro</p>
    </address>

    <iframe class="col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125756.20639299351!2d-84.28277254584292!3d9.943820736591702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fb86ef090a93%3A0xf2ae13c3b922006c!2sCinemark%20%E2%80%A2%20Multiplaza%20Escaz%C3%BA!5e0!3m2!1ses!2scr!4v1675218392756!5m2!1ses!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </main>
  <?php include "footer.php" ?>