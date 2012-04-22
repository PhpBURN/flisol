
<!-- Start of client wrapper -->
<div id="client_wrapper">
  <img src="${SYS_BASE_URL}public/img/divider.png" alt="divider" width="960" height="30" style="padding:20px 0 20px 0;"/>
  
<!--  <h2>Palestras</h2>-->
  <p style="text-align: center;">Confira aqui as palestras e oficinas que irão acontecer no Flisol Campinas 2012</p>
  <p style="text-align: center;">Tudo isso acontecerá no dia 28/04/2012
  totalmente gratuito na POLICAMP - <a
  href="http://www.flisolcampinas.net/inscricoes_gratuitas">Inscreva-se!</a></p>
  
  <img src="${SYS_BASE_URL}public/img/divider.png" alt="divider2" width="960" height="30" style="padding:20px 0 20px 0;"/>           

</div><!-- End of client wrapper -->

<div class="clear"></div>

<!-- Start of portfolio wrapper -->
<div id="portfolio_wrapper">

<!--  <h2>Participe</h2>-->

  <!-- Start of portfolio bg -->
  <div id="portfolio-bg" class="clearfix">

      <itemPalestra tal:condition="exists: palestras" tal:repeat="item palestras/fetch" tal:omit-tag="">
        <div class="accordionButton">${item/titulo}
                </div><!-- End of accordion button -->
                <!-- Start of accordion content -->
                <div class="accordionContent">
                <p tal:content="item/resumo"></p>
                <p><a
href="${SYS_BASE_URL}palestras/visualizar/${item/getUrl}">Saiba mais!</a></p>
        </div><!-- End of accordion content -->

      </itemPalestra>

  </div><!-- End of portfolio bg -->

</div><!-- End of portfolio wrapper -->

<div class="clear"></div>
