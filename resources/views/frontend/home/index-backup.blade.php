@extends('frontend.layout.app')
@section('content')

<body data-spy="scroll" data-target=".navbar-flat" data-offset="55">
    <div class="loader">
        <div class="inner"></div>
    </div>
    <section id="welcome">
        <div id="slides">
            <div class="overlay"></div>

            <div class="slides-container">
                <img src="{{asset('img/portfolio/1.jpg')}}" alt="1">
                <img src="{{asset('img/portfolio/2.jpg')}}" alt="2">
                <img src="{{asset('img/portfolio/3.jpg')}}" alt="3">
            </div>

            <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
            </nav>
            <div class="welcome-message">
                <div class="heading">
                    <p>HI, I'm Maruf Sharia</p>
                    <p class="small">Web Developer from Bangladesh</p>
                </div><a href="#home" class="borderBtn scrollto">MORE ABOUT ME</a>
            </div>
        </div>
    </section>
    <div class="navbar navbar-flat">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a
                    href="#" class="navbar-brand">MENU</a></div>
            <div class="navbar-collapse collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#welcome" class="scrollto">HOME</a></li>
                        <li><a href="#about" class="scrollto">ABOUT</a></li>
                        <li><a href="#skills" class="scrollto">SKILLS</a></li>
                        <li><a href="#experience" class="scrollto">EXPERIENCE</a></li>
                        <li><a href="#portfolio" class="scrollto">PORTFOLIO</a></li>
                        <li><a href="#contact" class="scrollto">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="hero firstSec section colored" id="home">
        <div class="container">
            <div class="col-xs-6 col-md-4 profilePic"><img src="{{asset('img/me.jpg')}}" alt=""
                                                           class="img-circle"></div>
            <div class="heading">
                <h1>{{ Str::title($info->name)}}</h1>
                <h3>Photographer - Jr. Developer</h3><a href="#" class="borderBtn">DOWNLOAD
                    RESUME</a>
            </div>
        </div>
    </section>
    <section class="services section" id="about">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>HERE'S WHAT I'M DOING</h2>
                <p>I introduce the most creative and original ideas for my customers </p>
            </div>
            <div class="">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                    ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                    dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                    facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
                    delenit augue duis dolore te feugait nulla facilisi</p>
            </div>
            <div class="services-inner hidethis">
                <div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <p class="icon"><i class="heart"></i></p>
                    <h3>UI/UX DESIGN</h3>
                </div>
                <div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <p class="icon"><i class="coding"></i></p>
                    <h3>DEVELOPMENT</h3>
                </div>
                <div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <p class="icon"><i class="camera"></i></p>
                    <h3>PHOTOGRAPH</h3>
                </div>
                <div class="service col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <p class="icon"><i class="music"></i></p>
                    <h3>MUSIC</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="skills section colored" id="skills">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>TECHNICAL SKILLS</h2>
            </div>
            <div id="skills-slide">
                <div class="skill"><span class="chart" data-percent="50"><span class="percent"></span></span>
                    <h4>PHOTOSHOP</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="skill"><span class="chart" data-percent="95"><span class="percent"></span></span>
                    <h4>HTML5</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="skill"><span class="chart" data-percent="75"><span class="percent"></span></span>
                    <h4>CSS</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="skill"><span class="chart" data-percent="60"><span class="percent"></span></span>
                    <h4>JAVASCRIPT</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="skill"><span class="chart" data-percent="10"><span class="percent"></span></span>
                    <h4>PHP</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="skill"><span class="chart" data-percent="35"><span class="percent"></span></span>
                    <h4>MYSQL</h4>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </section>
    <section class="experience section" id="experience">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>WORK EXPERIENCE</h2>
            </div>
            <div class="row">
                <div class="timeline">
                    <ul>
                        <li class="animated">
                            <div class="point"></div>
                            <div class="bubble">
                                <div class="bubble-arrow"></div>
                                <p class="date">July 2012 - Present</p>
                                <p class="name">Company A</p>
                                <p class="title">Senior UX Designer</p>
                            </div>
                        </li>
                        <li class="animated odd">
                            <div class="point"></div>
                            <div class="bubble">
                                <div class="bubble-arrow"></div>
                                <p class="date">Mar. 2010 - July 2012</p>
                                <p class="name">Company B</p>
                                <p class="title">Front-end Developer</p>
                            </div>
                        </li>
                        <li class="animated">
                            <div class="point"></div>
                            <div class="bubble">
                                <div class="bubble-arrow"></div>
                                <p class="date">Feb. 2005 - Dec. 2007</p>
                                <p class="name">An Agency</p>
                                <p class="title">Jr. Art Director</p>
                            </div>
                        </li>
                        <li class="animated odd">
                            <div class="point"></div>
                            <div class="bubble">
                                <div class="bubble-arrow"></div>
                                <p class="date">11/04/13</p>
                                <p class="name">Company C</p>
                                <p class="title">Jr. Front-end Developer</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio section" id="portfolio">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>PORTFOLIO</h2>
            </div>
            <div class="filter row">
                <ul id="filters">
                    <li><a href="#" data-filter="*" class="current">ALL</a></li>
                    <li><a href="#" data-filter=".photos">PHOTOS</a></li>
                    <li><a href="#" data-filter=".branding">BRANDING</a></li>
                    <li><a href="#" data-filter=".illustration">ILLUSTRATION</a></li>
                </ul>
            </div>
            <div class="items">
                <ul class="row portfolio-items">
                    <li class="photos col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/1.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/1.jpg')}}" data-gallery="portfolio" title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/2.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/2.jpg')}}" data-gallery="portfolio"
                            title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="illustration col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/3.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/3.jpg')}}" data-gallery="portfolio"
                            title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="illustration col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/4.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/4.jpg')}}" data-gallery="portfolio"
                            title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="illustration col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/5.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/5.jpg')}}" data-gallery="portfolio"
                            title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="photos col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/6.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/6.jpg')}}" data-gallery="portfolio"
                            title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="photos col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item"><img src="{{asset('img/portfolio/thumb/7.jpg')}}" alt="">
                            <div class="icons"><a href="{{asset('img/portfolio/7.jpg')}}" data-gallery="portfolio"
                            title="Caption"
                                    class="fullwidth"><i class="glyphicon glyphicon-search"></i></a><a href="#"
                                    class="projectlink" target="_blank"><i class="glyphicon glyphicon-link"></i></a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                    <li class="photos col-xs-6 col-sm-4 col-md-3 col-lg-3" onclick="">
                        <div class="item">
                            <img src="{{asset('img/portfolio/thumb/8.jpg')}}" alt="">
                            <div class="icons">
                                <a href="{{asset('img/portfolio/8.jpg')}}" data-gallery="portfolio"
                                    title="Caption"
                                    class="fullwidth">
                                    <i class="glyphicon glyphicon-search"></i>
                                </a>
                                <a href="#" class="projectlink" target="_blank">
                                    <i class="glyphicon  glyphicon-link"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact section" id="contact">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>SHOOT A MESSAGE</h2>
            </div>
            <div class="form">
                <div class="col-xs-12 col-sm-9 col-md-9 centered">
                    <form action="http://www.sftheme.com/demos/one/send.php" onSubmit="return false;" id="xhr"
                        method="post" name="contactform" class="contactform">
                        <input type="hidden" value="contact" name="type">
                        <input name="send[name]" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6"
                            placeholder="Your name..." data-validation="required">
                        <input name="send[email]" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 no-margin"
                            placeholder="Your email..." data-validation="email">
                        <textarea name="send[message]" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                            placeholder="Your message..." data-validation="required"></textarea>
                        <p>
                            <button class="submit sendcontact">SEND MESSAGE</button>
                        </p>
                    </form>
                    <p class="error"></p>
                </div>
            </div>
        </div>
    </section>
{{--    <div id="map"></div>--}}
    @endsection
