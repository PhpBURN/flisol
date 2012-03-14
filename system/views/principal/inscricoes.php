<!-- *************************************************************************
*********************  THIS IS THE CONTACT FORM JS  **************************
************************************************************************** -->

<script type='text/javascript'>

  $(document).ready(function(){
    var active_color = '#929191'; // Colour of user provided text
    var inactive_color = '#929191'; // Colour of default text
    $("input.default-value").css("color", inactive_color);
    var default_values = new Array();
    $("input.default-value").focus(function() {
      if (!default_values[this.id]) {
        default_values[this.id] = this.value;
      }
      if (this.value == default_values[this.id]) {
        this.value = '';
        this.style.color = active_color;
      }
      $(this).blur(function() {
        if (this.value == '') {
          this.style.color = inactive_color;
          this.value = default_values[this.id];
        }
      });
    });

    $('#contactform').submit(function(){

      formvalues = $("#contactform").serialize();

      $.ajax({
        type: "POST",
        url: "mailer.php",
        data: formvalues,
        dataType: "json",
        success: function(data) {
          if (data.success==1) {
            $("#contactwrapper").slideUp(750,function() {
              $('#contactmessage').html('Thanks! Please check your email to confirm your subscription.');
            });
          }
          else{
            if (data.invalid_email==1) { $('#email').addClass("form_error"); }
            else { $('#email').removeClass("form_error"); }

          }
        }
      });
      return false; 
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#form").val();
  });
</script>

<!-- END OF SCRIPT FOR FORM -->

<!-- Start of left content wrapper -->
<div class="left_content_wrapper">

  <!-- Start of post -->
  <div class="post">

    <h4>Dados para Inscrição</h4>

    <p>A participação no evento é gratuita independente de inscrição prévia, porém apenas inscrevendo-se antecipadamente você poderá garantir o seu certificado de participação no evento.</p>

    <form action="${SYS_BASE_URL}registrar_inscricao" id="contact_form" method="POST" enctype="multipart/form-data">

      <ul class="form">				

        <li class="short">
          <label>Nome<span class="required"></span></label>
          <input type="text" name="nome" id="nome" placeholder="Nome" class="requiredField" />
        </li>
        
        <li class="short">
          <label>Sobrenome<span class="required"></span></label>
          <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" class="requiredField" />
        </li>

        <li class="long">
          <label>Email<span class="required"></span></label>					
          <input type="text" name="email" id="email" value="Email" class="requiredField email" />
        </li>
        
        <li class="short">
          <label>Cidade<span class="required"></span></label>
          <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="requiredField" />
        </li>

        <li class="short">
          <label>Website</label>
          <input type="text" name="site" id="site" value="Website" class="requiredField" />
        </li>

        <li class="button"><input name="submitted" id="submitted" value="Submit" class="submit" type="submit" />
        </li>

      </ul>

    </form>       

  </div><!-- End of post -->

</div><!-- End of left content wrapper -->

<!-- Start of right content wrapper -->
<div class="right_content_wrapper">

  <!-- Start of text widget -->
  <div class="text_widget">

    <h2>FLISOL 2012</h2>

    <ul class="contact">
      <li><span class="contact_title">Quando?</span></li>
      <li>Sábado | 28 de Abril</li>
      <li>09:00 - 17:00</li>
    </ul>        

    <ul class="contact">
      <li><span class="contact_title">Onde?</span></li>
      <li><a href="http://www.policamp.edu.br" target="_blank">Falculdade POLICAMP</a></li>
      <li>Rua Luiz Otávio, 1281 | Pq. Sta. Cândida</li>
      <li>Campinas | São Paulo</li>
    </ul>

    <ul class="contact">
      <li><span class="contact_title">Coordenação ( Campinas )</span></li>
      <li><a href="mailto:klederson@klederson.com">Klederson Bueno</a> | Geral</li>
      <li><a href="mailto:ricardo@ricardopontes.net">Ricardo Pontes</a> | Relacionamento  </li>
      <li><a href="#">André Déo</a> | Logístico</li>
      <li><a href="#">Clóvis Tristão</a> | Conteúdo </li>
    </ul>
    
    <ul class="contact">
      <li><span class="contact_title">Colaboradores</span></li>
      <li><a href="mailto:ericatamiris@gmail.com">Érica Tamiris</a> | Mat. Gráfico</li>
      <li><a href="mailto:klederson@klederson.com">Klederson Bueno</a> | Website </li>
      <li><a href="#">Ricardo Pontes</a> | Brindes </li>
      <li><a href="#">André Déo</a> | Local e Infra</li>
      <li><a href="http://lhc.net.br">Lab. Hacker Campinas</a> | Workshops</li>
      <li><a href="http://garoa.net.br">Garoa Hacker Club</a> | Workshops</li>
    </ul>
    

  </div><!-- End of text widget -->  

  <!-- Start of text widget -->
  <div class="text_widget">

    <h2>Como Chegar?</h2>

    <iframe width="auto" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=-22.85170,-47.04363&amp;output=embed"></iframe><br />

  </div><!-- End of text widget -->    

</div><!-- End of right content wrapper -->