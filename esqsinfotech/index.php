<?php
if ($_POST) {
    if (isset($_POST['name']))
        $name = $_POST['name'];
    if (isset($_POST['email']))
        $email = $_POST['email'];
    if (isset($_POST['message']))
        $message = $_POST['message'];
    if (isset($_POST['contact']))
        $contact = $_POST['contact'];
    if ($name === '') {
        echo "Name cannot be empty.";
        die();
    }
    if ($email === '') {
        echo "Email cannot be empty.";
        die();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email format invalid.";
            die();
        }
    }
    if ($contact === '') {
        echo "Contact cannot be empty.";
        die();
    }
    if ($message === '') {
        echo "Message cannot be empty.";
        die();
    }
    $content = "From: $name \nEmail: $email \nMessage: $message";
    $recipient = "esqsinfotech@gmail.com";
    $mailheader = "From: $email \r\n";
    mail($recipient, $contact, $content, $mailheader) or die("Error!");
    echo "Email sent!";
}
?>
<!DOCTYPE html>
<!-- saved from url=(0050)https://getbootstrap.com/docs/4.0/examples/album/# -->
<html lang="en">

<head>
    <title>ESQS Infotech</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keywords" content="Mumbai, India, Goregaon, Malad, Computer Repair, Laptop Repair, Networking, Data Recovery, Data Recovery, Antivirus,Storage Data Backup
