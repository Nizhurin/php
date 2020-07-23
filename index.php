<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Oriented CSS Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-business-oriented.css" rel="stylesheet" />
</head>
<!--

TemplateMo 549 Business Oriented

https://templatemo.com/tm-549-business-oriented

-->
<body>
    <div id="parallax-1" class="parallax-window" data-parallax="scroll" data-image-src="img/biz-oriented-header.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="tm-logo">
                        <i class="fas fa-industry fa-5x mr-5"></i>
                        <span class="text-uppercase tm-logo-text">Business Oriented</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'parts/menu.php' ?>


        <div class="row" style="margin-left: 20px">
                
                <?php 
                  $uri = $_SERVER['REQUEST_URI'];
                  $clear = str_replace('/','',$uri);
                  $tmparr = explode('.',$clear);
                  $page = $tmparr[0].'.php';
                  $path =  'pages/'.$page;
                  if(isset($_SESSION['message'])){
                      echo "<H1>".$_SESSION['message']."</H1>";
                      unset($_SESSION['message']);
                  }
                  if(file_exists($path)) {
                        include $path;
                  } else {
                      include 'pages/main.php';
                  }
                ?>

        </div>
      
  

   
    <?php include 'parts/footer.php' ?>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script> <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/tooplate-script.js"></script>
    <script>
        $(document).ready(function () {
            $('#parallax-1').parallax({ imageSrc: 'img/biz-oriented-header.jpg' });
            $('#parallax-2').parallax({ imageSrc: 'img/biz-oriented-footer.jpg' });
        });
    </script>
</body>

</html>