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
        <link rel="shortcut icon" sizes="196x196" href="img/touch/Favicon.ico">
        <link rel="shortcut icon" href="img/touch/Favicon.ico">

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
        <link rel="stylesheet" href="css/bottom.css">
        <link rel="stylesheet" href="css/asAccordion.css">
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
                <!-- <div class="slider-prev" id="modal-arrow-left"></div>
                <div class="slider-next" id="modal-arrow-right" style="right: 20px;"></div> -->
                <div id="modal-body-content">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- CONTACT Modal -->
        <div class="modal" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog popout">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="image-modal-label">What to have a chat?</h4>
              </div>
              <div class="modal-body">   
                <form class="form-horizontal" role="form" method="post" action="index.php">
                  <div class="form-group">
                      <label for="name" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                          <input type="text" required class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                          <input type="email" required class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="message" class="col-sm-2 control-label">Message</label>
                      <div class="col-sm-10">
                          <textarea required class="form-control" rows="4" name="message"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-10 col-sm-offset-2">
                          <input id="submit" name="submit" type="submit" value="Send" class="primary-btn">
                      </div>
                  </div>
              </form>         
              </div>
              <div class="modal-footer">
               Send me an email and we can talk til the cows come home!
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
                                <div id="logo"><img style="margin-bottom: 35px;" src="img/portfolio/Logo.jpg"></div>
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
                    <div class="col-md-9 container" id="pre-loader"><img src="img/loading-cylon.svg" alt="Loading icon" /> <br> Loading ...</div>
                    <div class="col-md-9 container" id="module-container">
                        <div class="row">
                            <div class="col-md-12 header-img">
                                <button id="say-hello-top" style="position:absolute; right:50px; top:75%" class="primary-btn">SAY HELLO</button>
                            </div>
                        </div>
                        <section id="about" class="content-section scrollable">
                            
                            <div class="row">
                                <div class="col-md-12" style="padding: 35px 85px; font-size: 14px;line-height: 24px">
                                    <h2 class="orange org-heading">ABOUT ME</h2>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 class="sub-heading"></h2>
                                            <p class="context">
                                                
                                                I am a print and digital designer, currently working and living in Brooklyn, New York, with

                                                a passion for presenting content creatively, wireframing, designing layouts, and creating

                                                anything media related. <br> <br>

                                                Outside of designing cool stuff, I love coffee­shop doodling, traveling with one pair of

                                                pants and taking new streets to work everyday.
                                            </p>

                                            <div id="imgbadge">
                                                <img src="img/portfolio/Me_09.jpg" style="width: 290px">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                        <section id="featured" class="content-section scrollable" style="padding: 0px 70px;">
                            <h2 class="orange org-heading">FEATURED WORK</h2>
                            <div id="work-module-container">                            
                                <!-- <ul id="filter">
                                    <li><a class="active" href="#" data-group="all">All</a></li>
                                    <li><a href="#" data-group="featured">Featured</a></li>
                                    <li><a href="#" data-group="graphic">Graphic Design</a></li>
                                    <li><a href="#" data-group="design">UX Design</a></li>
                                    <li><a href="#" data-group="video">Video Production</a></li>
                                </ul> -->
                                <div id="grid" class="row">                                    
                                    <div class="col-xs-12 col-md-6 item" data-groups='["all", "desgin", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/WordPower.jpg">
                                         <div class="modal-details">
                                            <span class="modal-tt">Word Power - Logo Design</span>
                                            <ul class="modal-slider">
                                              <li>
                                                <img src="img/details/WordPower/Logo_09.jpg"/>
                                              </li>
                                              <li><img src="img/details/WordPower/brandingkit_09.jpg" /></li>
                                              <li><img src="img/details/WordPower/envelope_09.jpg" /></li>
                                              <li><img src="img/details/WordPower/Website_09.jpg" /></li>
                                              <li><img src="img/details/WordPower/Sketch_09.jpg" /></li>
                                            </ul>
                                            <div class="row well">
                                                <div class="col-md-8">Shaun Harrison, the founder of Word Power, approached me to create a logo design and branding kit for his startup in Barcelona, Spain.  Word Power provides coaching for individuals looking to improve their presentation and interview skills. The kit includes a logo design, envelopes, business cards, letterheads and posters. </div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>Graphic Design</li>
                                                        <li>Logo Design</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 item" data-groups='["all", "design", "featured"]'>
                                        <img class="img-grid" src="img/portfolio/Amplify.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">Amplify - Professional Learing Maps</span>
                                            <ul class="modal-slider">                                                
                                                <li><img src="img/details/Amplify/Interface.jpg" /></li>
                                              <li><img src="img/details/Amplify/Video.jpg" /></li>
                                              <li>
                                                <img src="img/details/Amplify/Illustrations.jpg"/>
                                              </li>
                                              <li><img src="img/details/Amplify/Amplify_04.jpg" /></li>
                                            </ul>
                                            <div class="row well">
                                                <div class="col-md-8">Amplify is creating Professional Development like never before. Professional Learning Maps is a product that offers quick and effective online learning for educators that don’t have a lot of time. It starts with a survey, where educators self assess how often they practice using certain skills. The results of the survey gives each educator a personalized learning map so that they can start practicing those skills they want the help most with.</div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>UX Design</li>
                                                        <li>Instructional Design</li>
                                                        <li>Graphic Design</li>
                                                        <li>Video Production</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                    <div class="col-md-6 item" data-groups='["all", "desgin", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/CulturalCompetence.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">Cultural Competence</span>
                                            <ul class="modal-slider">
                                                <li><img src="img/details/CulturalCompetence/CC_1.jpg"/></li>
                                                <li><img src="img/details/CulturalCompetence/CC_3.jpg"/></li>
                                                <li><img src="img/details/CulturalCompetence/CC_4_13.jpg"/></li>
                                              <li><img src="img/details/CulturalCompetence/video_09.jpg"/></li>
                                            </ul>
                                            <div class="row well">
                                                <div class="col-md-8">My main task at VSP was to create a new training module about Cultural Diversity. This module was to open up a way of learning for the company - a module with multimedia and fun ways to interact with the content - not just reading text on screen. Cultural Competence and DIversity can be a touchy subject to talk about, so I planned to get the employees to talk about their experiences and do the teaching themselves. </div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>Graphic Design</li>
                                                        <li>UX Design</li>
                                                        <li>Video Production</li>
                                                        <li>Animation</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "video"]'>
                                        <img class="img-grid" src="img/portfolio/UNITE.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">UNITE</span>
                                            <div class="row">
                                                <div class="col-md-12"><iframe width="100%" height="400px" class="video-thumb" src="//www.youtube.com/embed/GJOLvBZqjnE?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe></div>
                                                <div class="col-md-12"><iframe width="100%" height="400px" class="video-thumb" src="//www.youtube.com/embed/R3VvMNuH8_w?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe></div>
                                            </div>
                                            
                                            <div class="row well">
                                                <div class="col-md-8">Universal Networks in Travel and Education wanted me to help increase attendance to their events via social media. I created a series of promotional videos and flyers for club members to share with friends and family online and helped managed the sites to get people more excited. </div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>Video Editing</li>
                                                        <li>Graphic Design</li>
                                                        <li>Marketing and Recruitment</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6 item" data-groups='["all", "featured", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/BarryCozy.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">Barry Clean</span>
                                            <ul class="modal-slider">
                                              <li>
                                                <img src="img/details/Barry/BarryClean_1.jpg"/>
                                              </li>
                                              <li><img src="img/details/Barry/BarryClean_2.jpg" /></li>
                                              <li><img src="img/details/Barry/BarryClean_3_13.jpg" /></li>
                                            </ul>
                                            <div class="row well">
                                                <div class="col-md-8">Meet Barry - the kick-starter of the homemade soap product, BarryClean. He wanted soap packaging that was simple, easy to produce and inexpensive to print. So, I created something that adhered to any and all types of paper to give him the flexibility to change it depending on the scent and/or shape of the soap. Meanwhile the design for the other part of the packaging stayed clear and consistent.</div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>Branding</li>
                                                        <li>Graphic Design</li>
                                                        <li>Packaging Design</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "design"]'>
                                        <img class="img-grid" src="img/portfolio/MetabolicDates.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">Metabolic Dates - Logo</span>
                                            <ul class="modal-slider">
                                              <li>
                                                <img src="img/details/MetabolicDates/metabolicdates_09.jpg"/>
                                              </li>
                                            </ul>
                                            <div class="row well">
                                                <div class="col-md-8">If you’ve ever had a bad date, then this blog is for you. A blogger shares true stories of her really really awkward date experiences that took her way too much work/effort than they were worth. She asked me for a logo design that combined the idea of hard work and dating and this is what she got.</div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>Logo Design</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item" data-groups='["all", "video"]'>
                                        <img class="img-grid" src="img/portfolio/PeekPackaging.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">Peek Packaging</span>
                                            <iframe width="100%" height="400px" class="video-thumb" src="//www.youtube.com/embed/Wy-NF3Qgx0U?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 item"  data-groups='["all", "graphic"]'>
                                        <img class="img-grid" src="img/portfolio/BurkeBabyAnnouncement.jpg">
                                        <div class="modal-details">
                                            <span class="modal-tt">Baby Burke - Announcement</span>
                                            <ul class="modal-slider">
                                              <li>
                                                <img src="img/details/BabyBurke/FinalConcept_09.jpg"/>
                                              </li>
                                              <li><img src="img/details/BabyBurke/InitialConcept_09.jpg" /></li>
                                              <li><img src="img/details/BabyBurke/Photo_09.jpg" /></li>
                                            </ul>
                                            <div class="row well">
                                                <div class="col-md-8">The Burke family wanted a two-in-one announcement celebrating the baby to come and their recent move to Brooklyn. The design started as a series of picture frames with snippets of moments from the family’s life, but was then simplified down to what you see now. The envelope was made from light-brown stock paper and was lined with a pink and white textured recycled paper.</div>
                                                <div class="col-md-4">
                                                    My Contributions <br>
                                                    <ul>
                                                        <li>Client Consultation</li>
                                                        <li>Graphic Design</li>
                                                        <li>Illustration</li>
                                                        <li>Printing/Production</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="process" class="content-section scrollable">
                            <h2 class="org-heading" style="padding: 25px 85px;">THE PROCESS</h2>
                            <ul id="process-flow" data-direction="vertical" class="-accordion -accordion--basic -accordion--vertical">
                              <li class="-accordion__panel">
                                <span class="-accordion__heading">SKETCH IT<span class="-accordian-count">1</span></span>
                                <div class="-accordion__expander"><img src="img/process/01_Sketchit.jpg" /></div>
                              </li>
                              <li class="-accordion__panel" > 
                                <span class="-accordion__heading">MOCK IT UP<span class="-accordian-count">2</span></span>
                                <div class="-accordion__expander"><img src="img/process/02_MockIt.jpg" /></div>
                              </li>
                              <li class="-accordion__panel"> 
                                <span class="-accordion__heading">DESIGN IT<span class="-accordian-count">3</span></span>
                                <div class="-accordion__expander"><img src="img/process/03_Designit.jpg" /></div>
                              </li>
                                <li class="-accordion__panel"> 
                                <span class="-accordion__heading">DEVELOP IT<span class="-accordian-count">4</span></span>
                                <div class="-accordion__expander">
                                    <iframe width="100%" height="105%" class="video-thumb" src="//www.youtube.com/embed/m73XCm3LKuM?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                                    </div>
                              </li>
                            </ul>
