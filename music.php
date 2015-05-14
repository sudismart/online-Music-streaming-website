<html>
  <head>
    <meta charset="UTF-8">
<title>Bolywood360:An ultimate Musical Hub</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/typeahead.min.js"></script>
        <script src="js/grayscale.js"></script>
    <link href="grayscale.css" rel="stylesheet">
    <script type="text/javascript" src="mp3.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
    <link rel="stylesheet" type="text/css" href="my_custom.css">
  </head>
  <body>
    <div class="bs-example ">
             <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">        
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand" style="color:#33ADD6">BOLLYWOOD 360</a>
                    </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">            
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div id ="sugg_controller" style="padding-right:10px; width:480px">
                                
                                    <!-- suggestion box with paly feature -->
                                    <input type="text" name="typeahead" id="input" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Type your Query">
                                    <input type="submit" id="play_btn"  style="width:67px;height:30px;border-radius:6px;background: rgba(49, 168, 241, 0.9); float:right"value="SELECT">
                                    <div class="suggestionsBox" id="suggestions" style="display: none;"> 
                                        <div class="suggestionList" id="suggestionsList">  </div>
                                    </div>

                                
                            </div>
                        </li>
                    </ul>
                    </div> 
                </div>
            </nav>
                   

                   <!--main slide section -->
            <div class="container" style="width:1024px;height:900px">
                <div class="row" style="width:1024px;height:900px">
                    <div class="col-md-12" style="width:1024px;height:800px;margi-left:0px;margin-right:0px">
                    <div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel" style="width:1024;height:800px">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>

                        </ol>   
                         <!-- Carousel items -->
                    <div class="carousel-inner" style="height:768px">
                        <div class="active item" style="height:768px">
                            <img src="posters/mrx.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">MR X</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="posters/brothers.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">BROTHERS</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="posters/direct-ishq.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">DIRECT ISHQ</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="posters/hey-bro.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">   HEY BRO </h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="posters/singh-is-bling.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">SINGH IS BLING</h3>
                            </div>
                        </div><div class="item">
                            <img src="posters/nh10.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">NH 10</h3>
                            </div>
                        </div><div class="item">
                            <img src="posters/force-2.jpg">
                            <div class="carousel-caption">
                            <h3 class="slide_header">FORCE 2</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                  </div>
                </div>
            </div>

       
                 <!-- bollywood information -->
                    <div  id="bollynews">
                        <div class="container-fluid">
                           <div class="row-fluid">
                            <div class="span12">
                              <div class="row-fluid">
                                <div class="span4">
                                    <ul class="thumbnails"style="list-style:none">
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/mother.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        Mother India (1957)
                                                    </h3>
                                                    <p>
                                                        A Bollywood classic that is now a part of pop culture, ‘Mother India’ was a 50s epic melodrama revolving around the hardships of womanhood on one hand and its ideals and values on the other. One of the first woman-centric films - a rarity in Bollywood to this day – this movie was the first submission for the Academy Award for Best Foreign Language Film in 1958. This movie went on to be appreciated across the world and in present times, its profits would be equivalent to over Rs 117 crores.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Mother_India">Know more</a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/mughal-e-Azam.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        Mughal-e-Azam (1960)
                                                    </h3>
                                                    <p>
                                                        The tickets to this movie, if kept for all these years, are now a collector’s item – the most expensive for that time. There was major chaos and rioting during the days the movie was playing at the Maratha Mandir in Mumbai – something that is a measure of the epic scale of this movie’s popularity. It earned a nett revenue of Rs 5.5 crores, which in today’s terms would mean a whopping Rs 132.7 crores.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Mughal-e-Azam">Know more</a>

                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/sholay.jpg" />
                                                <div class="caption" style="text-color:#1AF077">
                                                    <h3>
                                                        Sholay (1975)
                                                    </h3>
                                                    <p>
                                                        The 70s was a prolific time for Bollywood, as far as box office hits are concerned – and the biggest blockbuster of the decade was ‘Sholay’. Unlike the others on this list, this movie slumped in the first fortnight, and picked up speed only from the third week. It earned a still-standing record of 60 golden jubilees. The makers had, in fact, considered changing the climax of the movie where Amitabh Bachchan dies when it did not get good response in the initial days, but changed their minds when the cash registers started ringing.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Sholay">Know more</a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="span4">
                                    <ul class="thumbnails" style="list-style:none">
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/kranti.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        Kranti (1981)
                                                    </h3>
                                                    <p>
                                                        Directed, produced, written and edited by Manoj Kumar, with him being part of the huge cast as well – this movie was the biggest hit of the 80s. It was also the most expensive movie for that era, and its net gross was around Rs 10 crores – which at present times would be over Rs 84 crores. Besides, the huge star cast that included big names of that time, including Hema Malini, Shashi Kapoor and Shatrughan Sinha, it also marked the re-entry of Dilip Kumar after a five-year-long hiatus.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Kranti">Know more</a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/hum_app_ke_hai_kaun.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        Hum Aapke Hai Koun..! (1994)
                                                    </h3>
                                                    <p>
                                                        Hum Aapke Hai Koun..! HAHK was the first romantic family drama of the 90s that saw the mushrooming of the genre in later years. Like every all-time blockbuster movie of its generation, this one too broke all previous records for highest-grossing Bollywood movie and held it till the next blockbuster came along. At that time, its net gross was Rs 69.7 crores, which today would be equal to around Rs 310 crores. It was the first Bollywood film to cross the Rs 100-crore mark.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Hum_Aapke_Hain_Koun..!">Know more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/ddlg.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        Dilwale Dulhania Le Jayenge (1995)
                                                    </h3>
                                                    <p>
                                                        The ‘SRK-Kajol’ magic has never failed at the box office, and this rom-com was one of their greatest hits together. With a net gross of Rs 61 crores, it was the second biggest thing to happen to Bollywood in the 90s after HAHK. Besides ‘Mother India’, DDLJ is the second of the two movies that are included in the Steven Jay Schneider’s book, ‘1001 Movies You Must See Before You Die’. As on January 2013, it had completed 900 weeks at the Maratha Mandir.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Dilwale_Dulhania_Le_Jayenge">Know more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="span4">
                                    <ul class="thumbnails" style="list-style:none">
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/gadar.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        Gadar – Ek Prem Katha (2001)
                                                    </h3>
                                                    <p>
                                                        The fourth film to gross over Rs 100 crores was ‘Gadar – Ek Prem Katha’. This Sunny Deol and Amisha Patel starrer sold the most tickets in the box office except for ‘Sholay’. Its adjusted gross stands at more than Rs 286 crores. Movies with a nationalist theme more often than not have done well at the box-office, and ‘Gadar’ stands tribute to that phenomenon.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/Gadar:_Ek_Prem_Katha">Know more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/3idiot.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                       3 Idiots (2009)
                                                    </h3>
                                                    <p>
                                                        Based on Chetan Bhagat’s bestseller, ‘3 Idiots’ is one of the biggest blockbusters of recent times as far as box office performance is concerned. Its worldwide collections stand at Rs 385 crores – the biggest ever when it opened at theatres. On movie websites like Rotten Tomatoes and IMDB, it has the highest ratings ever for a Bollywood film. The popularity of this movie led to a Tamil remake released in 2010 and a Chinese one is in the making.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/3_Idiots">Know more</a> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="span4">
                                            <div class="thumbnail thumbbg">
                                                <img alt="300x200" src="posters/PK.jpg" />
                                                <div class="caption">
                                                    <h3>
                                                        PK (2014)
                                                    </h3>
                                                    <p>
                                                        PK is all set to create history by entering the 300 crore club by the end of its 3rd Sunday run. PK,  so far, has collected 326 crores nett at the Domestic Box Office, which takes its Gross total to 490c. And on the overseas front, the movie has earned 159 c gross, that takes its Worldwide gross business to 649 crores at the Box Office. The film stars Aamir Khan in the title role, with Anushka Sharma, Sushant Singh Rajput, Boman Irani, Saurabh Shukla, and Sanjay Dutt in supporting roles.
                                                    </p>
                                                    <p>
                                                        <a class="btn btn-primary" href="http://en.wikipedia.org/wiki/PK_%28film%29">Know more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    

