<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index-md.css" type="text/css">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

    <script src="https://use.fontawesome.com/dbb8197a96.js"></script>

    <title>Daniel Mark</title>
  </head>
  <body>

    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="#">Home</a>
      <a href="contact-page.php">Contact</a>
      <!--<a href="https://www.youtube.com/channel/UCOejIjgZclE5zcjqhm6XHAA">YouTube</a>-->
      <a href="login-page.php">Login</a>
    </div>


    <div class="wrapper">

      <div class="header-container d-flex container">

        <div class="site-name-container">
          DM
        </div>

        <!-- navbar for lg screens -->
        <div class="navbar-container align-self-center ml-auto d-none d-lg-block">
          <div class="nav-link-container">
            <a href="#" class="navlink">Home</a>
          </div>

          <div class="nav-link-container">
            <a href="mailto:danielmark.uc@gmail.com?Subject=Hello!" target="_top" class="navlink">Contact</a>
          </div>

          <!--
          <div class="nav-link-container">
            <a href="https://www.youtube.com/channel/UCOejIjgZclE5zcjqhm6XHAA" target="top" class="navlink">YouTube</a>
          </div> -->

          <div class="nav-link-container">
            <a href="login-page.php" class="navlink">Login</a>
          </div>
        </div><!-- end of navbar container -->

        <div class="menu-button-container ml-auto d-lg-none">

          <div id="main">
            <button class="openbtn" onclick="openNav()"><img src="images/menu.png" class="menu-button" alt="Menu"></button>
          </div>

        </div>

      </div><!-- end of header container -->

      <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "100vw";
        document.getElementById("main").style.marginLeft = "100vw";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }
      </script>



      <div class="section-1-container container d-flex justify-content-center">
        <div class="half-face-container">
          <img src="images/half-face.png" class="half-face" alt="Daniel Mark">
        </div>

        <div class="orange-center-divider">
        </div>

        <div class="tagline-container d-flex align-items-center">
          Engineer<br>Developer<br>Designer
        </div>
      </div><!-- end of section 1 -->

      <div class="grey-dots d-flex justify-content-center">
        ......
      </div>


      <!-- section 2 -->
      <div class="section-2-container d-md-flex justify-content-center container">
        <div class="hi-img-container">
          <img src="images/hi-img.png" class="hi-img" alt="Hi!">
        </div>

        <div class="hi-right-container align-self-center">
          <div class="hi-container">
            Hi!
          </div>

          <div class="hi-text-container">
            I'm Danny, a developer & designer based in Chennai, India. I have a passion for designing and building things be it computers, websites or anything related to technology.
          </div>
        </div>
      </div><!-- end of section 2 -->

      <div class="grey-dots d-flex justify-content-center">
        ......
      </div>

      <!-- section 3 -->
      <div class="section-3-main-heading-container">
        What can I do?
      </div>

      <div class="section-3-container container d-md-flex justify-content-center">

        <div class="section-3-img-container-1">
          <img src="images/design.png" class="design-img" alt="Design">
        </div>


        <div class="section-3-para-container-1">
          <div class="section-3-sub-heading-container">
            Design anything you want.
          </div>

          <p>
            I can design both minimal and complex sites. I prefer focusing on content, typography and clean interfaces to convey your message!
          </p>
        </div><!-- end of section 3 para container -->
      </div><!-- end of section 3 -->


        <!-- section 3 second para container -->
      <div class="section-3-container container d-md-flex justify-content-center">

        <div class="section-3-para-container-2">
          <div class="section-3-sub-heading-container">
            Develop whatever you need.
          </div>

          <p>
            I can develop your designs and turn them into fully-functional, pixel-perfect websites that can run on any device using the latest technology!
          </p>
        </div><!-- end of section 3 para container -->

        <div class="section-3-img-container-2">
          <img src="images/develop.png" class="design-img" alt="Design">
        </div>

      </div><!-- end of section 3 -->

      <div class="grey-dots d-flex justify-content-center">
        ......
      </div>

      <!-- section 4 -->
      <div class="section-4-main-container">

        <div class="section-4-main-heading-container">
          Hire Me.
        </div>

        <div class="section-4-sub-heading-container">
          I am currently available for freelance work.
        </div>

        <p class="hire-me-para-container">
          Got a project you'd like me to work on or help with?<br>I'm always up for a good project to work on!
        </p>

        <div class="hire-me-button-container">
          <a href="mailto:danielmark.uc@gmail.com?Subject=Hello!" target="_top" class="hire-me-button">
            <i class="fa fa-envelope hire-me-icon fa-lg" aria-hidden="true"></i>Message me
          </a>
        </div><!-- end of hire-me buton holder -->

      </div><!-- end of section-4 container -->

      <div class="grey-dots d-flex justify-content-center">
        ......
      </div>

      <footer>

        <div class="container">
          <div class="footer-links-holder d-md-flex justify-content-around">
            <a href="https://www.facebook.com/thedanielmark" class="footer-links" target="top">Facebook</a>
            <a href="https://instagram.com/danielmarkd" class="footer-links" target="top">Instagram</a>
            <a href="https://www.linkedin.com/in/danielmarkd/" class="footer-links" target="top">LinkedIn</a>
            <a href="https://www.twitter.com/daniel_markd" class="footer-links" target="top">Twitter</a><!--
            <a href="enemies-list.php" class="footer-links">Enemies</a>-->
          </div>

          <div class="last-line-holder">
            &copy; 2019 Daniel Mark. All Rights Reserved.
          </div>
        </div>

      </footer><!-- end of footer -->



    </div><!-- end of wrapper -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
