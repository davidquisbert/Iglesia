<?php
ob_start();

include('includes/usuario.php');

if(isset($_POST['submit'])){
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);

    $usuario_encontrado=usuario::Verificar_Usuario($username,$password);

    if($usuario_encontrado){
        $session->Login($usuario_encontrado);
        header("Location: registro.php");
    }else{
        $mensaje="Usuario o password incorrecto";
    }
}else{
    $mensaje="";
    $username="";
    $password="";
}

?>
<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre <span>Paz de Dios </span></h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum repellendus cum adipisci facilis, dolorum beatae consequatur ut, inventore libero, quas ducimus esse vel minima magnam fugit accusantium qui. Nihil, recusandae.</p>
    </div>

    <div class="ultimos-tweets">
      <h3>Ultimos <span>tweets</span></h3>
      <ul>
        <li>integer ul</li>
        <li>integer ul</li>
        <li>integer ul</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Redes <span>sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
</footer>

<p class="copy-right">
  Todos los derechos reservados a Iglesia Paz de Dios
</p>
<div style="display: none">
    <div id="mc_embed_signup" style="padding: 30px">
        <form method="post">
            <h2>Iniciar Sesion</h2>
            <div class="campodos">
                <label class="form-label" for="nombre">Correo Electronico</label>
                <input type="email" class="form-control inputin" placeholder="Correo Electronnico" name="username" value="<?php echo htmlentities($username); ?>">
            </div>
            <div class="campodos">
                <label class="form-label" for="nombre">Contraseña</label>
                <input type="password" class="form-control" placeholder="Password"  name="password" value="<?php echo htmlentities($password); ?>">
            </div>

                    <button type="submit" name="submit" class="button">Iniciar Sesión</button>
                <?php if($mensaje != ""){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje ?>
                    </div>
                    <?php
                }
                ?>
                <!-- /.col --><div id="error"></div>

        </form>
    </div>
</div>


<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="js/main.js"></script>
<script src="js/maps.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>



<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>

