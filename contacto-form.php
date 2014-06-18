
    
    <?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@enves.com";
    $email_subject = "Contacto enves";
     
     
 
     
    // validation expected data exists
    if(!isset($_POST['nombre']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefono']) ||
        !isset($_POST['mensaje']) ) {
        died('Lo sentimos pero hay errores en el formulario..');       
    }
     
    $first_name = $_POST['nombre']; // required
    $email_from = $_POST['email']; // required
    $phone_from = $_POST['telefono']; // required
    $mesage = $_POST['mensaje']; // not required

     

    $email_message = "";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($phone_from)."\n";
    $email_message .= "Comments: ".clean_string($mesage)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 

<html>
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Foundation</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  


<link href="stylesheets/jquery.bxslider.css" rel="stylesheet" />









</head>

<body>





<?php include_once 'includes/header.php';?>

<div class="light">
  <div class="row row_min_width ">
  
  
  <div class="row ">
   <div class="twelve column main_title"> CONTACTO</div>
   <div class="twelve column subtitle7"> 
   
   GRACIAS POR CONTACTARNOS <br>

   
    PRONTO NOS COMUNICAREMOS CON USTED.<br>
<br>
</div>
    
    
     <div class="twelve column form "> 
     
   
     
    
     </div>
    
    
    
  </div>
  
  
  
  
   
  </div>
  
  </div>
<div  id=map></div>
  
  
  
  <?php include_once 'includes/footer';?>


  

</body>
</html>






<?php
}
?>
    