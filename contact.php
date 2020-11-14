<?php
if(isset($_POST['mailform'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
      <html>
         <body>
            <div align="center">
           
               <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
               <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
               <br />
               '.nl2br($_POST['message']).'
          
            </div>
         </body>
      </html>
      ';

      mail("dauchyl39@gmail.com", "Sujet du message", $message, $header);
      $msg= "<div class='alert alert-success msgalert' role='alert'>
            <p>Votre message a bien été envoyé !</p>
            </div>";
   } else {
      $msg="<div class='alert alert-danger msgalert' role='alert'>
            <p>Tous les champs doivent être complétés !</p>
            </div>";
   }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Contact - Direction Noël</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = '7c884acdc5eb9169bb186dcc7b713b5cfbdbc605';
      window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
      })(document);
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img class="logo" src="assets/img/logo3.png" alt="Logo du site"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shop/shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item bouge">
                  <a class="nav-link" href="contact.php">Contact</a>
              </li>
                       
              </ul>            
            </div>
          </nav>
    </header>
    <section id="contactform">
        <div class="container-fluid">
            <div class="row centre">
                <div class="col-12 col-md-6 formd">
                <div class="contactDiv centre flex-column">
              <h3>Nous contacter</h3>
              <div style="height:50px;"></div>
            <form id="contact" method="POST" action="">
              <div class="form-group">
                <input class="form-control" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
                 <br>
                 <input class="form-control" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
              </div>
             
              <div class="form-group">
              <textarea class="form-control" style="min-height:200px !important;" name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
              </div>
             
              <div style="text-align:center;"><input class = "btn boutonformmail"type="submit" name="mailform" value="Envoyer !" /></div>
              <?php if(isset($msg)) {
            echo $msg;
            }
            ?>
            </form>
            
          </div>
                </div>
            </div>
        </div>
    </section>
    <footer style="margin-top:80px;">
      <div class="container-fluid foot">
        <div class="row foot">
          <div class="col-12 centre bas">
            <a class="icon" href=""><i class='bx bxl-facebook-circle'></i></a>
            <a class="icon" href=""><i class='bx bx-mail-send' ></i></a>
            <a class="icon" href=""><i class='bx bxl-instagram' ></i></a>
          </div>
          <div class="col-12 centre haut">
            <ul class="centre">
              <li class="nav-item no">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item no">
                <a class="nav-link" href="shop/shop.php">Shop</a>
              </li>
              <li class="nav-item no">
                  <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item no">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>                    
            </ul>                        
          </div>
          <div class="col-10 centre copy">
            <p class="centre">©2020 Direction Noël.</p>
          </div>  
        </div>
      </div>
    </footer>

    </body>
    </html>