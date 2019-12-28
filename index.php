<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hi! I'm danny, a developer and designer based in Chennai, India. I build apps, websites and computers. I also make videos for YouTube!">
    <meta name="keywords" content="Web developer, full-stack developer, full stack developer, software engineer, danielmarkd, daniel mark, daniel mark website">
    <meta property="og:image" content="images/Capture.PNG" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://danielmarkd.com" />
    <meta property="og:title" content="Daniel Mark" />
    <meta property="og:description" content="Hey, I'm Danny! I'm a developer based in Chennai, India. I build apps, websites and computers. I also make videos for YouTube!" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href=css/index.css rel=stylesheet>
    <link href=images/favicon.png rel="shortcut icon" type=image/png> <script src="https://kit.fontawesome.com/b50a302a44.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Daniel Mark</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <div class="close-button pt-2 pr-4"> <i class="fas fa-times-circle" onclick="closeNav()"></i> </div>
        <ul class="menu-ul">
            <li class="menu-li"><a href="#">Home</a></li>
            <li class="menu-li"><a href="contact.html">Contact</a></li>
            <li class="menu-li"><a href="https://www.youtube.com/channel/UCRO3ipEkZHDnFn5mfCm2hzA" target="top">YouTube</a></li>
            <li class="menu-li"><a href="webmail">Login</a></li>
        </ul>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100vw";
            document.getElementById("main").style.marginLeft = "0";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <div class="complete-wrapper" id="main">
        <div class="header-container d-md-none">
            <div class="header-xs">
                <div class="site-name-container pl-4"> DM </div>
                <div class="open-button pr-4" onclick="openNav()"> <i class="fas fa-bars"></i> </div>
            </div>
        </div>
        <div class="top-padding"></div>
        <div class="top-padding d-none d-md-block"></div>
        <div class="d-none d-md-block header-container uncompressed">
            <div class="container">
                <script type="text/javascript">
                    $(document).ready(function() {
                        $(window).on("scroll", function() {
                            if ($(window).scrollTop() >= 20) {
                                $(".header-container").removeClass("uncompressed").addClass("compressed");
                            } else {
                                $(".header-container").removeClass("compressed").addClass("uncompressed");
                            }
                        });
                    });
                </script>
                <div class="site-name-container ml-0"> DM </div>
                <div class="align-self-center navbar-container">
                    <div class=nav-link-container> <a href=# class=navlink>Home</a> </div>
                    <div class=nav-link-container> <a href="contact.html" class=navlink target=_top>Contact</a> </div>
                    <div class=nav-link-container> <a href="resume.pdf" class=navlink target=_top>Resume</a> </div>
                    <div class=nav-link-container> <a href=https://www.youtube.com/channel/UCRO3ipEkZHDnFn5mfCm2hzA target=top class=navlink>YouTube</a> </div>
                    <div class=nav-link-container> <a href=/webmail class=navlink>Login</a> </div>
                </div>
            </div>
        </div>
        <div class="wrapper container">
            <div class="justify-content-center d-flex container section-1-container">
                <div class=half-face-container> <img alt="Daniel Mark" class=half-face src=images/half-face.png> </div> <div class=orange-center-divider></div>
                <div class="d-flex align-items-center tagline-container"> Engineer<br>Developer<br>Designer </div>
            </div>

            <div class="justify-content-center d-flex grey-dots">......</div>

            <div class="justify-content-center container d-md-flex section-2-container">
                <div class=hi-img-container> <img alt=Hi! class=hi-img src=images/hi-img.png> </div> <div class="align-self-center hi-right-container">
                    <div class=hi-container> Hi! </div>
                    <div class=hi-text-container> I'm Danny, a developer based in Chennai, India. I build websites, apps and design stuff. I love music, reading, Iron Man, Metallica and animated platypuses. I also make videos for YouTube! </div>
                </div>
            </div>

            <div class="justify-content-center d-flex grey-dots">......</div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-md-10">

                        <div class="d-flex justify-content-center experience-container">
                            Professional Experience
                        </div>


                        <div class="container mt-5 py-2">

                            <!-- timeline item 0 -->
                            <div class="row no-gutters">
                                <div class="col-sm py-2">
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <div class="float-right small">Dec 2019 - Present</div>
                                            <h4 class="card-title mb-2">MixSpace</h4>
                                            <span class="badge badge-dark mb-3">Owner</span>
                                            <p class="card-text">MixSpace is a fully-managed Linux based web hosting service I own. It provides hosting for anything from small hobbyist websites to full-blown apps that need to scale up.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- center dot 0 -->
                                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <h5 class="m-2">
                                        <span class="badge badge-pill orange">&nbsp;</span>
                                    </h5>
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!--spacer-->
                                </div>
                            </div>
                            <!--/row-->

                            <!-- timeline item 1 -->
                            <div class="row no-gutters">

                                <div class="col-sm">
                                    <!--spacer-->
                                </div>
                                <!-- timeline item 1 center dot -->
                                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <h5 class="m-2">
                                        <span class="badge badge-pill orange">&nbsp;</span>
                                    </h5>
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- timeline item 1 event content -->
                                <div class="col-sm py-2">
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <div class="float-right small">Sept 2018 - Present</div>
                                            <h4 class="card-title mb-2">TORVIS</h4>
                                            <span class="badge badge-dark mb-3">Software Engineer</span>
                                            <p class="card-text">TORVIS is an unregistered start-up I founded in 2018 that builds scalable automation platforms for different environments.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <!-- timeline item 2 -->
                            <div class="row no-gutters">
                                <div class="col-sm py-2">
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <div class="float-right small">Jan 2019 - Present</div>
                                            <h4 class="card-title mb-2">S360 Media Group</h4>
                                            <span class="badge badge-dark mb-3">Content Creator</span>
                                            <p class="card-text">S360 Media Group is a production company located in Chennai, India. I make content for YouTube at this studio.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <h5 class="m-2">
                                        <span class="badge badge-pill orange">&nbsp;</span>
                                    </h5>
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!--spacer-->
                                </div>
                            </div>
                            <!--/row-->
                            <!-- timeline item 3 -->
                            <div class="row no-gutters">
                                <div class="col-sm">
                                    <!--spacer-->
                                </div>
                                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <h5 class="m-2">
                                        <span class="badge badge-pill orange">&nbsp;</span>
                                    </h5>
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-sm py-2">
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <div class="float-right small">June 2018 - Present</div>
                                            <h4 class="card-title mb-2">YBSS</h4>
                                            <span class="badge badge-dark mb-3">Full-Stack Developer</span>
                                            <p class="card-text">YBSS is an NGO based in Andhra Pradesh, India that I work for as a full-stack developer. I built their site and maintain it on a voluntary basis but don't actively develop for them anymore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <!-- timeline item 4 -->
                            <div class="row no-gutters">
                                <div class="col-sm py-2">
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <div class="float-right small">April 2017 - June 2017</div>
                                            <h4 class="card-title mb-2">GGBK</h4>
                                            <span class="badge badge-dark mb-3">Full-Stack Developer</span>
                                            <p class="card-text">GGBK is an NGO based in West Bengal, India that I worked for as a full-stack developer.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <h5 class="m-2">
                                        <span class="badge badge-pill orange">&nbsp;</span>
                                    </h5>
                                    <div class="row h-50">
                                        <div class="col">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <!--spacer-->
                                </div>
                            </div>
                            <!--/row-->
                        </div>

                    </div>
                </div>
            </div>

            <div class="justify-content-center d-flex grey-dots">......</div>

            <div class="container">
                <div class="row">
                    <div class="coding-languages col-xs-12 col-md-6">
                        <div class="skills-headings justify-content-md-center"> Coding Languages I'm Best At </div>
                        <div class="row justify-content-start pl-4 pl-md-0 justify-content-md-center coding-language-name">
                            <table cellpadding="10px" class="mt-2 mb-4 mb-md-0">
                                <tr>
                                    <td> <i class="fab fa-js-square"></i> </td>
                                    <td> JavaScript </td>
                                </tr>
                                <tr>
                                    <td> <i class="fab fa-php"></i> </td>
                                    <td> PHP </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="frameworks col-xs-12 col-md-6">
                        <div class="skills-headings justify-content-md-center"> Frameworks I can Work With </div>
                        <div class="row justify-content-start pl-4 pl-md-0 justify-content-md-center coding-language-name">
                            <table cellpadding="10px" class="mt-2 mb-4 mb-md-0">
                                <tr>
                                    <td> <i class="fab fa-bootstrap"></i> </td>
                                    <td> Bootstrap </td>
                                </tr>
                                <tr>
                                    <td> <i class="fab fa-angular"></i> </td>
                                    <td> Angular </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-0 mt-md-5">
                    <div class="coding-languages col-xs-12 col-md-6">
                        <div class="skills-headings justify-content-md-center"> My Personal Projects </div>
                        <div class="row justify-content-start pl-4 pl-md-0 justify-content-md-center coding-language-name">
                            <table cellpadding="10px" class="mt-2 mb-4 mb-md-0">
                                <tr>
                                    <td> <i class="fas fa-comments"></i> </td>
                                    <td> DHS One </td>
                                </tr>
                                <tr>
                                    <td> <i class="fas fa-server"></i> </td>
                                    <td> Emet </td>
                                </tr>
                                <tr>
                                    <td> <i class="fas fa-swatchbook"></i> </td>
                                    <td> Frecord </td>
                                </tr>
                                <tr>
                                    <td> <i class="fas fa-newspaper"></i> </td>
                                    <td> Pixelly </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="frameworks col-xs-12 col-md-6">
                        <div class="skills-headings justify-content-md-center"> My Interests </div>
                        <div class="row justify-content-start pl-4 pl-md-0 justify-content-md-center coding-language-name">
                            <table cellpadding="10px" class="mt-2 mb-4 mb-md-0">
                                <tr>
                                    <td> <i class="fas fa-sort-amount-up"></i> </td>
                                    <td> Scalable Web Apps </td>
                                </tr>
                                <tr>
                                    <td> <i class="fas fa-sitemap"></i> </td>
                                    <td> Distributed Computing </td>
                                </tr>
                                <tr>
                                    <td> <i class="fas fa-palette"></i> </td>
                                    <td> UI And UX Design </td>
                                </tr>
                                <tr>
                                    <td> <i class="fas fa-project-diagram"></i> </td>
                                    <td> Computer Networking </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="justify-content-center d-flex grey-dots">......</div>

            <div class=section-3-main-heading-container> What can I do? </div>
            <div class="justify-content-center container d-md-flex section-3-container">
                <div class=section-3-img-container-1> <img alt=Design class=design-img src=images/design.png> </div> <div class=section-3-para-container-1>
                    <div class=section-3-sub-heading-container> Design anything you want. </div>
                    <p> I can design both minimal and complex interfaces. I prefer focusing on content, typography and clean interfaces to convey your message! </p>
                </div>
            </div>
            <div class="justify-content-center container d-md-flex section-3-container">
                <div class=section-3-para-container-2>
                    <div class=section-3-sub-heading-container> Develop whatever you need. </div>
                    <p> I can develop your designs and turn them into fully-functional, pixel-perfect interfaces that can run on any device using the latest technology! </p>
                </div>
                <div class=section-3-img-container-2> <img alt=Design class=design-img src=images/develop.png> </div> </div> <div class="justify-content-center d-flex grey-dots">......</div>

                <div class=section-4-main-container>
                    <div class=section-4-main-heading-container> Hire Me. </div>
                    <div class=section-4-sub-heading-container> I am currently available for freelance work. </div>
                    <p class=hire-me-para-container> Got a project you'd like me to work on or help with?<br>I'm always up for a good project to work on! </p>
                    <div class=hire-me-button-container> <a href="contact.html" class="hire-me-button" target="_top"><i aria-hidden="true" class="fa fa-envelope fa-lg hire-me-icon"></i> Message me </a> </div>
                </div>
                <div class="justify-content-center d-flex grey-dots">......</div>
            </div>
        </div>

        <footer>
            <div class="container pt-5 pb-5">
                <div class="row d-flex pb-3">
                    <div class="col-xs-12 col-md-3 mt-3 mt-md-0">
                        <div class="h6 mb-3">
                            Daniel Mark
                        </div>
                        <p class="pr-md-5 ">
                            Still here? You must be very interested! Why not send me a message or consider checking out my other work?
                        </p>
                    </div><!-- end of column -->
                    <div class="col-xs-12 col-md-3 mt-3 mt-md-0">
                        <ul class="list-unstyled">
                            <li class="h6 mb-3">
                                Business
                            </li>
                            <li class="pb-1">
                                <a href=https://mixspace.danielmarkd.com/ class=footer-links target=top>MixSpace</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://www.youtube.com/channel/UCRO3ipEkZHDnFn5mfCm2hzA class=footer-links target=top>YouTube</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://www.facebook.com/studio360degreeschennai/ class=footer-links target=top>S360</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://instagram.com/pixellymedia class=footer-links target=top>Pixelly</a>
                            </li>
                        </ul>
                    </div><!-- end of column -->
                    <div class="col-xs-12 col-md-3 mt-3 mt-md-0">
                        <ul class="list-unstyled">
                            <li class="h6 mb-3">
                                Projects
                            </li>
                            <li class="pb-1">
                                <a href=https://one.danielmarkd.com/ class=footer-links target=top>DHS One</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://emet.danielmarkd.com/ class=footer-links target=top>Emet</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://frecord.danielmarkd.com/ class=footer-links target=top>Frecord</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://torvis.danielmarkd.com/ class=footer-links target=top>Torvis</a>
                            </li>
                        </ul>
                    </div><!-- end of column -->
                    <div class="col-xs-12 col-md-3 mt-3 mt-md-0">
                        <ul class="list-unstyled">
                            <li class="h6 mb-3">
                                Social Media
                            </li>
                            <li class="pb-1">
                                <a href=https://www.facebook.com/thedanielmark class=footer-links target=top>Facebook</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://instagram.com/danielmarkd class=footer-links target=top>Instagram</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://www.linkedin.com/in/danielmarkd/ class=footer-links target=top>LinkedIn</a>
                            </li>
                            <li class="pb-1">
                                <a href=https://www.twitter.com/daniel_markd class=footer-links target=top>Twitter</a>
                            </li>
                        </ul>
                    </div><!-- end of column -->
                </div><!-- end of row -->
                <hr class="dark-hr">
                <div class="last-line-holder pt-3">
                    © 2019 Daniel Mark. All Rights Reserved.
                </div>
                <div class="last-line-holder pt-2">
                    Powered by <a href="https://mixspace.danielmarkd.com/">MixSpace</a>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>