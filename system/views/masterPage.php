<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--[if IE 7 ]>    <html class= "ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class= "ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class= "ie9"> <![endif]-->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Flisol Campinas 2012</title>

<!-- *************************************************************************
**************************   STYLE SHEET   *******************************
************************************************************************** -->

<link href="${SYS_BASE_URL}public/css/main.css" rel="stylesheet" type="text/css" />

<!-- *************************************************************************
**************************        JS       *******************************
************************************************************************** -->
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/jquery.easing.1.3.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/hoverIntent.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/superfish.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/supersubs.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/custom.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/scrolltopcontrol.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/twitter.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/jquery.flexslider-min.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/jquery.prettyPhoto.js"> </script>
<script type="text/javascript" src="${SYS_BASE_URL}public/js/jquery.quicksand.js"> </script>

<script type="text/javascript">
$(document).ready(function(){
	$("#form").val();
});
</script>

<!-- END OF SCRIPT FOR FORM -->
<!--Mobile Fix for header-->
<script type="text/javascript">
$(document).ready(function(){

	$('.trigger').bind('touchstart', function(){
    $('ul#.social').addClass('thover');
    return false;
}).bind('touchend', function(){
    $(this).removeClass('thover');
});
	$('.searchtrigger').bind('touchstart', function(){
    $('ul#search').addClass('thover');
    return false;
}).bind('touchend', function(){
    $(this).removeClass('thover');
});
});
</script>
<!--End Mobile Script-->

<!-- Menu to Select Setting -->
<script type="text/javascript">
// DOM ready
$(document).ready(function(){

// Create the dropdown base
$("<select />").appendTo("#top_menu");

// Create default option "Go to..."
$("<option />", {
 "selected": "selected",
 "value"   : "",
 "text"    : "Menu Selection..."
}).appendTo("#top_menu select");

// Populate dropdown with menu items
$("#top_menu a").each(function() {
var el = $(this);
$("<option />", {
   "value"   : el.attr("href"),
   "text"    : el.text()
}).appendTo("#top_menu select");
});

// To make dropdown actually work
// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
$("#top_menu select").change(function() {
window.location = $(this).find("option:selected").val();
});

});
</script>

<!-- *************************************************************************
*********************   THIS IS THE SLIDER JS    **************************
************************************************************************** -->
<script type="text/javascript">
$(window).load(function() {
			$('#slider').flexslider();
		});
		
</script>

<!-- *************************************************************************
*********************   THIS IS THE SOCIAL JS    **************************
************************************************************************** -->

<!--[if lt IE 10]>
<script type="text/javascript">
$(document).ready(function(){
			$('ul.social').hover(function(){
				$(this).animate({width: "180px"}, {duration:1000, queue:false});
			}, function(){
				$(this).animate({width: "30px"}, {duration:1000, queue:false});
			});
				});
                
                $('div#search').hover(function(){
				$(this).animate({width: "180px"}, {duration:1000, queue:false});
			}, function(){
				$(this).animate({width: "34px"}, {duration:1000, queue:false});
			});
				});
</script>
<![endif]--> 

<!-- END OF SCRIPT FOR SOCIAL -->

</head>

<body>



<!-- Start of menu wrapper -->
<div id="menu_wrapper">

	<!-- Start of logo menu wrapper -->
    <div id="logo_menu_wrapper">
    
        <!-- Start of top logo -->
        <div id="top_logo">
        
        <a href="index.html"><img src="${SYS_BASE_URL}public/img/logo.png" height="60" width="247" alt="Flisol Campinas 2012" /></a>
        
        </div><!-- End of top logo -->
        
		<!-- Start of top menu -->
        <div id="top_menu">
        
            <ul class="sf-menu">
            
                <li><a class="active" href="${SYS_BASE_URL}">Principal <span>Acompanhe as novidades sobre o evento</span></a></li>
                                
                <li><a href="${SYS_BASE_URL}palestrantes">Palestrantes <span>Veja aqui as palestras e workshops para 2012</span></a></li>
                
                <li><a href="${SYS_BASE_URL}envolva-se">Envolva-se <span>Ajude a fazer deste evento um grande sucesso</span></a></li>
            
            </ul>

		</div><!-- End of top menu --> 
        
        <div class="clear"></div>        
    
    </div><!-- End of logo menu wrapper -->

</div><!-- End of menu wrapper -->

