<center>

  <div class="row">

    <div class="col-sm-6">
      
      <label for="altura" style="color: #004C80">ALTURA (mm) </label> 
      <input type="number" class="entradas" id="altura" name="altura" placeholder="" value="" size="10" min="0" max="1290" style="width: 120px; border-radius: 12px;" required="yes">    
      
    </div>

    <div class="col-sm-6">
        
      <label for="ancho" style="color: #004C80">ANCHURA (mm) </label>
      <input type="number" class="entradas" id="ancho" name="ancho" placeholder="" value="" size="10" min="0" max="790" style="width: 120px; border-radius: 12px;" required="yes">   

    </div>

<div id="errorAltoAncho" style="color: red; text-align: center;"></div>

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
          Los formatos con los que trabajamos son: .dxf, .dwg, .pdf, .ai, .eps y .cdr. (Tamaño máximo: 128MB) Si son demasiado grandes puede enviarnos un correo a info@cutlaser.eu
        </p>
      <input class="form-control" type="file" id="fileToUpload" name="fileToUpload" style="width: 500px;border-radius: 12px; border: 2px solid #004c80 !important;" required="yes"> 
 
    </div> 

    <div class="col-sm-12">
      <br/>
      <label for="comentario" class="form-label" style="color: #004C80">¿ALGUNA PETICIÓN O COMENTARIO ADICIONAL?</label>
      <textarea class="texto" id="comentario" name="comentario" rows="3"></textarea>
    
      <input type="hidden" id="precio_final" name="precio_final" value="0" readonly="yes">

      <div id="response">

      </div>

    </div>

  </div>

</center>