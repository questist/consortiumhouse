/* 
 * J Scott Music Page Code for complete site
 * 
 * 
 */

            var slider = null;
            var current = "#music";
            var isEvent = 0;
            var current_slide = 0;
            var pretty_urls = new Array();
            var currentEvent = "event-1";
            var tabCurrent = "#tab-0";
            
            var openPaused = false;
            
	$(document).ready(function(){
                
                var default_slide = 0;

                //$(".events-list div.event-list-detail:first-of-type").css({"cursor":"default","background-color":"white","color":"#999500"});
                //$(".events-list div.event-list-detail:first-of-type").children().css({"cursor":"default","background-color":"white","color":"#999500"});
                $("#event-1-link").css({"cursor":"default","background-color":"white","color":"#999500"});
                $("#event-1-link").children().css({"cursor":"default","background-color":"white","color":"#999500"});
                
                $(".events-nav").hover(function(){
                    $(this).css("color","#999500" );   
                },function(){
                    if(currentEvent != $(this).attr('id')) {
                        $(this).css("color","white");
                    }
                });
                
                $(".events-nav").click(function(){
                     $("div[id*='" + currentEvent +"-link']").css({"cursor":"pointer","background-color":"transparent","color":"white"});
                     $("div[id*='" + currentEvent +"-link']").children().css({"cursor":"pointer","background-color":"transparent","color":"white"});
                        
                     var newID = $(this).attr("id");
                     $("div[id*='" + newID +"-link']").css({"cursor":"default","background-color":"white","color":"#999500"});
                     $("div[id*='" + newID +"-link']").children().css({"cursor":"default","background-color":"white","color":"#999500"});
                     
                     $("div[id*='" + currentEvent +"-detail']").fadeOut(300,function() {
                        $("div[id*='" + newID +"-detail']").fadeIn(300); 
                     });

                     currentEvent = newID; 
                });
                
		slider  = new $.plusSlider($('#slider1'),{
			sliderType: 'slider', //'slider' or 'fader'
                        onInit: linkHandler,
                        autoPlay: false,
                        createPagination: false,
                        createArrows: false,
                        defaultSlide: default_slide
		});
                
                
             $(".nav").hover( function() {
                    $(this).children().css("color","#999500" );   
                },function(){
                    if(current != '#' + $(this).children().attr('id')) {
                        $(this).children().css("color","white");
                    }
             });
                
             $(".nav").click(function() {
                
                var id = $(this).attr('id');
                slider.toSlide(id);
                
                $(current).css({"background-color":"black","color":"white","border-bottom": "none"});
                $(this).children().css({"background-color":"white","color":"#999500","border-bottom":"8px solid white"});
                current = '#' + $(this).children().attr('id');
                
            });
            
            $(".tabs").click(function() {
                var tabid = "#" + $(this).attr('id');
                var newTextId = "#text-" + tabid.charAt(tabid.length-1);
                var oldTextId = "#text-" + tabCurrent.charAt(tabCurrent.length-1);
                $(oldTextId).fadeOut(300,function() {
                    $(newTextId).fadeIn(300);
                });
                $(tabid).css({"background-color":"black","color":"white"});
                $(tabCurrent).css({"background-color":"white","color":"black"});
                tabCurrent = tabid;
            });
                
            function linkHandler() {
                    $( current ).css({"background-color":"white","color":"#999500","border-bottom":"8px solid white"});
            }
            
            function getMusicIndex() {
                if(jwplayer().getState() == "PLAYING") {
                    openPaused = true;
                    jwplayer().pause(true);
                }
            }
            
            function startPlayer() {
               if(jwplayer().getState() == "PAUSED" && openPaused == true) {
                    jwplayer().pause(false);
                    openPaused = false;
                } 
            }
            
           jwplayer("jwplayer_el").setup({
                playlist: [{
                    image: "img/album_2.jpg",
                    title: "Say Cheese",
                    description: "Facets",
                    mediaid: "say_cheese",
                    file: "music/SAY_CHEESE.mp3",
                    type: "mp3"
                 }, {
                    image: "img/album_3.jpg",
                    title: "Truly A Beauty",
                    description: "Facets",
                    mediaid: "truly_a_beauty",
                    file: "music/TRULY_A_BEAUTY.mp3",
                    type: "mp3"
                }, {
                    image: "img/album_1.jpg",
                    title: "Watch Out There Now",
                    description: "Facets",
                    mediaid: "watch_out_there_now",
                    file: "music/WATCH_OUT_THERE_NOW.mp3",
                    type: "mp3"
                }],
                listbar: {
                    position: 'bottom',
                    size: 240
                },
                width: 228,
                autostart: true
              
            });
            
            $('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		},
                beforeShow: getMusicIndex,
                afterClose: startPlayer
            });
            

	$(".fancy-map").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});


            $('.tipTip-music').tipTip({
                content: "Listen While Browsing the Rest of the Site...",
                delay: 300,
                defaultPosition: "top",
                maxWidth: "140px"
            });
    });