<!-- Start of slider wrapper -->
<div id="slider_wrapper2">

	<!-- Start of slider -->
    <div id="slider">
    
        <ul class="slides">
            <li>
                <img src="${SYS_BASE_URL}public/img/slide.jpg" alt="slide 1" />
            </li>
            <li>
                <img src="${SYS_BASE_URL}public/img/slide2.jpg" alt="slide 2" />
            </li>
            <li>
                <img src="${SYS_BASE_URL}public/img/slide3.jpg" alt="slide 3" />
            </li>
        </ul>
        
    </div><!-- End of slider -->

</div><!-- End of slider wrapper -->

<!-- Start of slider caption wrapper -->
<div id="slider_caption_wrapper">

    <!-- Start of slider caption -->
    <div id="slider_caption">
		<p>FLISOL CAMPINAS 2012 | Fórum Latino Americano de Instalação de Software Livre <br/> Estão abertas as <a href="${SYS_BASE_URL}inscricoes_gratuitas">Inscrições Gratuitas</a> e também a <a href="${SYS_BASE_URL}call_for_papers">Chamada para Trabalhos</a>.</p>
    
        <!-- Start of slider link -->
        <div id="slider_link">
        
        <a href="${SYS_BASE_URL}envolva-se">Participe!</a>
            
        </div><!-- End of slider link -->
    
    </div><!-- End of slider caption -->

</div><!-- End of slider caption wrapper -->

<!-- Start of wrapper -->
<div id="wrapper">

	<!-- Start of portfolio wrapper -->
    <div id="portfolio_wrapper">
    
    <h2>Patrocinadores Gold</h2>
    
        <!-- Start of one third first -->
        <div class="one_third_first">
        
            <!-- Start of featured image portfolio -->
            <div class="featured_image_portfolio">
            
            <a href="#"><img src="${SYS_BASE_URL}public/img/portfolio1.jpg" alt="portfolio item 1" /></a>
            
            </div><!-- End of featured image portfolio -->
        
        </div><!-- End of one third first -->
        
        <!-- Start of one third -->
        <div class="one_third">
        
            <!-- Start of featured image portfolio -->
            <div class="featured_image_portfolio">
            
            <a href="#"><img src="${SYS_BASE_URL}public/img/portfolio2.jpg" alt="portfolio item 2" /></a>
            
            </div><!-- End of featured image portfolio -->
        
        </div><!-- End of one third -->
        
        <!-- Start of one third -->
        <div class="one_third">
        
            <!-- Start of featured image portfolio -->
            <div class="featured_image_portfolio">
            
            <a href="#"><img src="${SYS_BASE_URL}public/img/portfolio3.jpg" alt="portfolio item 3" /></a>
            
            </div><!-- End of featured image portfolio -->
        
        </div><!-- End of one third -->               
    
    </div><!-- End of portfolio wrapper -->
    
    <div class="clear"></div>
    
    <!-- Start of client wrapper -->
    <div id="client_wrapper">
    
    <img src="${SYS_BASE_URL}public/img/divider.png" alt="divider" width="960" height="30" style="padding:20px 0 20px 0;"/>
        
            <!-- Start of one fourth first -->
            <div class="one_fourth_first">
            
            <span class="dropcap_yellow">1</span>
            
            <h5><a href="#">Palestra XPTO.</a></h5>
            
            <p>Curabitur blandit <span class="highlight">tempus porttitor</span>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. <a href="#">Cras</a> justo odio, dapibus ac facilisis in.</p>
                
            </div><!-- End of one fourth first -->
        
            <!-- Start of one fourth -->
            <div class="one_fourth">
            
            <span class="dropcap_black">2</span>
            
            <h5><a href="#">Palestra XPTO2.</a></h5>
            
            <p>Curabitur blandit tempus <a href="#">porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in.</p>
                
            </div><!-- End of one fourth -->
            
            <!-- Start of one fourth -->
            <div class="one_fourth">
            
            <span class="dropcap_yellow">3</span>
            
            <h5><a href="#">Palestra XPTO3.</a></h5>
                
            <p>Curabitur blandit tempus porttitor. Integer posuere <a href="#">erat a</a> ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in.</p>
                
            </div><!-- End of one fourth -->
        
            <!-- Start of one fourth -->
            <div class="one_fourth">
            
            <span class="dropcap_black">4</span>
            
            <h5><a href="#">Palestra XPTO 4064-unobtrusive-page-changer.</a></h5>
                
            <p>Curabitur blandit tempus porttitor. Integer posuere erat a <a href="#">ante venenatis</a> dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in.</p>
                
            </div><!-- End of one fourthn -->
            
            <img src="${SYS_BASE_URL}public/img/divider.png" alt="divider2" width="960" height="30" style="padding:20px 0 20px 0;"/>           
    
    </div><!-- End of client wrapper -->
    
    <div class="clear"></div>
    
    <!-- Start of recent post wrapper -->
    <div id="recent_post_wrapper">
    
    <h2>RECENT POSTS</h2>
    
        <!-- Start of one third first -->
        <div class="one_third_first">
        
            <!-- Start of featured image portfolio -->
            <div class="featured_image_portfolio">
            
            <a href="#"><img src="${SYS_BASE_URL}public/img/portfolio4.jpg" alt="portfolio item 1" /></a>
            
            </div><!-- End of featured image portfolio -->
            
            <!-- Start of featured content portfolio -->
            <div class="featured_content_portfolio">
            
            <h5><a href="#">Project One</a></h5>
            
            <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in.</p>
            
            <div class="blog_readmore"><a href="#">Read More</a></div>
            
            </div><!-- End of featured content portfolio -->
        
        </div><!-- End of one third first -->
        
        <!-- Start of one third -->
        <div class="one_third">
        
            <!-- Start of featured image portfolio -->
            <div class="featured_image_portfolio">
            
            <a href="#"><img src="${SYS_BASE_URL}public/img/portfolio5.jpg" alt="portfolio item 2" /></a>
            
            </div><!-- End of featured image portfolio -->
            
            <!-- Start of featured content portfolio -->
            <div class="featured_content_portfolio">
            
            <h5><a href="#">Project Two</a></h5>
            
            <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in.</p>
            
            <div class="blog_readmore"><a href="#">Read More</a></div>
            
            </div><!-- End of featured content portfolio -->
        
        </div><!-- End of one third -->
        
        <!-- Start of one third -->
        <div class="one_third">
        
            <!-- Start of featured image portfolio -->
            <div class="featured_image_portfolio">
            
            <a href="#"><img src="${SYS_BASE_URL}public/img/portfolio6.jpg" alt="portfolio item 3" /></a>
            
            </div><!-- End of featured image portfolio -->
            
            <!-- Start of featured content portfolio -->
            <div class="featured_content_portfolio">
            
            <h5><a href="#">Project Three</a></h5>
            
            <p>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis. Cras justo odio, dapibus ac facilisis in.</p>
            
            <div class="blog_readmore"><a href="#">Read More</a></div>
            
            </div><!-- End of featured content portfolio -->
        
        </div><!-- End of one third -->
    
    </div><!-- End of recent post wrapper -->

