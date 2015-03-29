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
    <!-- SEO -->
    <meta name=”description” content=”Kristina Finlayson kfinlayson portfolio for graphic and design”>
    <meta name="keywords"
    content="Graphic Design, Designer, Logos, Websites, E-commerce Websites, Printing, Business Cards, Stationery, Envelopes, Post Cards, Brochures, Rack Cards, Fliers, Ads, Appointment Cards, Hang Tags, Forms, Media Kits, Catalogs, Menus, Punch Cards, Posters, Signage, Photo Restoration, Retouching, Large Format Banners">
    <!-- Social media -->
    <meta property=”og:title” content=”Kritina Finlayson - Portfolio”/>
    <meta property=”og:type” content=”article”/>
    <meta property=”og:image” content=”http://kfinlayson.com/img/portfolio/Logo.jpg”/>
    <meta property=”og:url” content=”http://kfinlayson.com”/>
    <meta property=”og:description” content=”Awesome Graphics and UX designer”/>
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
    <link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css">
    <script src="bower_components/components-modernizr/modernizr.js"></script>
  </head>
  <body>
    <!-- Modal -->
    <div class="modal" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog popout modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-titlemoCONTACTdal-title" id="image-modal-label">Modal title</h4>
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
                <li data-section="about">About Me</li>
                <li data-section="featured">Featured Work</li>
                <li data-section="process">The Process</li>
                <li data-section="contact">Contact Me</li>
              </ul>
            </nav>
            <div id="menu-hider">
            </div>
          </div>
          <div class="col-md-9 container" id="pre-loader"><img src="img/loading-cylon.svg" alt="Loading icon" /> <br> Loading ...</div>
          <div class="col-md-9 container" id="module-container">
            <div class="row header-img-row">
              <img src="img/banner.jpg" style="width: 103%">
              <button id="say-hello-top" style="position:absolute; right:50px; top:75%" class="primary-btn">SAY HELLO</button>
            </div>
            
            <section id="about" class="content-section scrollable">
              
              <div class="row">
                <div class="col-md-12">
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
                        <img src="img/portfolio/Me_09.jpg" style="width: 320px">
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </section>
            <section id="featured" style="margin-bottom: 35px;" class="content-section scrollable">
              <h2 class="orange org-heading">FEATURED WORK</h2>
              <div id="work-module-container">
                <!-- <ul id="filter">
                  <li><a class="active" href="#" data-group="all">All</a></li>
                  <li><a href="#" data-group="featured">Featured</a></li>
                  <li><a href="#" data-group="graphic">Graphic Design</a></li>
                  <li><a href="#" data-group="design">UX Design</a></li>
                  <li><a href="#" data-group="video">Video Production</a></li>
                </ul> -->
                <div id="grid" class="row" style="margin-left: 0px;">
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
                  <div class="col-md-6 item"  data-groups='["all", "graphic"]'>
                    <img class="img-grid" src="img/portfolio/Portfolio_FinalDesign_13.jpg">
                    <div class="modal-details">
                      <span class="modal-tt">Technology and Data use</span>
                      <ul class="modal-slider">
                        <li><img src="img/details/MA_BB/MA_BBPage_16.jpg" /></li>
                        <li><img src="img/details/MA_BB/MA_YoutubeVideoBox.jpg" /></li>
                        <li>
                          <img src="img/details/MA_BB/INT04a-_Displaying_Data.jpg"/>
                        </li>
                      </ul>
                      <div class="row well">
                        <div class="col-md-8">The State Department of Massachusetts wanted an online course created in Blackboard. The challenge of the project was integrating our custom-made interactives into the LMS, which is not know for allowing much customization. To better illustrate more complex topics, we used animation, HTML interactives, illustrations, live video and imagery. </div>
                        <div class="col-md-4">
                          My Contributions <br>
                          <ul>
                            <li>Graphic Design</li>
                            <li>Wire Framing</li>
                            <li>Animation</li>
                            <li>Video-Editing</li>
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
                  <div class="col-md-6 item"  data-groups='["all", "graphic"]'>
                    <img class="img-grid" src="img/portfolio/Portfolio_FinalDesign_21.jpg">
                    <div class="modal-details">
                      <span class="modal-tt">User Experience Prototype</span>
                      Coming soon!
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
            <section id="quote" class="content-section scrollable">
              <p>
                EVERY TIME SOMEONE ASKS A DESIGNER TO JUST <br>
                <span class="org-heading">MAKE IT LOOK PRETTY,</span><br>
                A BABY KITTEN DIES.
              </p>
            </section>
            <section id="process" class="content-section scrollable">
              <h2 class="org-heading">THE PROCESS</h2>
              <div id="parentHorizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list hor_1">
                  <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="border-color: rgb(193, 193, 193); background-color: white;">SKETCH</li>
                  <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab" style="background-color: rgb(245, 245, 245);">MOCK-UP</li>
                  <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab" style="background-color: rgb(245, 245, 245);">DESIGN</li>
                  <li class="resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab" style="background-color: rgb(245, 245, 245);">DEVELOP</li>
                </ul>
                <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                  <div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                    <img src="img/process/01_Sketchit.jpg" />
                  </div>
                  <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1" style="border-color: rgb(193, 193, 193);">
                    <img src="img/process/02_MockIt.jpg" />
                  </div>
                  <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2" style="border-color: rgb(193, 193, 193);">
                    <img src="img/process/03_Designit.jpg" />
                  </div>
                  <div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3" style="border-color: rgb(193, 193, 193);">
                    <iframe width="100%" height="450" class="video-thumb" src="//www.youtube.com/embed/m73XCm3LKuM?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    
                  </div>
                </div>
              </div>
              
            </section>
            <section id="contact" style="margin-top:35px;" class="content-section scrollable">
              <div class="contact-form">
                <form method="POST">
                  <!-- <div class="col-md-4"><a href="download/resume.pdf" id="resume" target="_blank"></a></div>
                  <div class="col-md-4"><a href="" id="say-hello-bottom"></a></div>
                  <div class="col-md-4"><a href="" id="hireme"></a></div> -->
                  <h2 class="modal-title org-heading">CONTACT</h2>
                  <div class="row">
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-5">
                          <input type="text" id="name" required placeholder="Name" />
                        </div>
                        <div class="col-md-7">
                          <input type="email" placeholder="Email" required id="email" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <textarea id="message" required placeholder="Message"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="row">
                        <div class="col-md-12" style="font-size: 1.7rem; text-align:left;">
                          (918) 580 7351 <br>
                          kfinlayson9@gmail.com
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12" style="height: 150px;font-size: 1.7rem; text-align:left; margin-top:20px;">
                          Kristina Finlayson <br>
                            <span style="font-family: BebasNeue; font-style: bold;">BROOKLYN, NEW YORK</span>
                            <br>
                          <div class="row" style="text-align: center;">
                            <div class="col-xs-4">
                              <a href="https://www.linkedin.com/in/kfinlayson" target="_blank">
                                <span class="social linkedin"></span>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="https://www.facebook.com/kfinlayson19" target="_blank">
                                <span class="social facebook"></span>
                              </a>
                            </div>
                            <div class="col-xs-4">
                              <a href="https://instagram.com/kfinlayson9/" target="_blank">
                                <span class="social insta"></span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row" style="text-align: left; margin-left: 1px;">
                    <input type="submit" class="primary-btn" value="SUBMIT EMAIL" id="sendEmail" />
                  </div>
                </form>
              </div>
            </section>
            <span class="slideTop"> <img src="img/top.png" title="Jump to top"> </span>
            <footer>
              <p>Copyright &copy; <?php echo date("Y"); ?> Kristina Finlayson</p>
            </footer>
          </div>
        </div>
      </div>
    </div>
    <?php
    use google\appengine\api\mail\Message;
    $name=$email=$query="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = $_POST["message"];
    require_once 'google/appengine/api/mail/Message.php';
    $mail_options = [
    "sender" => $email,
    "to" => "tmjam.ahmed@gmail.com",
    "subject" => "Contacting you from portfolio",
    "textBody" => $query,
    ];
    echo $mail_options;
    try {
    $message = new Message($mail_options);
    $message->send();
    } catch (InvalidArgumentException $e) {
    echo "not send";
    }
    }
    ?>
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
    <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
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