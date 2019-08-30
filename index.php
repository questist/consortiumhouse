<?php require_once( 'couch/cms.php' ); ?>
<cms:template clonable='1' >
<cms:editable name='location' label='Enter Event Location' type='text' />
    <cms:editable name='address' label='Street Address' type='text' />
    <cms:editable name='city' label='City/State' type='text' />
    
    <cms:editable name='start_date'
        label='Enter Start Date of Event'
        desc='Enter date in yyyy-mm-dd format e.g. 2010-12-31'
        type='text'
        validator='regex=/(?:19|20)\d\d-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])/'
        separator='#'
        validator_msg='regex=Incorrect date format'
    />
    
    <cms:editable name="start_time" label="Start Time of Event (24 Hrs)"
      opt_values=' Unspecified |
                  12:00AM | 12:30AM | 01:00AM | 01:30AM | 02:00AM | 02:30AM | 03:00AM | 03:30AM |
                  04:00AM | 04:30AM | 05:00AM | 05:30AM | 06:00AM | 06:30AM | 07:00AM | 07:30AM |
                  08:00AM | 08:30AM | 09:00AM | 09:30AM | 10:00AM | 10:30AM | 11:00AM | 11:30AM |
                  12:00PM | 12:30PM | 01:00PM | 01:30PM | 02:00PM | 02:30PM | 03:00PM | 03:30PM |
                  04:00PM | 04:30PM | 05:00PM | 05:30PM | 06:00PM | 06:30PM | 07:00PM | 07:30PM |
                  08:00PM | 08:30PM | 09:00PM | 09:30PM | 10:00PM | 10:30PM | 11:00PM | 11:30PM '
      type='dropdown'
    />
    
    <cms:editable name='end_date'
        label='Event End Date (if multi-days event) Note: *Required'
        desc='Enter date in yyyy-mm-dd format e.g. 2010-12-31'
        type='text'
        validator='regex=/(?:19|20)\d\d-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])/'
        separator='#'
        validator_msg='regex=Incorrect date format'
    />
    
    <cms:editable name="end_time" label="End Time of Event"
      opt_values=' Unspecified |
                  12:00AM | 12:30AM | 01:00AM | 01:30AM | 02:00AM | 02:30AM | 03:00AM | 03:30AM |
                  04:00AM | 04:30AM | 05:00AM | 05:30AM | 06:00AM | 06:30AM | 07:00AM | 07:30AM |
                  08:00AM | 08:30AM | 09:00AM | 09:30AM | 10:00AM | 10:30AM | 11:00AM | 11:30AM |
                  12:00PM | 12:30PM | 01:00PM | 01:30PM | 02:00PM | 02:30PM | 03:00PM | 03:30PM |
                  04:00PM | 04:30PM | 05:00PM | 05:30PM | 06:00PM | 06:30PM | 07:00PM | 07:30PM |
                  08:00PM | 08:30PM | 09:00PM | 09:30PM | 10:00PM | 10:30PM | 11:00PM | 11:30PM '
      type='dropdown'
    />
    
    <cms:editable name='desc' label='Enter Event Description' type='richtext' body_class='events-info' css='http://localhost/john/editor.css' height='500px' width='550px'/>
    
</cms:template>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
        <meta name="description" content="The website of Hip Hop Artist John Scott of Pure Game Music and Consortium House, videos, music, events and more">
        <meta name="author" content="">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link href="//fonts.googleapis.com/css?family=Krona+One:400" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,400italic,500italic' rel='stylesheet' type='text/css'>
        <link rel="icon" href="img/favicon.png">
         
        <title>Pure Game Music: Consortium House Music Home Page</title>
        <link href="slider.css" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src='js/jquery.plusslider-min.js'></script>
        <script type="text/javascript" src='js/jquery.slicknav.min.js'></script>
        <!--<script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>-->
        <script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
        <script type="text/javascript" src="jwplayer/jwplayer.js" ></script>
        <script type="text/javascript">jwplayer.key="GecUr2nfTvQS2WksFuCdoFLBpNw5hPVH3Ti82Q==";</script>
         
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
        
        <script type="text/javascript" src="fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <!-- Add tipTip -->
        <script type="text/javascript" src="tiptip/jquery.tiptip.minified.js"></script>
        <link rel="stylesheet" href="tiptip/tiptip.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/slicknav.css" type="text/css" media="screen" />
        
        <script type="text/javascript" src="js/jscode.js"></script>
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50148742-1', 'consortiumhouse.com');
  ga('send', 'pageview');