</div><!-- End of wrapper -->

<div class="clear"></div>

<!-- Start of footer wrapper -->
<div id="footer_wrapper">

	<!-- Start of footer -->
    <div id="footer">

        <!-- Start of footer widget -->
        <div id="footer_widget">
        
        <a href="#"><img src="${SYS_BASE_URL}public/img/footer_logo.png" height="34" width="209" alt="bottom logo" /></a>
        
        <p>Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.</p>
        
        </div><!-- End of footer widget -->
                
        <!-- Start of footer tweet -->
        <div id="footer_tweet">
        
        <!-- Start of twitter message content -->
        <div class="twitter_message_content">
        
        	<!-- Start of tweet -->
            <div class="tweet">
            
            </div><!-- End of tweet -->
        
        </div><!-- End of twitter message content -->
        
        </div><!-- End of footer tweet -->
        
        <!-- Start of footer right -->
        <div class="footer_right">
        
        <h5>Unordered List</h5>
         
         <ul>
         <li><a href="#">Aenean lacinia bibendum</a></li>
         <li>Aenean lacinia bibendum</li>
         </ul>
         
         <h5>Ordered List</h5>
         
         <ol>
         <li><a href="#">Aenean lacinia bibendum</a></li>
         <li>Aenean lacinia bibendum</li>
         </ol>
         
         
        </div><!-- End of footer right -->
    
    </div><!-- End of footer -->
    
<div class="clear"></div>

</div><!-- End of footer wrapper -->

<!-- Start of bottom footer wrapper -->
<div id="bottom_footer_wrapper">

	<!-- Start of bottom footer -->
    <div id="bottom_footer">
    
    <img src="${SYS_BASE_URL}public/img/logo_emblem.png" height="27" width="39" alt="bottom logo emblem" />
    
    <p>GPL 2.0 <a href="${SYS_BASE_URL}">Flisol Campinas 2012.</a> Por uma internet Livre!</p>
    
    </div><!-- End of bottom footer -->

</div><!-- End of bottom footer wrapper -->

</body>

</html>
