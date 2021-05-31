<?php
    include_once 'includes/header.php';
?>

  <section class="seccion contenedor">
    <h2> El mejor lugar para tener un encuentro con Dios</h2>
    <p> Mi casa es tu casa.</p>
  </section> <!--Seccion-->

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop muted poster="bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div>

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del Evento</h2>
            <nav class="menu-programa">
             <a href="#CultoJuvenil"><i class="fa fa-code" aria-hidden="true"></i>Culto Juvenil</a>
             <a href="#ServicioDominical"><i class="fa fa-comment" aria-hidden="true"></i>Servicio Dominical</a>
             <a href="#Seminario"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
            </nav>
            <div id="CultoJuvenil" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                  <h3>Primer Culto</h3>
                    <p><i class="fa fa-clock" aria-hidden="true"></i> 19:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 16 de Mayo</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Mateo Nuñez del Arco</p>
              </div>
              <div class="detalle-evento">
                <h3>Segundo Culto</h3>
                  <p><i class="fa fa-clock" aria-hidden="true"></i> 20:00 hrs</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 16 de Mayo</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre Valdez</p>
            </div>

            <a href="#" class="button float-right">Ver Todos</a>

            </div><!--#talleres-->

            <div id="ServicioDominical" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                  <h3>Primer Culto</h3>
                    <p><i class="fa fa-clock" aria-hidden="true"></i> 8:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 16 de Mayo</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Mateo Nuñez del Arco</p>
              </div>
              <div class="detalle-evento">
                <h3>Segundo Culto</h3>
                  <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 16 de Mayo</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre Valdez</p>
            </div>

            <a href="#" class="button float-right">Ver Todos</a>

            </div><!--#talleres-->

            <div id="Seminario" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                  <h3>Seminario Parte 1</h3>
                    <p><i class="fa fa-clock" aria-hidden="true"></i> 8:00 hrs</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> 20 de Mayo</p>
                    <p><i class="fa fa-user" aria-hidden="true"></i> Mateo Nuñez del Arco</p>
              </div>
              <div class="detalle-evento">
                <h3>Seminario Parte 2</h3>
                  <p><i class="fa fa-clock" aria-hidden="true"></i> 10:00 hrs</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i> 20 de Mayo</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la Torre Valdez</p>
            </div>

            <a href="#" class="button float-right">Ver Todos</a>

            </div><!--#talleres-->
        </div><!--#programaeventp-->
      </div><!--contenedor-->
    </div><!--contenido programa-->

  </section><!--programa-->

  <section class="invitados contenedor seccion">
      <h2>Invitados</h2>
      <ul class="lista-invitados clearfix">
        <li>
          <div class="invitado">
            <img src="img/invitado1.jpg" alt="imagen invitado">
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado2.jpg" alt="imagen invitado">
            <p>Pedro Mollo </p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado3.jpg" alt="imagen invitado">
            <p>Limberg Alvarez</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado4.jpg" alt="imagen invitado">
            <p>Marlon Falla</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado5.jpg" alt="imagen invitado">
            <p>Marcos del Arco</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado6.jpg" alt="imagen invitado">
            <p>Sebastian Butron</p>
          </div>
        </li>
      </ul>
  </section>

  <div class="contador paralax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> talleres</li>
        <li><p class="numero"></p> Dias</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precio seccion">
    <h2>Precio</h2>
    <div class="contenedor">
      <ul class="lista-precio clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por dia</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todas las talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Todos los dias</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todas las talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>

        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 dias</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todas las talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa">

  </div>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p> registrate al nCampamento 2021</p>
      <h3>Reconexion Camp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p> dias</li>
        <li><p id="horas" class="numero"></p> horas</li>
        <li><p id="minutos" class="numero"></p> minutos</li>
        <li><p id="segundos" class="numero"></p> segundos</li>
      </ul>
    </div>
  </section>

<?php
include_once 'includes/footer.php';
?>