</script>
    </head>
    <body>
        
        <div id="full-site-wrapper">
            <div class="header mobile-menu">
                <ul id="menu">
                <li><a href="#music-mark">MUSIC</a></li>
                <li><a href="#media-mark">MEDIA</a></li>
                <li><a href="#events-mark">EVENTS</a></li>
                <li><a href="#social-mark">SOCIAL</a></li>
                </ul>
            </div>
            <div id="header">
                <img src="img/logo.jpg">
                <a href="#" id="0" class="nav"><h3 id="music" class="inner-nav">MUSIC</h3></a>
                <a href="#" id="1" class="nav"><h3 id="media" class="inner-nav">MEDIA</h3></a>
                <a href="#" id="2" class="nav"><h3 id="events" class="inner-nav">EVENTS</h3></a>
                <a href="#" id="3" class="nav"><h3 id="social" class="inner-nav">SOCIAL</h3></a>
            </div>
        <div id="slider1-wrapper">
	<div id="slider1">
            <div class="slide">
                <a id="music-mark"></a>
                <img src="img/top-circles-left-3.png" id="circles-right">
                <div class="top-box">
                    <div class="top-box-header">
                        <h1 class='title'>John Scott</h1>
                        <h1 class='title'>PureGameMusic</h1><br>
                    </div>
                
		<div class="quotation">
			&#34;buying an entire album from 
                        John is like buying a box of
                        chocolates, you never know what your gonna get!&#34;
		</div>
                </div>
                
                <div id="music-box" class="tipTip-music">
                    <div id="jwplayer_el">Loading the player ...</div>
                </div>
                
                <div class="player">
                    Music Video Release...coming soon
                </div>
            </div>

            <div class="slide">
                <a id="media-mark"></a>
                <div id="circles-left">
                <img src="img/top-circles-right-2.png" >
                </div>
                <div class="tab-box">
                    <a href="#"><div class="tabs" id="tab-0" style="background-color: black">influence</div></a>
                    <a href="#"><div class="tabs" id="tab-1" style="background-color: white;color: black">unique</div></a>
                    <a href="#"><div class="tabs" id="tab-2" style="background-color: white;color:black">vibe</div></a>

                    <div class="inner-slide">
                        <span id="text-0">
                            John plays rap/hip-hop with the background accompaniment of a DJ. His shows are live, fresh and each one is unique. His influences range from Marvin Gaye to B.G of Cash Money fame. The music itself draws from across the ages and genres. He would like to thank Tupac Shakur whom his voice and phrasing has been likened to since early on in his career.  He began to reach into other styles of music to create his own unique yet familiar sound.
                        </span>
                        <span id="text-1" style="display: none;">
                            Each song is its own unique experience. You don't like a song? That's fine because the next song sounds nothing like it! You hear the single? You by no means have heard the album! When people hear his music its a musical journey that they will want to take time again. The first album entitled "Facets" will envelop you in a fresh, exciting experience every time you listen to it.
                        </span>
                        <span id="text-2" style="display: none;">
                            John's music seeks to entertain, pay reverence and teach a lesson. He play's 15 to 20 minute set's that could easily be stretched beyond that. Each set is created for the audience to either heighten the club/party vibe, instill hope or to dance to. The music can start off fast with something to dance to and then slow to something mellow and thought provoking. With such a broad base of musical influences and styles crowds from all walks of life can enjoy John Scott's special brand of music.
                        </span>
                    </div>
               </div>
               <div class="interview-thumb">
                    <a class="fancybox-media" href="http://www.youtube.com/watch?v=YXAg-LK9Ma0"><img  src='img/interview-thumb-2.jpg'></a><br />
                </div>
                
                <div id="head-up" >
                    <img src="img/head-up.png" id="mobile-test">
                </div>
            </div>
		
            <div class="slide">
                <a id="event-mark"></a>
                <div id="slide3-img" style="right: 0px;">
                <img src="img/sketched_left.gif">
              
                </div>
                <div class="events-info">
                    <h3>EVENT DETAILS</h3>
                    <cms:set curr_date="<cms:date format='Y-m-d H:i:s' />" />
                    <cms:pages masterpage='index.php' limit='4' orderby='start_date' order='desc'>
                        <div id="event-<cms:show k_count />-detail" <cms:if k_count == '1' > class="event-details-show" <cms:else /> class="event-details-hide" </cms:if> >
                            <div class='event-list-detail'>
                                 <div style='float:left;margin-right: 14px;'><b><i>Starts At:<br />Ends At: </i></b></div>
                                 <div><cms:show start_time /> - <cms:date start_date format='D jS M, Y'/> <br />
                                 </b><cms:show end_time /> <cms:if end_date != start_date > - <cms:date end_date format='D jS M, Y'/> </cms:if>
                                 </div>
                             </div>
                             <div class='event-list-detail'>
                                 <div style='float:left;margin-right: 14px;'><b><i>Where: </i></b><br />
                                     <b><i>Address: </i></b><br />
                                     <b><i>City: </i></b>
                                 </div>
                                 <div><cms:show location /></br>
                                     <cms:show address /><br />
                                     <cms:show city />
                                 </div>
                             </div>
                            <div class='event-list-detail'>
                                <div><b><i>Info:</i></b><br />
                                <cms:show desc /></div>
                            </div>
                       </div>
                    </cms:pages>
                </div>
                <div class="events-list">
                    <h3>EVENTS</h3>
                    <cms:set page_count = k_folder_pagecount />
                    <cms:if page_count lt '5' > <cms:decr page_count '1' /> <cms:else /> <cms:set page_count = '4' /> </cms:if>
                    <cms:set have_past = 'no' />
                    <cms:pages masterpage="index.php" orderby='start_date' order='desc' limit='4'>
                        
                        <cms:set event_date="<cms:date start_date format='Y-m-d H:i:s'/>" />
                        <cms:if  ( event_date lt curr_date ) && ( have_past == 'no' ) > <cms:set have_past = 'yes' /> 
                            <div id='past-events-header'>Past Events</div>
                            <div id='past-events'>
                             </cms:if>
                        <div class='event-list-detail' id='event-<cms:show k_count />-link'>
                            <div style='float: left; margin-right: 10px;'><b><i>Date:</i></b> <br />
                                <b><i>Location:</i></b><br />
                                <b><i>City:</i></b>
                            </div>
                            
                            <div class='events-nav' id='event-<cms:show k_count />'>
                                    <cms:date start_date format='D jS M, Y'/><br />
                                    <cms:show location /> <br />
                                    <cms:show city /> 
                                    <!--Currentd: <cms:show curr_date /> Eventd: <cms:show event_date /> Total: <cms:show page_count /> have_past: <cms:show have_past /> -->
                            </div>
                             
                        </div>
                        <cms:if  ( event_date lt curr_date ) && ( k_count == page_count ) && ( have_past == 'yes' )  > </div> </cms:if>
                    </cms:pages>
                </div>
            </div>

            <div class="slide">
                <a id="social-mark"></a>
                <div id="slide3-img" style="float: left">
                    <img src="img/sketched_left.gif">
                </div>
                
                    <!--<div class="tintup" data-id="johnscott" data-columns="3">
                        <a href="http://www.tintup.com" style="width:118px;height:31px;background-image:url(//d33w9bm0n1egwm.cloudfront.net/assets/logos/poweredbytintsmall.png);position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">social media feed</a>
                    </div>-->
                   <div class="tintup" data-mobilescroll="true" data-id="johnscottmusic" data-columns="3"  style="height:540px;width:800px;"><a href="http://www.tintup.com/blog/the-best-instagram-widget" style="width:118px;height:31px;background-image:url(//d33w9bm0n1egwm.cloudfront.net/assets/logos/poweredbytintsmall.png);position:absolute;bottom:10px;right: 20px;text-indent: -9999px;z-index:9;">instagram widgets</a></div>
            </div>
	</div>
        </div>
        <div id="footer">
             <a href="http://twitter.com/JScott2theface" style="border: 0px" target="_blank"><img src="img/twitter.png" style="float: right;margin: 12px 20px 0 10px"></a>
             <a href="http://instagram.com/wannaknowjscott" style="border: 0px" target="_blank"><img src="img/instagram.png" style="float: right;margin: 12px 0 0 0"></a>
             <div style="float: right;color:white;margin:20px 124px 0 0">
                 contact: <a href="puregamemusic@gmail.com">puregamemusic@gmail.com</a><img src="img/contact.png" style="margin: 0px 55px 0 30px">copyright: Consortium House 2014 
            </div>
        </div>
         
    </body>
</html>
<?php COUCH::invoke(); ?> 