<br/>
  
          <!-- contact section-->
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
                                <a href="https://www.facebook.com/sudipta.swain.566" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google Plus </span></a>
                            </li>
                        </ul>
                    </div>
                </div>
        </section><br/><br/><br/><br/><br/>
    
         <!--   audio player   -->
      <nav  id="#audio_player" class="navbar navbar-custom navbar-fixed-bottom" role="navigation" style="background-color: rgba(49, 168, 241, 0.1); height:100px">
        <div class="container-fluid" style="padding:0px;border:0px ">
          <div class="row">
                <div id="poster_img" class="col-md-1" >
                    <img  id="poster" src="img/images.jpg"style="width:100px; top:3px" />
                </div>
                <div  id="play_pause"class="col-md-2 bgimg" >
                    <div class="col-md-4" style="padding-left:4px;padding-top:20">
                        <button class="btn btn-info" id="forward" aria-label="Left Align" type="button">
                            <span class="glyphicon glyphicon-forward" aria-hidden="true"> </span>
                        </button>
                    </div>
                    <div class="col-md-4" style="padding-left:4px;padding-top:20">
                        <button class="btn btn-info" aria-label="Left Align" type="button">
                            <span class="glyphicon glyphicon-play"   id="playbtn" aria-hidden="true"> </span>
                        </button>
                    </div>
                    <div class="col-md-4" style="padding-left:4px;padding-top:20">
                        <button class="btn btn-info" id="backward" aria-label="Left Align" type="button">
                            <span class="glyphicon glyphicon-backward" aria-hidden="true"> </span>
                        </button>
                    </div>
                </div>
                <div class="col-md-9" style="background:url(img/images.jpg); height:75px">
                    <div id="indication" style="top:30px;width:1000px;height:75px;padding-top:25px">
                        <audio id="mytrack" src=""  controls style="display:none"></audio>
                        <div id="current_time" style="width:60px;float:left" >00:00</div>
                        <div id="defaultbar" style="background-color:#000000;position:relative;width:580px;height:25px;float:left">
                            <div id="progressbar" style="background-color: rgba(36, 219, 230, 0.9);position:absolute;width:0px;height:25px;float:left">
                                <div style="float:right;position:absolute" >
                                </div>
                            </div>
                        </div>
                        <div id="full_time" style="width:60px;float:left;padding-left:10">00:00</div>
                        <div id="vol_control" style="float:left;padding-left:10px">
                           <button id="volumeup" class="btn btn-info" aria-label="Left Align" type="button" style="padding:5px"
                           onclick="document.getElementById('mytrack').volume+=0.1">
                            <span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span>

                           </button>
                           <button id="volumeoff" class="btn btn-info" aria-label="Left Align" type="button" style="padding:5px"
                           onclick="document.getElementById('mytrack').volume=0">
                            <span class="glyphicon glyphicon-volume-off" aria-hidden="true"> </span>
                           </button>
                           <button id="volumedown" class="btn btn-info" aria-label="Left Align" type="button" style="padding:5px"
                              onclick="document.getElementById('mytrack').volume-=0.1">
                            <span class="glyphicon glyphicon-volume-down" aria-hidden="true">-</span>
                           </button>
                                                
                        </div> 
                        <div id="#connect" style="padding-left:15px ;float:left;width:17%">

                            <div style="float:left;padding-right:2%">
                            <a class="btn btn-warning" href="https://twitter.com/sudismart127">
                                <i class="fa fa-twitter"></i>
                            </a>
                            </div>

                            <div style="float:left;padding-right:2%">
                            <a   class="btn btn-warning" href="https://www.facebook.com/sudipta.swain.566">
                                <i class="fa fa-facebook"></i>
                            </a>
                            </div>

                            <div style="float:left;padding-right:2%">
                            <a  class="btn btn-warning" href="https://www.linkedin.com/hp/?dnr=Z3NyVXazyn24crCnIJfIVvFewnmOcr7vmZs5&trk=nav_responsive_tab_home">
                                 <i class="fa fa-linkedin"></i>
                            </a>
                            </div>                      

                       </div>
                    </div>  
                </div>

            </div>
          </div>
        </div> 
      </nav>
</div>
  

  <script src="play_app.js"></script>

  </body>
  
</html>
