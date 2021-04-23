<center>

  <div class="row">

      <div class="col-sm-12">


        <h6 style="font-size: 20px;
    color: #004c80;
    margin: 12px 0px 22px;
    font-family: 'Poppins';
    font-weight: 500;
    line-height: 24px;">MEDIDAS</h6><br/>
      </div>    

    <div class="col-sm-6">
      
      <label for="altura" style="color: #004C80">ALTURA (mm) </label> <br/>
      <input type="number" class="entradas" id="altura" name="altura" placeholder="" value="" size="10" min="0" max="1290" style="width: 120px; border-radius: 12px;" required="yes">    
      
    </div>

    <div class="col-sm-6">
        
      <label for="ancho" style="color: #004C80">ANCHURA (mm) </label><br/>
      <input type="number" class="entradas" id="ancho" name="ancho" placeholder="" value="" size="10" min="0" max="790" style="width: 120px; border-radius: 12px;" required="yes">   

    </div>

    <div id="errorAltoAncho" style="color: red; text-align: center;"></div>

    <?php

      if(isset($_SESSION['mensajeError']) && !empty($_SESSION['mensajeError'])  ){?>

        <div id="mensajeError"> 
          <br/>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>¡Error!</strong> <?=$_SESSION['mensajeError'];?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="cerrar()"></button>
          </div>
        </div>

      <?php }

    ?>

    <div class="col-sm-12">

      <br/>
      <label for="longitud" style="color: #004C80">LONGITUD DEL TRAZO (mm) *</label>
      <p style="font-weight: normal;">
        Si no sabe cómo obtenerlos puedes consultar esta <a href='https://www.youtube.com/watch?v=6RJptvaWxwE&amp;feature=youtu.be' target='_blank' class='amarillolk'>ayuda.</a>
      </p>
      <input type="number" class="entradas" id="longitud" name="longitud" placeholder="" value="" style="width: 120px; border-radius: 12px;" required="yes">    

    </div> 

    <div class="col-sm-12">
      
      <br/>
      <label for="fileToUpload" class="form-label" style="color: #004C80">ADJUNTA AQUÍ TU ARCHIVO</label>
        <p style="font-weight: normal;">
          Los formatos con los que trabajamos son: .dxf, .dwg, .pdf, .ai, .eps, .cdr y .zip. (Tamaño máximo: 128MB) Si son demasiado grandes puede enviarnos un correo a info@cutlaser.eu
        </p>
      <!--
        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" style="border-radius: 12px; border: 2px solid #004c80 !important;" required="yes"> 
      -->

    <div style="border: 3pt dashed #004c80 !important;background-color: #f0f0f0;border-radius: 50px;">
      <br/>
        <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" style="width: 75%" required="yes">
      <br/>
    </div>      
 
    </div> 

    <div class="col-sm-12">
      <br/>
      <label for="comentario" class="form-label" style="color: #004C80">¿ALGUNA PETICIÓN O COMENTARIO ADICIONAL?</label>
      <textarea class="form-control" style="border: 2px solid #004c80 !important;border-radius: 50px;    padding: 33px;" id="comentario" name="comentario" rows="4" cols="20"></textarea>
    
      <input type="hidden" id="precio_final" name="precio_final" value="0" readonly="yes">

      <div id="response">

      </div>

    </div>

  </div>

</center>