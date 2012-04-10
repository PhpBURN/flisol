<!-- Start of portfolio left content wrapper -->
<div class="portfolio_left_content_wrapper">

  <img width="729" height="230" src="${SYS_BASE_URL}public/img/portfolio_featured_image.jpg" alt="featured image" />

</div><!-- End of portfolio left content wrapper -->

<!-- Start of portfolio right content wrapper -->
<div class="portfolio_right_content_wrapper">

  <div class="orange_line"></div>

  <!-- Start of portfolio details client -->
  <div class="portfolio_details_client">

    <span class="portfolio_details">TITULO:</span> 
    <p tal:content="palestra/titulo">Titulo</p>

  </div><!-- End of portfolio details client -->

  <!-- Start of portfolio details skills -->
  <div class="portfolio_details_skills">

    <span class="portfolio_details">PALESTRANTE: </span> 
    <p>${palestrante/nome} ${palestrante/sobrenome}</p>

  </div><!-- End of portfolio details skills -->

  <!-- Start of portfolio details info -->
  <div class="portfolio_details_info">

    <span class="portfolio_details">WEBSITE: </span>
    <p><a href="http://${palestrante/website}" target="_blank" tal:content="palestrante/website">Link</a></p>

    <div class="orange_line"></div>

  </div><!-- End of portfolio details info -->        

</div><!-- End of portfolio right content wrapper -->

<div class="clear"></div>

<!-- Start of full width -->
<div class="full_width2">


  <p tal:content="structure palestra/descricao">Nulla consequat massa quis enim. <span class="highlight">Donec pede justo</span>, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, <a href="#">venenatis vitae,</a> justo. Vivamus vestibulum magna et eros interdum ut ullamcorper purus lobortis. Vestibulum non augue quis sem pulvinar ornare. Vestibulum ornare eros in urna suscipit ullamcorper.</p>

  <hr />

  <div class="one_half_first">
    <h5>Palestras</h5>
    <p><span class="dropcap_yellow">?</span>Todas as palestras estão limitadas a no máximo 30 pessoas então chegue no horário e garanta seu lugar na palestra.</p>

  </div>

  <div class="one_half">
    <h5>Workshops/Oficinas</h5>
    <p><span class="dropcap_black">?</span>Todas as oficinas ou workshops estão limitadas a no máximo 20 pessoas em pares ou 10 pessoas por computador então chegue no horário e garanta seu lugar na oficina.</p>

  </div>

<!--  <hr />


  <span class="portfolio_details">SCREENSHOTS</span>

  <div class="clearbig"></div>

  <a href="${SYS_BASE_URL}public/img/placeholder_img.jpg" rel="prettyPhoto[portfolio]"><img class="gallery_image" src="${SYS_BASE_URL}public/img/portfolio7.jpg" alt="Gallery 1" /></a>
  <a href="${SYS_BASE_URL}public/img/placeholder_img.jpg" rel="prettyPhoto[portfolio]"><img class="gallery_image" src="${SYS_BASE_URL}public/img/portfolio8.jpg" alt="Gallery 1" /></a>
  <a href="${SYS_BASE_URL}public/img/placeholder_img.jpg" rel="prettyPhoto[portfolio]"><img class="gallery_image_last" src="${SYS_BASE_URL}public/img/portfolio9.jpg" alt="Gallery 1" /></a>-->

</div><!-- End of full width -->