<!--
                            <div id="process-gallery">
                                <h2 class="org-heading" style="color: white;">THE PROCESS</h2>
                                <p><span id="slider-prev" class="slider-prev"></span><span id="slider-next" class="slider-next"></span></p>
                                <ul class="bxslider">
                                  <li>                                   
                                    <img style="float:left" src="img/process/sketch_13.jpg" />
                                    <div class="slider-content">
                                        <h3>SKETCH IT</h3>
                                        <p>After the goals of a product or project are set, I put the ink to the paper and sketch all the

ideas that come to mind. I like this stage because there is nothing to be afraid of ­ it’s low

cost and low risk. And I get to listen to some music while I do it.</p>
                                    </div>                                    
                                </li>
                                  <li><img style="float:left" src="img/process/wireframe_13.jpg" />
                                    <div class="slider-content">
                                        <h3>MOCK IT UP</h3>
                                        <p>Now, I mock up wireframes and prototypes for the client so they can see where I’m

headed. I usually show the client a few options and have them focus on overall design

and functionality. I listen to all of their feedback and then we prioritize it.</p>
                                    </div>
                                  </li>
                                  <li><img style="float:left" src="img/process/designit_13.jpg" />
                                  <div class="slider-content">
                                        <h3>DESIGN IT</h3>
                                        <p>Time to compile all of the ideas, wireframes and client feedback into one polished idea.

This stage can also include some very low­stakes user testing/feedback. Some of my fav

design programs: Photoshop, Illustrator, After Effects, and Premiere.</p>
                                    </div>
                                  </li>
                                  <li><img style="float:left" src="img/process/wireframe_13.jpg" />
                                    <div class="slider-content">
                                        <h3>DEVELOP IT</h3>
                                        <p>So, I have the design and functionality set ­ the only thing left is development. Whether

it’s coding, production or printing, this is when the idea is fully implemented. This means

collaborating with developers, printers and/or other vendors to finish the job.</p>
                                    </div>
                                  </li>
                                </ul>
                            </div>
-->
                        </section>
                        <section id="contact" class="content-section scrollable">
                            <div class="row-fluid">
                                <div class="col-md-4"><a href="download/resume.pdf" id="resume" target="_blank"></a></div>
                                <div class="col-md-4"><a href="" id="say-hello-bottom"></a></div>
                                <div class="col-md-4"><a href="" id="hireme"></a></div>
                            </div>    
                        </section>
                        <footer>
                            <p>Copyright &copy; 2015 Kristina Finlayson</p>
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
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.pikachoose.min.js"></script>
        <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
        <script type="text/javascript" src="js/jquery-asAccordion.js"></script>

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
