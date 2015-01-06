<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/main.css">

        <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Modal -->
    <div class="modal" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog popout">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="image-modal-label">Modal title</h4>
          </div>
          <div class="modal-body">
            <!-- Navigations -->
            <div id="modal-arrow-left"><</div>
            <div id="modal-arrow-right">></div>
            <div id="modal-body-content">
            </div>
          </div>
          <div class="modal-footer">
           <i>Kris Finlayson's Gallery</i>
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
                      <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                  </div>
              </div>
              <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                  </div>
              </div>
              <div class="form-group">
                  <label for="message" class="col-sm-2 control-label">Message</label>
                  <div class="col-sm-10">
                      <textarea class="form-control" rows="4" name="message"></textarea>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                  </div>
              </div>
          </form>         
          </div>
          <div class="modal-footer">
           <i>Send me an email and we can talk til the cows come home!</i>
          </div>
        </div>
      </div>
    </div>

    <!-- ABOUT Modal -->
    <div class="modal" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog popout">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="image-modal-label">ABOUT</h4>
          </div>
          <div class="modal-body">
            <div class="well">
            <div class="row">
              <div class="col-md-6">
                <img src="img/profile.png">
              </div>
              <div class="col-md-6">
                  <p>I specialize in creating dynamic digital and print media. I have studied Media Arts and Graphic Design at CSU Chico for the past four years, but my love for design began in my early childhood. I am a videographer, editor, graphic designer, developer, marketing guru and overall creative person. 
</p>
                  <p>The majority of my experience deals with creating promotional videos, designing marketing material and strategies, and developing e-learning modules. I am a fast learner and pick up the newest programs and editing trends very quickly. </p>
                  <a class="btn btn-info" href="download/resume.pdf">Download Resume</a>
              </div>
            </div>  
          </div>
          </div>
          <div class="modal-footer">
           <i>Bits' about me.</i>
          </div>
        </div>
      </div>
    </div>

    <div id="pre-loader">
        <img src="img/profile.png">
        <h4>Loading profile ...</h4> 
        <svg id="rect-svg" width="40" height="40" viewbox="0 0 40 40">
          <!-- <rect width="40" height="40" class="rect" />  <- this looks buggy in retina safari -->
          <polygon points="0 0 0 40 40 40 40 0" class="rect" />
        </svg>       
    </div>

    <div class="wrapper">
      <div id="left-arrow"><</div>
      <div id="right-arrow">></div>
        <div class="row">
          <div class="col-md-12 header-wrap">
            <div class="navbar-header">              
              <a class="profile-name" href="#"><span class="firstname-title">Kris</span> Finlayson</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
              <ul class="menu main-menu">
                <li> <a id="work" href=""> WORK</a></li>
                <li> <a id="contact" data-toggle="modal" data-target="#contact-modal"> CONTACT</a></li>
                <li> <a id="about" data-toggle="modal" data-target="#about-modal"> ABOUT ME</a></li>
              </ul>
            </div>
          </div>
        </div><br>
        <div class="row">
          <ul class="menu sub-menu">
            <li> <a class="all"> Show All</a></li>
            <li> <a class="print"> Print</a></li>
            <li> <a class="web"> Web</a></li>
            <li> <a class="video"> Video</a></li>
          </ul>
        </div>
        <div id="slider-holder">
          <section id="print" class="popin contentsection">
            <div class="row">            
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cabin.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cake.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
             </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/circus.png" class="img-thumb" />  
                     <div class="mask">  
                       <h2>Title</h2>  
                       <p>Your Text</p>  
                       <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/safe.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/submarine.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cake.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
             </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/circus.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cabin.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cabin.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/circus.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
             </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cake.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/safe.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
            </div>
          </section>
          <section id="video" class="popin contentsection">
            <div class="row">            
              <div class="col-md-3 popout">
                <div class="view view-first">  
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/dYyapzh5nLM?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                     <div class="mask">  
                     <h2>Y NOT FLOW - Benefit Concert</h2>  
                     <p>Promo Video for Online Publishing.</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/GJOLvBZqjnE?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="mask">  
                     <h2>HOLI FESTIVAL - Unite Event</h2>  
                     <p>Promo Video for Online Publishing
                     </p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
             </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/Wy-NF3Qgx0U?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                     <div class="mask">  
                       <h2>PEEK PACKAGING - Mock Ups</h2>  
                       <p>Promo Video for Online Publishing <br>
                          Filmed, Edited and Motion Graphics</p>  
                       <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/8Ug-d7zqvec?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                     <div class="mask">  
                     <h2>IMMERSED - Chico University</h2>  
                     <p>Documentary Film Following International Students</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
            </div>
            <div class="row">            
              <div class="col-md-3 popout">
                <div class="view view-first">  
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/_A5ZrIyxaik?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                     <div class="mask">  
                     <h2>FIRST AID KIT - Music Video Project</h2>  
                     <p>Music Video Created for School Project</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/m8A8Jlhz94w?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="mask">  
                     <h2>PEEK PACKAGING - Product Showcase</h2>  
                     <p>Promo Video for Online Publishing <br>
                        Filmed, Edited and Motion Graphics</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
             </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe class="video-thumb" src="//www.youtube.com/embed/u0KRoYRoiEQ?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>
                    </div>
                     <div class="mask">  
                       <h2>JOHNNY BRAVO - Audio Project</h2>  
                       <p>Sound Editing Created for School Project <br>
                          Voices and Sound Effects by Kristina Finlayson</p>  
                       <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <!-- <iframe class="video-thumb" src="//www.youtube.com/embed/8Ug-d7zqvec" frameborder="0" allowfullscreen></iframe> -->
                        COMMING SOON
                    </div>
                     <div class="mask">  
                     <h2>Will be uploaded shortly <br> INFO SESSION - Chico State</h2>  
                     <p>
                        Informational Video Created for Study Abroad</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
            </div>
          </section>
          <section id="web" class="popin contentsection">
            <div class="row">            
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <!-- <img src="img/portfolio/cabin.png" class="img-thumb" /> -->
                     <iframe class="img-thumb" src="//www.youtube.com/embed/m8A8Jlhz94w?wmode=transparent&amp;autoplay=0&amp;theme=dark&amp;controls=1&amp;autohide=1&amp;loop=0&amp;showinfo=0&amp;rel=0&amp;playlist=false" frameborder="0" allowfullscreen></iframe>  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/cake.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
             </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/circus.png" class="img-thumb" />  
                     <div class="mask">  
                       <h2>Title</h2>  
                       <p>Your Text</p>  
                       <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
              <div class="col-md-3 popout">
                <div class="view view-first">  
                     <img src="img/portfolio/safe.png" class="img-thumb" />  
                     <div class="mask">  
                     <h2>Title</h2>  
                     <p>Your Text</p>  
                         <a href="#" class="info">View</a>  
                     </div>  
                </div> 
              </div>
            </div>
          </section>          
        </div>
      <hr>

      <footer>
        <p>Kristina Finlayson &copy; 2015</p>
      </footer>

    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
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
