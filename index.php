<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <meta http-equiv="cleartype" content="on">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" sizes="196x196" href="img/touch/touch-icon-196x196.png">
        <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">

        <!-- SEO: If mobile URL is different from desktop URL, add a canonical link to the desktop page -->
        <!--
        <link rel="canonical" href="http://www.example.com/" >
        -->

        <!-- Add to homescreen for Chrome on Android -->
        <!--
        <meta name="mobile-web-app-capable" content="yes">
        -->

        <!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
        <!--
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="">
        -->

        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <!--
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
        -->

        <link rel="stylesheet" href="bower_components/normalize.css/normalize.css">
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">        
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">        
        <link rel="stylesheet" href="css/main.css">
        <script src="bower_components/components-modernizr/modernizr.js"></script>
    </head>
    <body>
        <!-- Modal -->
        <div class="modal" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog popout modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="image-modal-label">Modal title</h4>
              </div>
              <div class="modal-body">
                <!-- Navigations -->
                <div class="slider-prev" id="modal-arrow-left"></div>
                <div class="slider-next" id="modal-arrow-right" style="right: 20px;"></div>
                <div id="modal-body-content">
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

        <!-- Add your site or application content here -->
        <div id="template-wrapper">
            <div class="body-container">                
                <div class="row">
                    <div id="menu-container">                            
                            <div id="profile-logo">
                                <div id="logo"><img src="img/portfolio/Logo.jpg"></div>
                                <span id="profile-name">KRISTINA FINLAYSON</span>
                            </div>
                            <nav>
                                <ul id="navigation">
                                    <li data-section="about">ABOUT ME</li>
                                    <li data-section="featured">FEATURED WORK</li>
                                    <li data-section="process">THE PROCESS</li>
                                    <li data-section="contact">Contact Me</li>
                                </ul>
                            </nav>
                        <div id="menu-hider">
                        </div>
                    </div>
                    <div class="col-md-9 container" id="module-container">
                        <div class="row">
                            <div class="col-md-12 header-img">
                                <button class="primary-btn" style="position:absolute; right:50px; top:75%">SAY HELLO</button>
                            </div>
                        </div>
                        <section id="about" class="content-section scrollable">
                            
                            <div class="row">
                                <div class="col-md-12" style="padding: 35px; font-size: 14px;line-height: 24px">
                                    <h2 class="orange org-heading">ABOUT ME</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="sub-heading"></h2>
                                            <p class="context">
                                                
                                                I am a print and digital designer, currently working and living in Brooklyn, New York, with

                                                a passion for presenting content creatively, wireframing, designing layouts, and creating

                                                anything media related. <br>

                                                Outside of designing cool stuff, I love coffee­shop doodling, traveling with one pair of

                                                pants and taking new streets to work everyday.
                                            </p>

                                            <div id="imgbadge">
                                                <img src="img/portfolio/me.jpg" style="width: 250px">
                                                <h4>ME</h4>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- <div class="row-fluid">
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_03.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_05.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_10.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_12.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_15.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_17.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_20.jpg">>
                                </div>
                                <div class="col-md-6 item">
                                    <img class="img-grid" src="img/portfolio/images/images/Color/PortfolioRedesign3-Recovered-Recovered_22.jpg">>
                                </div>
                               <button id="more-designs" class="primary-btn" style="float: right;"><i class="glyphicon glyphicon-arrow-left"></i> MORE DESIGNS</button>
                            </div> -->
                        </section>
                        <section id="featured" class="content-section scrollable" style="padding: 20px">
                            <h2 class="orange org-heading">FEATURED WORK</h2>
                            <div id="work-module-container">                            
                                <ul id="filter">
                                    <li><a class="active" href="#" data-group="all">All</a></li>
                                    <li><a href="#" data-group="featured">Featured</a></li>
                                    <li><a href="#" data-group="graphic">Graphic Design</a></li>
                                    <li><a href="#" data-group="design">UX Design</a></li>
                                    <li><a href="#" data-group="video">Video Production</a></li>
                                </ul>
                                <div id="grid" class="row">
                                    <div class="col-xs-12 col-md-6 item" data-groups='["all", "design", "featured"]'>
                                        <img class="img-grid" src="img/portfolio/Amplify.jpg">
                                        <div class="modal-details">
                                            <ul class="modal-bxslider">
                                              <li>                                   
                                                <img style="float:left" src="http://placehold.it/350x250" />
                                                <div id="modal-slider-content">
                                                    <p><h3>SKETCH IT</h3></p>
                                                </div>                                    
                                            </li>
                                              <li><img src="http://placehold.it/350x250" /></li>
                                              <li><img src="http://placehold.it/350x250" /></li>
                                              <li><img src="http://placehold.it/350x250" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 item" data-groups='["all", "desgin", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/WordPower.jpg">
                                    </div>
                                    <div class="col-md-6 item"  data-groups='["all", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/BurkeBabyAnnouncement.jpg">
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "video"]'>
                                        <img class="img-grid" src="img/portfolio/UNITE.jpg">
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "design"]'>
                                        <img class="img-grid" src="img/portfolio/MetabolicDates.jpg">
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "featured", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/BarryCozy.jpg">
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "desgin", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/CulturalCompetence.jpg">
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "video"]'>
                                        <img class="img-grid" src="img/portfolio/PeekPackaging.jpg">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="process" class="content-section scrollable">
                            <div id="process-gallery">
                                <h2 class="org-heading" style="color: white;">THE PROCESS</h2>
                                <p><span id="slider-prev" class="slider-prev"></span><span id="slider-next" class="slider-next"></span></p>
                                <ul class="bxslider">
                                  <li>                                   
                                    <img style="float:left" src="http://placehold.it/350x250" />
                                    <div class="slider-content">
                                        <h3>SKETCH IT</h3>
                                        <p>After the goals of a product or project are set, I put the ink to the paper and sketch all the

