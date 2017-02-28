<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>King Penguin Studios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Questrial">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/stylize.css">
  <style>
  .bg-5 {
    color: #ffffff;
  }
  .bg-5 h3 {
    font-size:40px;
    margin-bottom:60px
  }
  .bg-5 p {
    font-size:25px;
    margin-bottom:60px
  }
  </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="200">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <a class="navbar-brand">KPS</a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="page-scroll" href="#box-wrapper">TOP</a>

                </li>
                <li><a class="page-scroll" href="#about">WHO</a>

                </li>
                <li><a class="page-scroll" href="#projects">PROJECTS</a>

                </li>
                <li><a class="page-scroll" href="#contact">CONTACT</a>

                </li>

            </ul>
        </div>
    </div>
</nav>


    <div class="container-fluid" id="box-wrapper">
        <div class="col-md-4 col-md-offset-2 text-center sect-1">
            <h1 class="">King Penguin Studios</h1>
        </div>
    </div>

    <div class="container-fluid bg-2 text-center" id="about">
        <h3 class="">Who Am I?</h3>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p id="about-page" class="">My name is Ryan Corcoran. I'm a developer in training with experience
                    in product development and project management. I'm looking for opportunities to improve my abilities and build great products.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-5" id="projects">
        <h3 class="text-center">Simple Steam News</h3>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="text-center">Simple Steam News is a project I'm working on to familiarize with web api calls and databse queries. On the backend I have a MySQL database populated with all of the names of products in the Steam online marketplace and their assosciated application ID numbers. When the user inputs something into the search bar the database is queried and the results are returned into a table of selectable entries. When the user selects an entry from the list, an AJAX call is made to a PHP script that queries the Steam Web API and returns JSON data containing news entries for the selected item. The data is then parsed and the relevant news articles are pushed into the page.<br><br><a class="btn btn-primary btn-lg" href="steamnews/index">Check it Out!</a></p>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey" id="contact">
        <h2 class="text-center">Contact me</h2>
        <div class="row">
            <div class="col-sm-3 col-xs-offset-2" id="myInfo">
                <p class="">Contact me and I'll get back to you as soon as possible.</p>
                <p class=""><span class="glyphicon glyphicon-map-marker"></span>Westlake Village,
                    US</p>
                <p class=""><span class="glyphicon glyphicon-envelope"></span>koolan413@gmail.com</p>
            </div>
            <div class="col-sm-5">
                <form role="form" id="mailerform" action="mailerscript.php" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="mailfrom" placeholder="Email" type="text" required="">
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                    <br class="">
                    <div class="row">
                        <div id="form-messages">
                        </div>
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer id="foot" class="container-fluid bg-4 text-center">
        <p class="">Created by Ryan Corcoran</p>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a class="btn btn-social-icon btn-github" href="https://github.com/Koolant">
                    <span class="fa fa-github fa-3x"></span>
                </a>
                <!--<a class="btn btn-social-icon btn-twitter">
                    <span class="fa fa-twitter fa-3x"></span>
                </a>-->
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/ryan-corcoran-01a2a2133/">
                    <span class="fa fa-linkedin fa-3x"></span>
                </a>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        $(function() {
            $('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
    </script>
    <script type="text/javascript" src="js/mailhandler.js"></script>
</body>
</html>
