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
        
        <li class="short">
          <label>RG<span class="required"></span></label>
          <input type="text" name="rg" id="rg" placeholder="RG" class="requiredField" />
        </li>

        <li class="long">
          <label>Email<span class="required"></span></label>					
          <input type="text" name="email" id="email" value="Email" class="requiredField email" />
        </li>
        
        <li class="short">
          <label>Cidade<span class="required"></span></label>
          <input type="text" name="cidade" id="cidade" placeholder="Cidade/Estado" class="requiredField" />
        </li>

        <li class="short">
          <label>Website</label>
          <input type="text" name="site" id="site" value="Website" />
        </li>

        <li class="button"><input name="submitted" id="submitted" value="Submit" class="submit" type="submit" />
        </li>

      </ul>

    </form>       

  </div><!-- End of post -->

</div><!-- End of left content wrapper -->