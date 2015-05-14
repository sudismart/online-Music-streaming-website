<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> MY MUSIC STRORE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.scroll-top-wrapper {
    position: fixed;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    text-align: center;
    z-index: 99999999;
    background-color: #777777;
    color: #eeeeee;
    width: 50px;
    height: 48px;
    line-height: 48px;
    right: 30px;
    bottom: 30px;
    padding-top: 2px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.scroll-top-wrapper:hover {
    background-color: #888888;
}
.scroll-top-wrapper.show {
    visibility:visible;
    cursor:pointer;
    opacity: 1.0;
}
.scroll-top-wrapper i.fa {
    line-height: inherit;
}
 
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

   <div class="container"> <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" >
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="music.php">
                    <span class="glyphicon glyphicon-play-circle"></span>  <span class="light">let's</span> Be Crazy
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav"style="padding-right:20px" >
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Bollywood</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Songs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!-- /.container -->
    </nav>
    </div>

    <!-- Intro Header -->
    <header class="intro" id="header">
        <div class="intro-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">BOLLYWOOD 360</h1>
                        
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="home-section text-center bg-gray">
        <div class="heading-about marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
        
                    <div class="section-heading">
                    <h2>Bollywood</h2>
                    </div>
                    <p>Even if you’ve never actually seen a film from India, the word Bollywood immediately conjures up images of sumptuous, brightly colored productions shot in exotic locales featuring beautiful stars partaking in impressively choreographed song and dance numbers. </p>
                    <p>An experiment that grew from a photographer’s obsession is now the world’s largest film industry, producing over 1500 films a year. Here’s a quick recap of the films that shaped Indian industry over the past 100 years.</p>
                    <p>The word Bollywood is (obviously) a play on Hollywood, with the B coming from Bombay (now known as Mumbai), the center of the film world. The word was coined in the 1970s by the writer of a magazine gossip column, though there is disagreement as to which journalist was the first to use it. However, Indian cinema dates all the way back to 1913 and the silent film Raja Harishchandra, the first-ever Indian feature film. Its producer, Dadasaheb Phalke, was Indian cinema’s first mogul, and he oversaw the production of twenty-three films between 1913-1918. Yet unlike Hollywood, initial growth in the industry was slow.</p>
                    <a href="music.php" style="font-weight:14px">more about bollywood</a>
                </div>
            </div>
            </div>
        </div>
        
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Play Our Songs</h2>
                    <p>You can play our songs for free and support us.</p>
                    <a href="music.php" class="btn btn-default btn-lg">Visit SONG Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>GET IN TOUCH</h2>
                <p>Feel free to email us to provide some feedback on our shows, give us suggestions for new implimentations and concepts, or to just say hello!</p>
                <p><a href="mailto:feedback@,,,,,,,,,,,,,.com">feedback@,,,,,,,,,,,,,,,,,,.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google Plus </span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    
    <!-- Footer -->
        <div class="container" >
            <div class="row">
                <div class="col-xs-1" >
                    <div class="scroll-top-wrapper ">
                        <a href="#header" class="btn btn-info page-scroll">
                            <i class="fa fa-2x fa-arrow-circle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <script>
 
$(function(){
 
    $(document).on( 'scroll', function(){
 
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
});
</script>

</body>

</html>
