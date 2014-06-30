<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <!-- Set the viewport width to device width for mobile -->
    <title>ENVÉS: Diseño Sostenible</title>
    <!-- Included CSS Files (Uncompressed) -->
    <!-- <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
    <!-- Included CSS Files (Compressed) -->
    <link href="img/ico.png" rel="shortcut icon" type="image/x-icon">
    <link href="img/ico.png" rel="icon" type="image/x-icon">
    <link href="img/ico.gif" rel="icon" type="image/gif">
    <link rel="stylesheet" href="stylesheets/foundation.min.css">
    <link rel="stylesheet" href="stylesheets/app.css">
    <link href="stylesheets/jquery.bxslider.css" rel="stylesheet" />
</head>

<body>
      <div class="main_menu">
        <div id="content_menu">
         <div id="menu_logo"><a href="index.php">enves</a></div>
           <div id="gallery_six"><a href="index.php#anchor_portafolio_home2">enves</a></div>
                <div id="menu_items_container">
                    <ul>
                        <li><a href="nosotros.php"  >NOSOTROS</a></li>
                        <li><a href="proyectos.php">PROYECTOS</a></li>
                        <li><a href="productos.php">PRODUCTOS</a></li>
                        <li><a href="eco.php">ECO-IMPRESIÓN</a></li>
                        <li><a href="comunidades.php">COMUNIDADES</a></li>
                        <li><a href="noticias.php"> NOTICIAS</a></li>
                        <li><a href="contacto.php" class="main_menu_active">CONTACTO</a></li>
                    </ul>
                </div>
            <div id="menu_right_items">
                <div id="b_menu"><a href="http://www.sistemab.org" target="_blank">b_menu</a></div>
                <div id="facebook_menu"><a href="https://www.facebook.com/EnvesColombia?fref=ts" target="_blank">facebook_menu</a></div>
            </div>
        </div>
    </div>

  <div class="light">
      <div class="row">
              <div class="twelve column main_title top-margin-100">CONTACTO</div>
              <div class="twelve column subtitle7">SI TIENES UNA IDEA, SUGERENCIA O PREGUNTA,
                  <br>ESTAS EN EL LUGAR CORRECTO! ESCRÍBENOS:</div>
              <div class="twelve column form ">
                  <form name="contactform" method="post" action="contacto-form.php">
                      <input placeholder="Nombre" id="form_name" name="nombre" type="text">
                      <input placeholder="e-mail" id="form_mail" name="email" type="email">
                      <input placeholder="Teléfono" id="form_number" name="telefono" type="number">
                      <textarea placeholder="Mensaje" id="form_text" name="mensaje"></textarea>
                      <div class="send_phone">
                          <input id="form_submit" type="submit" value="ENVIAR MENSAJE">
                          <div id="phone2">+57 313 210 65 95 </div>
                          <div id="phone1">+57 1 255 60 04 </div>
                          <div id="phone">LLÁMANOS:</div>
                          <div id="adress">VISÍTANOS: Transversal 24 Nº 53D 51 oficina 401</div>
                      </div>
                  </form>
              </div>
      </div>
  </div>
  <div id=map></div>
  <?php include_once 'includes/footer.php';?>
</body>

</html>