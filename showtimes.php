  <?php
  if (!session_id()) {
    session_start();
  }
  include_once ('db.php');
  ?>

  <!DOCTYPE html>
  <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">

    <title>Movie House Cinemas </title>


  <!-- Bootstrap core CSS -->
  <!-- <link href="./movie_files/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Custom styles for this template -->
     <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


      <link href="css/main.css" rel="stylesheet">



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

  <style type="text/css">
.Content {
 box-shadow:0 0 20px #000;
 background-color:#fff;
 border-top-left-radius:10px;
 border-bottom-right-radius:30px;
 margin-left:auto;
 margin-right:auto;
 width:1300px;
 padding:15px 15px 15px 15px;
 overflow:hidden;
 position:relative;
 z-index:2;
 min-height:500px
}
footer {
 width:100%;
 height:310px;
 position:absolute;
 bottom:0
}

#footer {
 margin-top:50px;
 background-image:url("https://www.prime.jo/CDN/Images/Entities/Cinemas/footerbg.jpg");
 background-repeat:no-repeat;
 background-position:center;
 background-color:#000;
 height:100%;
 width:100%;
 border-top:1px solid #eaeaea
}
#footer-inner {
 width:1024px;
 overflow:hidden;
 margin:0 auto;
 height:100%
}
#footer a {
 color:#fff;
 font-size:14px;
 border-bottom:none
}
#footer #footer-inner .col-3 {
 height:250px;
 border-bottom:1px solid #443e3b;
 background-repeat:repeat-x;
 margin-top:30px
}
#footer #footer-inner .col-3 {
}
#footer .col-3 a {
 -webkit-text-shadow:1px 1px 0 #443e3b;
 text-shadow:1px 1px 0 #443e3b
}
#footer .col-3 .col {
 float:left;
 width:33%;
 margin-top:30px
}
#footer .col-3 .col .col-inner {
 margin:0 auto 20px auto;
 width:50%
}
#footer .col-3 .col.col-left .col-inner {
 margin-right:0
}
#footer .col-3 .col.col-right .col-inner {
 margin-left:0
}
#footer #terms-conditions {
 color:#fff;
 height:30px;
 border-top:1px solid #93908f;
 width:100%
}
#footer #terms-conditions a {
 color:#fff;
 font-size:12px;
 padding-left:10px
}
#footer #terms-conditions .link.terms a {
 padding-right:10px
}
#footer .spacer {
 background:url("../Images/separator.png") no-repeat center center;
 float:left
}
#footer #terms-conditions div {
 line-height:30px
}
#footer #terms-conditions .link {
 float:left
}
#footer #terms-conditions .copyright {
 float:right
}











  </style>


    </head>
<!-- NAVBAR
  ================================================== -->
 <body>



      <div id="demo-content">



<div id="content">
<!-- NAVBAR
  ================================================== -->
        <nav id="main-menu" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img alt="" src="https://www.moviehouse.co.uk/content/images/logo-moviehouse.png" >
            </div>
            <div >
              <ul class="nav navbar-nav" >
                <li class="nav-item active"><a class="nav-link " href="index.php">Home</a></li>
                <li class="nav-item" ><a class="nav-link"  href="movie.php" >Movies</a></li>
                <li class="nav-item" ><a class="nav-link"  href="Cinemas.php" >Cinemas</a></li>
                <li class="nav-item" ><a class="nav-link"  href="showtimes.php" >Show Times</a></li>
                <li class="nav-item" ><a class="nav-link"  href="food.php" >Food & Drink</a></li>
                <li class="nav-item" ><a class="nav-link"  href="pricing.php" >Buy Ticket</a></li>
                <li class="nav-item" ><a class="nav-link"  href="about.php" >About</a></li>
                <li class="nav-item"><a class="nav-link"  href="event.php" >Events &amp; Experiences</a></li>
                <li class="nav-item"><a class="nav-link"  href="javascript:void(0)" onclick="openLoginModal();"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>

              </ul>

            </div>

          </div>
        </nav>
</div>
      </div>
    <br>

    <?php include 'carousel.php'; ?>



    <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>

          <!-- login -->
          <div class="modal-body">
            <div class="box">
              <div class="content">

                <div class="error"></div>


                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    <input id="userName" class="form-control" type="text" placeholder="Username" name="Username">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                    <center>  <div class="small">Forgot password? <a href="forgot_pass.php">Click Here</a></div>
                          </center>
                          <br>
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                    <input id="registrationName" class="form-control" type="text" placeholder="username" name="username">
                    <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                    <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                  </form>
                </div>


              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Looking to
                <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Already have an account?</span>
                <a href="javascript: showLoginForm();">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>




<section class="Content">
            <article>




    <div  class="container">
      <table id="fresh-table" class="table" width="100%">
        <thead>
          <th data-field="name" data-sortable="true">Movie</th>
          <th data-field="shows">Shows</th>


        </thead>
        <tbody>

          <?php

          $movieRes=$conn->query("select * from movielist");
          while ($movieRow=$movieRes->fetch_object()) {

            ?>
            <tr>
              <td style="font-weight: bold;"><?php echo "".$movieRow->Name;?>
                <td style="font-weight: bold;"><?php echo "".$movieRow->time;?>

              </td>
              <td>

              </td>

            </tr>
            <?php  } ?>
          </tbody>


        </table>
      </div>


 </article>
        </section>



        <footer>

<section id="footer">
    <div id="footer-inner">
        <div class="col-3">
            <div class="col col-left">
                <div class="col-inner">
                    <a href="index.php">Home</a>
                </div>
                 <div class="col-inner">
                     <a href="Cinemas.php">Cinemas</a><br>
                </div>

            </div>
            <div class="col col-middle">

                <div class="col-inner">
                    <a href="about.php">Contact Us</a>
                </div>
                    <div class="col-inner">
                        <a href="event.php">Events &amp; Experiences</a>
                    </div>

            </div>

        </div>
        <div id="terms-conditions">

            <div class="spacer">&nbsp;</div>


        </div>
    </div>
</section>
        </footer>




   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap-table.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
    <script>
</body>
</html>
