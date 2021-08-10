<?php
/*
if(isset($_POST['posalji']))
{

  $name = htmlspecialchars($_POST['ime']);
  $surname = htmlspecialchars($_POST['prezime']);
  $email = htmlspecialchars($_POST['mail']);
  $phone = htmlspecialchars($_POST['telefon']);
  $message = htmlspecialchars($_POST['pitanje']);
  $from = "office@smartwebart.rs";


  $toEmail = 'minikom.np@gmail.com';
  $subject = 'Kontakt poruka od '. $name . ' '. $surname;

$header = "From:". $from . "Reply-To: ".$name." <".$email.">\n";  //  s!
$headers .= "Organization: Minikom plus\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "X-Priority: 3\n";
$headers .= "X-Mailer: PHP". phpversion() ."\n";

  $body = '
    <html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Pitanja u vezi sa  sajtom</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $name . ' ' . $surname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $message . '</td>
  				</tr>
        </table>
        </body>
       </html>';


  mail($toEmail, $subject, $body, $headers);

}*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['posalji'])){


  $namesurname = htmlspecialchars($_POST['IP']);
  // $surname = htmlspecialchars($_POST['prezime']);
  $email = htmlspecialchars($_POST['EM']);
  $phone = htmlspecialchars($_POST['BT']);
  $message = htmlspecialchars($_POST['pitanje']);


  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer();                              // Passing `true` enables exceptions
// try {

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.smartwebart.rs';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'office@smartwebart.rs';                 // SMTP username
    $mail->Password = 'karlovevariprag';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('office@smartwebart.rs');
    $mail->addAddress('radovanbastic@protonmail.com', 'Radovan Bastic');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('radovanbastic@gmail.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Poruka sa kontakt forme SMART WEB ART';
    $mail->Body    = '<html>
    <head>
    </head>
  		<body>
        <table width="60%" cellspacing="2" cellpadding="2">
  				<tr>
  					<td colspan="2" align="left" valign="middle"style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#fff; background-color:#0072c6;">Poruka sa sajta SMART WEB ART</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Ime i Prezime</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $namesurname . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Telefon</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $phone . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Email adresa</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $email . '</td>
  				</tr>
  				<tr>
  					<td align="left" valign="middle" width="25%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#e1e1e1;">Pitanje, ideja..</td>
  					<td align="left" valign="middle" width="75%" style="font-family:Verdana, Geneva, sans-serif; font-size:13px; color:#333; background-color:#f0f0f0;">' . $message . '</td>
  				</tr>
        </table>
        </body>
       </html>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

       $mail->send();
  

}



 ?>

<!DOCTYPE html>
<html lang="sr">
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151510496-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151510496-2');
</script>
  <meta name="keywords" content="izrada web sajtova, cene, Izrada web sajtova, izrada sajta, odrzavanje web sajtova, cenovnik izrade web sajtova">
  <meta name="description" content="Imamo dugu tradiciju u izradi sajtova. Kontaktirajte nas da ostvarimo saradnju.">
    <meta name="title" content="Izrada sajtova | Najpovoljnije cene izrade | Kontakt za izradu sajta">
    <meta name="author" content="Radovan Baštić">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Izrada web sajtova | Kontakt | Jeftina izrada sajtova Valjevo</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Link own style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <!-- Ikonica section -->
    <link rel="icon" type="image/png" sizes="32x32" href="ikona.png">
    <!-- Ikonica section end -->

  </head>

  <body>
    <!-- Header start -->
    <header class="header-main">
     <div class="container-fluid">
      <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" >
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="/" id="brand"><img src="img/logotest.svg" alt="Izrada sajta logo"></a>
       </div>
      <div class="collapse navbar-collapse"  id="navbar">
        <nav>
         <ul class="nav navbar-nav navbar-right">
           <li><a href="/">Početna</a></li>
           <li><a href="/services.php">Usluge</a></li>
           <li><a href="/prices.php">Cenovnik</a></li>
           <li class="dropdown"> <a href="#"  data-toggle="dropdown" aria-expanded="false">Portofolio<span class="caret" aria-hidden="true" ></span></a>
            <ul class="dropdown-menu">
              <li><a href="/references.php">Web Sajtovi</a></li>
              <li><a href="/app.php">Web Aplikacije</a></li>
            </ul></li>
           <li><a href="/blog.php">Blog</a></li>
           <li><a href="/contact.php">Kontakt</a></li>
         </ul>
        </nav>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
 </header>
 <!-- Header End -->

 <!-- Google Map Start -->
 <section class="section-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81026.39882282351!2d19.963711333644593!3d44.15032412509278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4759e659d3f805fb%3A0x7434a9c9c759ff31!2z0J7RgdC10YfQtdC90LjRhtCw!5e0!3m2!1ssr!2srs!4v1520288736290"
      width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
 </section>
 <!-- Google Map End -->

<!-- Section Main Start -->
<section class="section-contact">
<div class="container">
<div class="row">
  <div class="col-md-8">
    <h2>Kontaktirajte nas</h2>
    <p class="page-header">Pošaljite nam ideju, predlog, komentar. Ostvarimo saradnju već danas.</p>
    <form id="submit-button" name="klijenti" action="" method="post">
    <!-- enctype="application/x-www-form-urlencoded" -->
      <div class="form-group">
          <label>Vaše ime i prezime:</label>
          <input name="IP" type="text" class="form-control imeprezime" placeholder="Unesite ime i prezime" required>
        </div>
        <div class="form-group">
          <label>Broj telefona:</label>
          <input name="BT" type="text" class="form-control telefon" placeholder="Unesite broj telefona" required>
        </div>
        <div class="form-group">
          <label>Vaša email adresa:</label>
          <input name="EM" type="email" class="form-control imejl" placeholder="Unesite Vaš email" required>
        </div>
        <div class="form-group">
          <label>Poruka za nas je:</label>
          <textarea name="pitanje" class="form-control tekst" rows="10" cols="20" placeholder="Napišite ideju, predlog, pitanje..." required></textarea>
        </div>

        <button name="posalji" type="submit" class="btn btn-default">Pošalji</button>


      </form>
</div>
  <div class="col-md-4 col-xs-12 col-sm-6 details">
  <!-- <aside>
    <div class="block block-primary-head no-pad">
      <h3><i class="fa fa-home"></i> Naši kontakt podaci</h3>
        <div class="block-content">
          <ul> data-toggle="modal"
          <li><h4>SmartWebArt</h4></li><hr>
            <li><i class="fas fa-map-marker fa-lg"></i> Osečenica bb</li>
            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14244 Brežđe, Srbija</li>
            <li><i class="fas fa-mobile-alt fa-lg"></i>&nbsp; Mobilni: 060/ 382 55 79</li>
            <li><i class="fas fa-envelope"></i> Email: office@swa.com</li>
          </ul>
      </div>
    </div>
  </aside> -->

  <p><span><i class="far fa-lightbulb fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; SmartWebArt</span></p> <hr>
  <p><span><i class="fas fa-map-marker-alt fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; Osečenica bb</span></p>
  <hr>
  <p><span><i class="fas fa-mobile-alt fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; + 381 60 382 55 79</span></p><hr>
  <p><span><i class="far fa-envelope-open fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; office@smartwebart.rs</span></p> <hr>
  <p><span><i class="far fa-clock fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; Radno vreme: Pon - Pet 09-17h</span></p> <hr>
  <p><span><i class="far fa-file fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; PIB 111718341</span></p> <hr>
  <p><span><i class="far fa-file fa-2x"></i> &nbsp;&nbsp;&nbsp;&nbsp; MB 65616742</span></p> <hr>

</div>
</div>
</div>
</section>
<!-- Section Main End -->





 <!-- Footer Start-->
 <footer class="main-footer">
    <div class="container">
      <div class="row">
      <div class="col-md-4" id="logo-footer">
          <p>Copyright &copy; 2019 <a href="/">&nbsp;&nbsp; SmartWebArt</a></p>
        </div>
        <!-- Social networks start -->
      <div class="col-md-4">
        <ul class="soc-net list-reset">
            <li><a href="https://www.facebook.com/smartwebart/" target="blank" class="fb"><i class="fab fa-facebook-f fa-lg"></i></a></li>
            <li><a href="https://twitter.com/" target="blank" class="tw"><i class="fab fa-twitter fa-lg"></i></a></li>
            <li><a href="https://www.instagram.com/_smartwebart/" target="blank" class="in"><i class="fab fa-instagram fa-lg"></i></a></li>
            <li><a href="https://www.youtube.com/" target="blank" class="yt"><i class="fab fa-youtube fa-lg"></i></a></li>
          </ul>
        </div>
        <!-- Social networks End -->
        <!-- Footer Nav Start -->
        <div class="col-md-4">
          <ul class="footer-nav">
          <li><a href="/contact.php">Kontakt</a></li>
          <li><a href="/blog.php">Blog</a></li>
          <li><a href="/references.php">Portofolio</a></li>
          <li><a href="/prices.php">Cenovnik</a></li>
          <li><a href="/services.php">Usluge</a></li>
            <li><a href="/">Početna</a></li>
          </ul>
        </div>
        <a id="button" class="hidden-xs"></a>
        <!-- Footer Nav End -->
    </div>
  </div>
 </footer>
 <!-- Footer End -->

 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">SMART WEB ART</h4>
      </div>
      <div class="modal-body">
        HVALA NA SARADNJI !
      </div>
      <div class="modal-footer">
      <p>Copyright &copy; 2019 <a href="/">&nbsp;&nbsp; SmartWebArt</a></p>
      </div>
    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery-easing.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        var btn = $('#button');
  
  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });
  
  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

    // Add slideDown animation to dropdown
    $('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to dropdown
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

   
//    $(document).ready(function() {
//   $('#submit-button').on('submit', function(e){
//       $(this).submit();
//       e.preventDefault();
//       $('#myModal').modal('show');
//   });
// });

$('#submit-button').submit(function(e){
 $('.modal').show().addClass('in');
  return true;
});
// $('#submit-button').submit(function(e){
//     $.ajax({
//       url: $('#submit-button').attr('action'),
//       type: 'POST',
//       data : $('#submit-button').serialize(),
//       success: function(){
//         $('#myModal').modal('show');
//       }
//     });
//     e.preventDefault();
// });
  
      </script>

      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb5e4208ee2956d739f68bb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->  
  </body>
</html>



