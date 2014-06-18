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
    <link rel="stylesheet" href="stylesheets/foundation.min.css">
    <link rel="stylesheet" href="stylesheets/app.css">
    <link href="stylesheets/jquery.bxslider.css" rel="stylesheet" />
</head>
    
<body>
  <?php include_once 'includes/header.php';?>
  
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