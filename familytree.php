<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kakkanattu Family</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/style.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: MeFamily
    Theme URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.html"><span>Kakkanadan</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.html">Home</a></li>
            <li role="presentation"><a href="history.html">History</a></li>
			<li role="presentation" class="active"><a href="familytree.php">Family tree</a></li>
            <li role="presentation"><a href="events.html">Events</a></li>
            <li role="presentation"><a href="gallery.html">Gallery</a></li>
            <li role="presentation"><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="breadcrumb">
    <h2>Family tree</h2>
  </div>


  <div class="container">
  <?php include 'init.php';?>
  <?php include 'drawtree.php';?>
  </div>

 <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.html"><h1>Kakkanattu</h1></a>
            <p>This is dedicated to our ancestors who were keen to upkeep the family tree live</p>

          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Quick links</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">History</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Gallery</a></li>
			  <li><a href="#">Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Stay in touch</h3>
            <a href="mailto:jerlinkjohn@gmail.com">
              <p><i class="fa fa-envelope"></i> a.kakkanadan@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +91 9846 37 6698</p>
            <p><i class="fa fa-home"></i> Kakkanattu Family, Chemmalamattom | Thidanad <br> Kottayam, Kerala</p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; Kakkanadan.com
            
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/functions.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
