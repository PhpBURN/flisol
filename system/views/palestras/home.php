
<!-- Start of client wrapper -->
<div id="client_wrapper">
  <img src="${SYS_BASE_URL}public/img/divider.png" alt="divider" width="960" height="30" style="padding:20px 0 20px 0;"/>
  
<!--  <h2>Palestras</h2>-->
  <p style="text-align: center;">Confira aqui as palestras e oficinas que irão acontecer no Flisol Campinas 2012</p>
  <p style="text-align: center;">Tudo isso acontecerá no dia 28/04/2012 totalmente gratuito na POLICAMP - <a href="#">Inscreva-se já</a> é de graça.</p>
  
  <img src="${SYS_BASE_URL}public/img/divider.png" alt="divider2" width="960" height="30" style="padding:20px 0 20px 0;"/>           

</div><!-- End of client wrapper -->

<div class="clear"></div>

<!-- Start of portfolio wrapper -->
<div id="portfolio_wrapper">

<!--  <h2>Participe</h2>-->

  <!-- Start of portfolio bg -->
  <div id="portfolio-bg" class="clearfix">

    <!-- Start of image grid -->
    <ul class="image-grid grid clearfix">

      <itemPalestra tal:condition="exists: palestras" tal:repeat="item palestras/fetch" tal:omit-tag="">
        <li class="term-39" data-id="idPalestra-${item/idPalestra}">

          <div class="view view-first"><!-- Start of view container -->


            <img src="${SYS_BASE_URL}public/img/inscreva-se.jpg" alt="${item/titulo}" width="305" height="227"/>

            <div class="mask"><!-- Start of mask -->

              <h5 tal:content="item/titulo">Titulo da Palestra</h5>
              <p tal:content="item/resumo">Resumo da palestra</p>

              <a href="${SYS_BASE_URL}palestras/visualizar/${item/getUrl}" class="info" >Mais Detalhes</a> 

            </div><!-- End of mask -->

          </div><!-- end of view container -->

          <span class="tiny"><a href="${SYS_BASE_URL}palestras/visualizar/${item/getUrl}" tal:content="item/titulo">Inscreva-se</a></span>

        </li>
      </itemPalestra>
      

    </ul><!-- End of image grid -->

  </div><!-- End of portfolio bg -->             

</div><!-- End of portfolio wrapper -->

<div class="clear"></div>