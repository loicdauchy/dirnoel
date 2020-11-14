<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Shop - Direction Noël</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
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
            <a class="navbar-brand" href="#"><img class="logo" src="../assets/img/logo3.png" alt="Logo du site"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.html">About</a>
                </li>
                <li class="nav-item bouge">
                  <a class="nav-link" href="../contact.php">Contact</a>
              </li>
                       
              </ul>            
            </div>
          </nav>
    </header>
    <?php
    require('controllers/controller.php');

      if (isset($_GET['idcate'])) {
            echo categories();
          }else if(isset($_GET['ida'])){  
                  echo article();
              }else if(isset($_GET['id'])){
                    echo detail();
              }else{
                      echo btncate();
              }

    ?>
    <footer>
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
                  <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item no">
                  <a class="nav-link" href="shop.php">Shop</a>
                </li>
                <li class="nav-item no">
                    <a class="nav-link" href="../about.html">About</a>
                </li>
                <li class="nav-item no">
                  <a class="nav-link" href="../contact.php">Contact</a>
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