ideas that come to mind. I like this stage because there is nothing to be afraid of ­ it’s low

cost and low risk. And I get to listen to some music while I do it.</p>
                                    </div>                                    
                                </li>
                                  <li><img style="float:left" src="http://placehold.it/350x250" />
                                    <div class="slider-content">
                                        <h3>MOCK IT UP</h3>
                                        <p>Now, I mock up wireframes and prototypes for the client so they can see where I’m

headed. I usually show the client a few options and have them focus on overall design

and functionality. I listen to all of their feedback and then we prioritize it.</p>
                                    </div>
                                  </li>
                                  <li><img style="float:left" src="http://placehold.it/350x250" />
                                  <div class="slider-content">
                                        <h3>DESIGN IT</h3>
                                        <p>Time to compile all of the ideas, wireframes and client feedback into one polished idea.

This stage can also include some very low­stakes user testing/feedback. Some of my fav

design programs: Photoshop, Illustrator, After Effects, and Premiere.</p>
                                    </div>
                                  </li>
                                  <li><img style="float:left" src="http://placehold.it/350x250" />
                                    <div class="slider-content">
                                        <h3>DEVELOP IT</h3>
                                        <p>So, I have the design and functionality set ­ the only thing left is development. Whether

it’s coding, production or printing, this is when the idea is fully implemented. This means

collaborating with developers, printers and/or other vendors to finish the job.</p>
                                    </div>
                                  </li>
                                </ul>
                            </div>
                        </section>
                        <section id="contact" class="content-section scrollable">
                            <div class="row-fluid">
                                <div class="col-md-4"><img src="img/portfolio/Resume.jpg" /></div>
                                <div class="col-md-4"><img src="img/portfolio/SayHello.jpg" /></div>
                                <div class="col-md-4"><img src="img/portfolio/HireMe.jpg" /></div>
                            </div>    
                        </section>
                        <footer>
                            <p>Copyright &copy; Kristina Finlayson 2015</p>
                        </footer>   
                    </div>
                </div>
            </div>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="bower_components/shufflejs/dist/jquery.shuffle.min.js"></script>
        <script src="js/animatescroll.js-master/animatescroll.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/jquery-ui-scrollable.min.js"></script>

        <script src="js/helper.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');            
        </script>
    </body>
</html>
