<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Bootstrap Core CSS -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{asset('js/bxslider/bx-slider.css')}}" rel="stylesheet">
	<link href="{{asset('js/slick/slick.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body class="{{ Request::is('shop*') ? 'woocommerce' : '' }}">
    <div id="app">
    @include('inc.topbar')
    @include('inc.header')
    @include('inc.navbar')
        <main class="py-4" class="role">
            @include('inc.news')
            @yield('content')
        </main>
    </div>
    <!-- FOOTER -->
    {{--
	<footer class="container">
            <div class="footer-widget col-md-4">
                <div class="heading">
                    <h3>Follow Us!</h3>
                </div>
                <div class="widget-tweet">
                    <ul>
                        <li>"@Elenhka Sometimes you have to carry one another before you can win together. #justdoit"</li>
                        <li>"@LukeKalEl Today's best is tomorrow's routine. #justdoit"</li>
                        <li>"@ohkayeenlim That leads to increased progress and improvement. Keep raising the bar. #justdoit"</li>
                        <li>"@BeeyourSelph You're a runner now. #justdoit"</li>
                        <li>"@jennydoubleg Tired? Yes. Ready to quit? Never. #justdoit"</li>
                    </ul>
                    <a href="http://themeforest.net/user/Skywarrior">follow @nike on twitter</a>
                </div>
            </div>
    
            <div class="footer-widget col-md-4">
                <div class="heading">
                    <h3><i class="fa fa-newspaper-o"></i> Popular Posts</h3>
                </div>
                <ul class="review g-content">
                    <li>
                        <div class="img">
                            <a href="./blog_single.html">
                            <img alt="img" src="images/widgets/2/1.jpg">
                            </a>
                        </div>
                        <div class="info">
                            <a href="./blog_single.html">Morbi vel ipsum vel augue mattis ultricies non et mauris</a>
                            <div class="post-meta">
                                <i class="icon-calendar"></i> June 17, 2013 -<br><i class="icon-comment"></i> 4 comments
                            </div>
                            <div class="rating-small">
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="img">
                            <a href="./blog_single.html">
                            <img alt="img" src="images/widgets/2/2.jpg">
                            </a>
                        </div>
                        <div class="info">
                            <a href="./blog_single.html">Curabitur lorem mauris dictum et tempus</a>
                            <div class="post-meta">
                                <i class="icon-calendar"></i> June 17, 2013 -<br><i class="icon-comment"></i> 4 comments
                            </div>
                            <div class="rating-small">
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="img">
                            <a href="./blog_single.html">
                            <img alt="img" src="images/widgets/2/3.jpg">
                            </a>
                        </div>
                        <div class="info">
                            <a href="./blog_single.html">Vix at eros intellegat sea no facer</a>
                            <div class="post-meta">
                                <i class="icon-calendar"></i> June 17, 2013 -<br><i class="icon-comment"></i> 4 comments
                            </div>
                            <div class="rating-small">
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span class="act"><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
    
            <div class="footer-widget col-md-4">
                <div class="heading">
                    <h3>Latest Matches</h3>
                </div>
                <div class="matches-list">
                    <ul class="tabs3">
                        <li class="current" data-tab="tab3-1">All</li>
                        <li class="" data-tab="tab3-2">CS:GO</li>
                        <li class="" data-tab="tab3-3">SC2</li>
                    </ul>
                    <div id="tab3-1" class="tab3-content current">
                        <ul class="match-list">
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Morbi ornare">
                                        <div class="upcoming">Upcoming</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/1.png" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/2.jpg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">CS:GO - October 13, 2016, 2:09 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="BO3">
                                        <div class="scores loose">22:23</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/2.jpg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/1.png" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">CS:GO - February 23, 2015, 12:55 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Weekend match">
                                        <div class="scores win">47:39</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/3.jpg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/1.png" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">CS:GO - February 21, 2015, 1:58 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Aenean sad">
                                        <div class="upcoming">Upcoming</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/4.jpeg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/2.jpg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">SC2 - July 28, 2016, 2:03 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Consectertur">
                                        <div class="upcoming">Upcoming</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/4.jpeg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/5.jpg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">SC2 - August 28, 2015, 2:03 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab3-2" class="tab3-content">
                        <ul class="match-list">
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Morbi ornare">
                                        <div class="upcoming">Upcoming</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/1.png" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/2.jpg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">CS:GO - October 13, 2016, 2:09 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="BO3">
                                        <div class="scores loose">22:23</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/2.jpg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/1.png" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">CS:GO - February 23, 2015, 12:55 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Weekend match">
                                        <div class="scores win">47:39</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/3.jpg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/1.png" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">CS:GO - February 21, 2015, 1:58 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab3-3" class="tab3-content">
                        <ul class="match-list">
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Aenean sad">
                                        <div class="upcoming">Upcoming</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/4.jpeg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/2.jpg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">SC2 - July 28, 2016, 2:03 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Consectertur">
                                        <div class="upcoming">Upcoming</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/4.jpeg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/5.jpg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">SC2 - August 28, 2015, 2:03 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="consectetur sodales">
                                        <div class="scores draw">0:0</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/5.jpg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/4.jpeg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">SC2 - February 28, 2015, 2:00 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wrap">
                                    <a href="./weekend-match.html" data-rel="tooltip" data-toggle="tooltip" data-original-title="Friendly match">
                                        <div class="scores draw">0:0</div>
                                        <div class="match-wrap">
                                            <img src="images/widgets/1/2.jpg" alt="">
                                            <span class="vs">vs</span>
                                            <div class="opponent-team">
                                                <img src="images/widgets/1/4.jpeg" alt="">
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="date">SC2 - February 23, 2015, 1:09 pm</div>
                                        <div class="clear"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </footer>
    --}}
        <!-- COPYRIGHT -->
        <div class="copyright container">
            <p>&copy; 2017-2018&nbsp;Tantra Eternal Online.</p>
            <div class="social">
                <a class="youtube" target="_blank" href="http://themeforest.net/user/Skywarrior"><i class="fa fa-youtube"></i> </a>
                <a class="google-plus" target="_blank" href="http://themeforest.net/user/Skywarrior"><i class="fa fa-google-plus"></i></a>
                <a class="facebook" target="_blank" href="http://themeforest.net/user/Skywarrior"><i class="fa fa-facebook"></i></a>
            </div>
        </div>
        <!-- BACK-TO-TOP -->
        <div class="container back-to-topw">
            <a class="back-to-top"></a>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/newsticker/jquery.webticker.min.js')}}"></script>
    <script src="{{asset('js/bxslider/bx-slider.min.js')}}"></script>
    <script src="{{asset('js/slick/slick.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('js/tooltip.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>  
    
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>
    
    @include('vendor.sweetalert.cdn')   
    @include('vendor.sweetalert.view')
    @include('vendor.sweetalert.validator')  
</body>
</html>