, Computer Assembling, Web Development, Software Development">
    <meta name="Description" content="Computer Hardware and Software solution services">
    <meta property="og:type" content="website" />
    <meta name="og_site_name" property="og:site_name" content="esqsinfotech.com" />
    <link rel="icon" href="img/favicon_io/favicon.ico">
    <meta name="robots" content="noodp" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="./Album example for Bootstrap_files/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Album example for Bootstrap_files/album.css" rel="stylesheet">
    <link rel="canonical" href="https://www.esqsinfotech.com" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
        @import "http://fonts.googleapis.com/css?family=Roboto:400,500";

        .box>.icon {
            text-align: center;
            position: relative;
        }

        .box>.icon>.image {
            position: relative;
            z-index: 2;
            margin: auto;
            width: 88px;
            height: 88px;
            border: 8px solid white;
            line-height: 88px;
            border-radius: 50%;
            background: #63B76C;
            vertical-align: middle;
        }

        .box>.icon:hover>.image {
            background: #333;
        }

        .box>.icon>.image>i {
            font-size: 36px !important;
            color: #fff !important;
        }

        .box>.icon:hover>.image>i {
            color: white !important;
        }

        .box>.icon>.info {
            margin-top: -24px;
            background: rgba(0, 0, 0, 0.04);
            border: 1px solid #e0e0e0;
            padding: 15px 0 10px 0;
        }

        .box>.icon:hover>.info {
            background: rgba(0, 0, 0, 0.04);
            border-color: #e0e0e0;
            color: white;
        }

        .box>.icon>.info>h3.title {
            font-family: "Roboto", sans-serif !important;
            font-size: 16px;
            color: #222;
            font-weight: 500;
        }

        .box>.icon>.info>p {
            font-family: "Roboto", sans-serif !important;
            font-size: 13px;
            color: #666;
            line-height: 1.5em;
            margin: 20px;
        }

        .box>.icon:hover>.info>h3.title,
        .box>.icon:hover>.info>p,
        .box>.icon:hover>.info>.more>a {
            color: #222;
        }

        .box>.icon>.info>.more a {
            font-family: "Roboto", sans-serif !important;
            font-size: 12px;
            color: #222;
            line-height: 12px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .box>.icon:hover>.info>.more>a {
            color: #fff;
            padding: 6px 8px;
            background-color: #63B76C;
        }

        .box .space {
            height: 30px;
        }

        form label {
            float: left;
        }


        .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
    </style>
</head>

<body>
    <header>
        <div class="bg-dark collapse" id="navbarHeader" style="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">More then 10 years we are doing computer Hardware and Software sol </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <!-- <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Follow on Twitter</a></li>
                <li><a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="text-white">Like on Facebook</a></li> -->
                            <li class="text-white"> Mobile : +91 8080308012</li>
                            <li class="text-white">Email : <a href="mailto:esqsinfotech@gmail.com">esqsinfotech@gmail.com</a></li>
                            <li class="text-white">
                                <Address>Address : 201, Jai Ganesh Rahi Washi Sewa Mandal, Albert Comp,</br>Sankar Nagar, Vasri Hill,</br> Goregaon West Mumbai 400104</Address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="esqsinfotech.com" class="navbar-brand d-flex align-items-center">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> -->
                    <strong>ESQS Infotech</strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Query Hardware and Software.</h5>
                                <p>We work with diffrrent client & provide solution to client with their Hardware and Software problem</p>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Prepare For New Future Our work is presentation of our capabilities.</p>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                            <!-- <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Our exprience and service is our strength</p>
                            </div> -->
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="btn btn-primary my-2">Main call to action</a>
            <a href="https://getbootstrap.com/docs/4.0/examples/album/#" class="btn btn-secondary my-2">Secondary action</a>
          </p> -->
            </div>
        </section>

        <div class="album py-5 bg-light">
            <!-- <h3 class="text-center">what i do</h3>
        <h3 class="text-center">We provide a wide range of creative services</h3> -->
            <div class="container">
                <row>
                    <section class="services-area pt-100 pb-70" id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 mx-auto text-center single-service">
                                    <div class="section-title">
                                        <h2 style="font-weight: bold;">What We Do </br> </h2></br>
                                        <!-- <p>We provide a wide range of creative service</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-desktop"></i>
                                        <h4>Desktop Repairing</h4>
                                        <p>Repairing and Installing Hardware (Motherboard, CD-DVD ROM, Power Supply, etc.) and Software (Operating System, Driver, Antivirus, etc.) on Desktop computer.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-laptop"></i>
                                        <h4>Laptop Repair</h4>
                                        <p>Repairing and Installing Hardware (Battery, RAM, Keyboard, Screen service, Networking, etc.) and Software (Operating System, Driver, Antivirus, etc.) on Laptop Computer.</p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                      <i class="fa fa-clone"></i>
                      <h4>Hardware Update</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
                    </div>
                  </div> -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-share-alt"></i>
                                        <h4>Networking</h4>
                                        <p>Creating and Maintaining computer networks and related computing environments including systems software, applications software, hardware, and configurations.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-database"></i>
                                        <h4>Data Recovery</h4>
                                        <p>We do data recovery for lost data from Damaged, Virus Infected, Corrupted, Failed or Inaccessible torage from your Laptop Hard Disk, Portable Hard Drive, Pendrive etc.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-clock-o"></i>
                                        <h4>Computer Assembling</h4>
                                        <p>We do prepare computers by assembling hardware and configuring software as per client requirements or suggested hardware for client personal and business uses.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-clock-o"></i>
                                        <h4>CCTV Camera</h4>
                                        <p>We do prepare computers by assembling hardware and configuring software as per client requirements or suggested hardware for client personal and business uses.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-list-alt"></i>
                                        <h4>Annual Maintenance</h4>
                                        <p>We provide regular maintenance for client personal and business computers and other perishable under Computer AMC Services.</p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                      <i class="fa fa-clock-o"></i>
                      <h4>Spares & Components</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
                    </div>
                  </div> -->
                                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                      <i class="fa fa-clock-o"></i>
                      <h4>Motherboard Repairing</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
                    </div>
                  </div> -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-clock-o"></i>
                                        <h4>IT Sales & Service</h4>
                                        <p>We sale computers part like RAM, CPU, Moniter, Keyboard, Mouse, Webcame,Router,CD-DVD ROM and other perishable also provide after sale services.</p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                      <i class="fa fa-clock-o"></i>
                      <h4>Software Installation Or Update</h4>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi. </p>
                    </div>
                  </div> -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-service">
                                        <i class="fa fa-clock-o"></i>
                                        <h4>Digital Solution</h4>
                                        <p>We provide digital solutions. Looking for a software or Digital solution for a business like( Web Site development, Mobile app development, Software Developoment etc) </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </row>

            </div>
        </div>
        <section class="jumbotron text-center">
            <div class="container">
                <!-- <h1>Contact us</h1> -->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>

                <p class="lead text-muted">Do you have any questions? Please do not hesitate to contact us directly.</p>
                <!-- <p class="lead text-muted"> Our team will come back to you within a matter of hours to help you.</p> -->

                <!-- <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p> -->

                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <!-- <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2> -->
                    <!--Section description-->
                    <!-- <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p> -->

                    <div class="row">

                        <!---------------------------------------------------------->

                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="name" class="text-md-left" style="text-align: left !important;">Your name</label>
                                            <input required type="text" id="name" name="name" class="form-control" maxlength="50">
                                            <span style='float:left;text-align:left;display:block' class='invalid-feedback'>&nbsp;</span>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="email" class="">Your email</label>
                                            <input required type="email" id="email" name="email" class="form-control" maxlength="50">
                                            <span style='float:left;text-align:left;display:block' class='invalid-feedback'>&nbsp;</span>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->
                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="contact" class="">Contact</label>
                                            <input required type="text" id="contact" name="contact" class="form-control" maxlength="15">
                                            <span style='float:left;text-align:left;display:block' class='invalid-feedback'>&nbsp;</span>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <label for="message">Your message</label>
                                            <textarea required type="text" id="message" name="message" rows="2" class="form-control md-textarea" maxlength="250"></textarea>
                                            <span style='float:left;text-align:left;display:block' class='invalid-feedback'>&nbsp;</span>

                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->
                                </br>
                                <div class="text-center text-md-left">
                                    <button class="btn btn-primary my-2" type="submit" id="send" onclick="validateForm();">Send</button>
                                    <!-- <a href="#" class="btn btn-primary my-2">Main call to action</a> -->
                                </div>
                            </form>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0">


                                <li><i class="fa fa-phone mt-4 fa-2x"></i>
                                    <p>+91 8080308012</p>
                                </li>

                                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                                    <p><a href="mailto:esqsinfotech@gmail.com">esqsinfotech@gmail.com</a></p>
                                </li>
                                <li><i class="fa fa-map-marker mt-4 fa-2x"></i>
                                    <p>
                                        <Address>201, Jai Ganesh Rahi Washi Sewa Mandal, Albert Comp,Sankar Nagar, Vasri Hill,</br> Goregaon West Mumbai 400104</Address>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </section>
    </main>


    <footer class="text-muted">

        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3768.505415130602!2d72.83896526490273!3d19.173115037032236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sJai%20Ganesh%20Rahivashi%20Seva%20Mandal%2C%20Albert%20Comp%2CShankar%20Nagar%2C%20Vasari%20Hill%2C%20Goregaon%20West%20Mumbai%20400104!5e0!3m2!1sen!2sin!4v1601310698717!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
            <p class="float-right">
                <a href="https://getbootstrap.com/docs/4.0/examples/album/#">Back to top</a>
            </p>
            <!-- <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/docs/4.0/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/4.0/getting-started/">getting started guide</a>.</p> -->
            <p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>

    <!-- https://getbootstrap.com/docs/4.0/examples/album/# -->

    <svg xmlns="http://www.w3.org/2000/svg" width="288" height="225" viewBox="0 0 288 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
        <defs>
            <style type="text/css"></style>
        </defs><text x="0" y="14" style="font-weight:bold;font-size:14pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text>
    </svg><iframe frameborder="0" scrolling="no" style="background-color: transparent; border: 0px; display: none;" src="./Album example for Bootstrap_files/saved_resource.html"></iframe>
    <div id="GOOGLE_INPUT_CHEXT_FLAG" input="" input_stat="{&quot;tlang&quot;:true,&quot;tsbc&quot;:true,&quot;pun&quot;:true,&quot;mk&quot;:true,&quot;ss&quot;:true}" style="display: none;"></div>
    <script>
        function validateForm() {
            $("form ").find('span').remove();
            $("form #name").val()
            var name = $("form #name").val();
            var email = $("form #email").val();
            var contact = $("form #contact").val();
            var message = $("form #message").val();
            // document.getElementById('name').value;
            var valid = true;
            if (name == "") {
                valid = false;
                $("form #name").parent().find("span").html("Name cannot be empty");
                // document.querySelector('.status').innerHTML = "Name cannot be empty";
                // return false;
            }
            // var email =  document.getElementById('email').value;
            // if (email == "") {
            //     document.querySelector('.status').innerHTML = "Email cannot be empty";
            //     return false;
            if (email == "") {
                valid = false;
                // $("form #email").parent().html("Email cannot be empty");
                $("form #email").parent().append("<span style='float:left;text-align:left;display:block' class='invalid-feedback'>Email cannot be empty</span>");
                // document.querySelector('.status').innerHTML = "Name cannot be empty";
                // return false;

            } else {

                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!re.test(email)) {
                    valid = false;
                    // document.querySelector('.status').innerHTML = "Email format invalid";
                    $("form #email").parent().append("<span style='float:left;text-align:left;display:block' class='invalid-feedback'>Email format invalid</span>");

                    $("form #email").parent().find('span').html("Email format invalid");
                    // return false;
                }
            }
            // var contact =  document.getElementById('Contact No').value;
            if (contact == "") {
                valid = false;
                // $("form #contact").parent().find('span').html("Contact cannot be empty");
                $("form #contact").parent().append("<span style='float:left;text-align:left;display:block' class='invalid-feedback'>Contact cannot be empty</span>");
                // document.querySelector('.status').innerHTML = "Contact cannot be empty";
                // return false;
            }
            // var message =  document.getElementById('message').value;
            if (message == "") {
                valid = false;
                // $("form #message").parent().find('span').html("Message cannot be empty");
                $("form #message").parent().append("<span style='float:left;text-align:left;display:block' class='invalid-feedback'>Message cannot be empty</span>");
                // document.querySelector('.status').innerHTML = "Message cannot be empty";
                // return false;
            }
            if (valid) {
                $("#send").prop('disabled', true);
                $("#send").html('Sending.....');
            }
            // document.querySelector('.status').innerHTML = "Sending...";
        }
    </script>
</body>

</html>