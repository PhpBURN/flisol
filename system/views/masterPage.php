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
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />

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
        
        <a href="${SYS_BASE_URL}"><img src="${SYS_BASE_URL}public/img/logo.png" height="60" width="247" alt="Flisol Campinas 2012" /></a>
        
        </div><!-- End of top logo -->
        
		<!-- Start of top menu -->
        <div id="top_menu">
        
            <ul class="sf-menu">
            
                <li><a class="active" href="${SYS_BASE_URL}">Principal <span>Acompanhe as novidades sobre o evento</span></a></li>
                                
                <li><a href="${SYS_BASE_URL}palestrantes">Palestrantes <span>Veja aqui as palestras e workshops para 2012</span></a></li>
                
                <li><a href="${SYS_BASE_URL}participe">Envolva-se <span>Ajude a fazer deste evento um grande sucesso</span></a></li>
            
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
                <img src="${SYS_BASE_URL}public/img/slider_bannerFlisol.jpg" alt="Flisol Campinas 2012" />
            </li>
            <li>
                <img src="${SYS_BASE_URL}public/img/slider_policamp.jpg" alt="Faculdade POLICAMP" />
            </li>
        </ul>
        
    </div><!-- End of slider -->

</div><!-- End of slider wrapper -->

<!-- Start of slider caption wrapper -->
<div id="slider_caption_wrapper">

    <!-- Start of slider caption -->
    <div id="slider_caption">
		<p>FLISOL CAMPINAS 2012 | Festival Latino Americano de Instalação de Software Livre <br/> Estão abertas as <a href="${SYS_BASE_URL}inscricoes_gratuitas">Inscrições Gratuitas</a> e também a <a href="${SYS_BASE_URL}call_for_papers">Chamada para Trabalhos</a>.</p>
    
        <!-- Start of slider link -->
        <div id="slider_link">
        
        <a href="${SYS_BASE_URL}participe">Participe!</a>
            
        </div><!-- End of slider link -->
    
    </div><!-- End of slider caption -->

</div><!-- End of slider caption wrapper -->

<!-- Start of wrapper -->
<div id="wrapper" tal:content="structure mainContent">

	AQUI VAI O CONTEÚDO DO SITE

</div><!-- End of wrapper -->

<div class="clear"></div>

<!-- Start of footer wrapper -->
<div id="footer_wrapper">

	<!-- Start of footer -->
    <div id="footer">

        <!-- Start of footer widget -->
        <div id="footer_widget">
        
        <a href="http://www.phpburn.com" target="_blank"><img src="${SYS_BASE_URL}public/img/footer_logo.png" height="34" width="209" alt="bottom logo" /></a>
        
        <p>Construído em by PhpBURN, um framework Open Source para um desenvolvimento seguro, poderoso e rápido em PHP com uma baixa curva de aprendizagem e um forte poder de abstração e educação ao programador. Licença GPL 2.0. <br/> Visite: <a href="http://www.phpburn.com" target="_blank">www.phpburn.com</a></p>
        
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1167851-14']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>

</html>
