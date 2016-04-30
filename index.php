<!DOCTYPE html>
<html lang="en">
  <?php include('includes/head.php');?>
  <body>
  <!-- This section is for Splash Screen -->
  <div class="ole">
      <section id="jSplash">
          <div id="circle"></div>
      </section>
  </div>
  <!-- End of Splash Screen -->

    <!-- header -->
   <?php include('includes/header.php');?>

    <nav class="navbar navbar-fixed-top" id="navbar">
          <ul class="nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#mywork">Work</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="SpecMyRide">SpecMyRide</a></li>
          </ul>
    </nav>


    <article id="about" class="about alternat-container givpadding">
      <div class="container">
          <div class="sectionheader withsub">
              <h1>About Me</h1>
              <h3>The most important thing to me is building products people love.</h3>
          </div>
          <div class="row">
            <div class="about-text col-xs-12 col-sm-6 col-sm-push-4">
                  <div class="fullname col-sx-12">
                    Levarne Sobotker
                  </div>
                  <div class="description col-sx-12">
                    An Aspiring Developer From Cape Town South Africa.
                  </div>
              </div>
              <div class="img-wrap col-xs-12 col-sm-4 col-sm-pull-6">
                <img class="featurette-image img-responsive center-block" alt="500x500" src="/images/me.jpg" data-holder-rendered="true">
              </div>
             
          </div>

          <div class="row skillset">
              <div class="col-sm-4">
                <h3>What I Do</h3>
                <p>
                    I am currently working as a Php, Javascript, Web and Mobile App Developer.
                    Building dynamic and responsive Web Apps to Senior Developer requirements.
                </p>
              </div>
              <div class="col-sm-4">
                <h3>What I Possess</h3>
                 <p>
                     I have a skillful learning attitude, I never underestimate the workflow of Information Systems.
                     Things do get complex and when they do, I am able to learn new skills in a heart beat.
                     That's especially what makes this industry so compelling!
                </p>
              </div>
              <div class="col-sm-4">
                 <h3>What My Skills Are</h3>
                  <p>
                      Skills used on daily basis => Php, mysql, javascript + frameworks , mvc, html5, sass, Bootstrap, OOP, SDL, Data Structures including json,
                      ajax, custom cms, dynamic coding, smarty templates, code tracking, trouble shooting.
                      And some: still embedded in my heart during my Studies.
                  </p>
              </div>
          </div>
      </div>
    </article>
    <article class="myWork givpadding" id="mywork">
      <div class="container">
          <div class="sectionheader withsub">
              <h1>My Work</h1>
              <h3>Extensive work done, back-end and front-end. Full Stack?</h3>
          </div>

          <div class="mozaikMyWork row">
              <!-- Filter -->
              <nav id="options" class="work-nav sidemenu col-sm-2">
                  <ul id="filters" class="option-set" data-option-key="filter">
                       <h3>TYPE OF WORK</h3>
                      <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                      <li><a href="#filter" data-option-value=".desktopItems">Desktop Site</a></li>
                      <li><a href="#filter" data-option-value=".mobileItems">Mobile Site</a></li>
                      <!--
                                            <li><a href="#filter" data-option-value=".mobileAppItems">Mobile Apps</a></li>
                                             <li><a href="#filter" data-option-value=".personalItems">Personal</a></li>
                                             -->
                  </ul>
              </nav>
              <!-- End Filter -->
              <div class="box-right col-sm-10" id="mazaik-container">

                <?php include('includes/work/desktop.php');?>
                <?php include('includes/work/mobile_site.php');?></div>
              <!--
                <?php include('includes/work/mobile_app.php');?>
               <?php include('includes/work/personal.php');?>
                -->

          </div>
      </div>
    </article>
    <article class="contactForm alternat-container givpadding" id="contact">
        <div class="container">
            <div class="sectionheader withsub">
                <h1>Get In Touch</h1>
                <h3>I am currently accepting new projects. I would love to hear from you.</h3>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div id="response"></div>
                    <form id="contact-form" class="contact-form" action="#">
                        <div class="form-group">
                            <input id="contact_name" class="form-control" type="text" placeholder="Full Name" value="" name="name">
                        </div>
                        <div class="form-group">
                            <input id="contact_email" class="form-control" type="text" placeholder="Email Address" value="" name="email">
                        </div>
                        <div class="form-group">
                            <textarea id="contact_message" class="form-control" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                        </div>
                        <div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
                            <a id="contact-submit" class="btn btn-primary" href="javascript:;">Send Email</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h3>CONTACT DETAILS</h3>
                    <ul>
                        <li><a href="mailto:levarne.sobotker@gmail.com">levarne.sobotker@gmail.com</a></li>
                        <li><a href="">081 465 3949</a></li>
                        <li><a href="">Cape Town</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </article>
    <footer class="footer">
        <div class="container givpadding-50">
            <a href="https://za.linkedin.com/in/levarne-sobotker-07514453" target="_blank" class="icons"><span class="fa fa-linkedin fa-3x"></span></a>
            <a href="https://www.facebook.com/levarne.sobotker" target="_blank" class="icons"><span class="fa fa-facebook fa-3x"></span></a>
        </div>
        <div class="alternat-container">
            <div class="container">
                    2016 Levarne Sobotker. Original. Portfolio.
            </div>
        </div>
    </footer>

    <!-- /.container -->

    <?php include('includes/js.php');?>
  </body>
</html>