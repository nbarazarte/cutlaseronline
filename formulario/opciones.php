<style type="text/css">
  
  .entradas{

    text-align: center;
    border: 2px solid #004c80!important;
    
  }

  .texto{
        border: 2px solid #004c80 !important;
    border-radius: 50px;
    padding: 33px;
  }

</style>

<center>

  <div class="row">

    <div class="col-sm-6">
      
      <label for="altura">ALTURA (mm) </label> 
      <input type="number" class="entradas" id="altura" placeholder="" value="0" size="10" min="0" max="1290" style="width: 120px; border-radius: 12px;">    
      
    </div>

    <div class="col-sm-6">
        
      <label for="ancho">ANCHURA (mm) </label>
      <input type="number" class="entradas" id="ancho" placeholder="" value="0" size="10" min="0" max="790" style="width: 120px; border-radius: 12px;">   

    </div>

<div id="errorAltoAncho" style="color: red; text-align: center;"></div>

    <div class="col-sm-12">

      <br/>
      <label for="longitud">LONGITUD DEL TRAZO (mm) *</label>
      <p style="font-weight: normal;">
        Si no sabe cómo obtenerlos puedes consultar esta <a href='https://www.youtube.com/watch?v=6RJptvaWxwE&amp;feature=youtu.be' target='_blank' class='amarillolk'>ayuda.</a>
      </p>
      <input type="number" class="entradas" id="longitud" placeholder="" value="0" style="width: 120px; border-radius: 12px;">    

    </div> 

    <div class="col-sm-12">
      
      <br/>
      <label for="formFile" class="form-label">ADJUNTA AQUÍ TU ARCHIVO</label>
        <p style="font-weight: normal;">
          Los formatos con los que trabajamos son: .dxf, .dwg, .pdf, .ai, .eps y .cdr. (Tamaño máximo: 128MB) Si son demasiado grandes puede enviarnos un correo a info@cutlaser.eu
        </p>
      <input class="form-control" type="file" id="formFile" style="width: 500px;border-radius: 12px; border: 2px solid #004c80 !important;"> 
 
    </div> 

    <div class="col-sm-12">
      <br/>
      <label for="exampleFormControlTextarea1" class="form-label">¿ALGUNA PETICIÓN O COMENTARIO ADICIONAL?</label>
      <textarea class="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
      
    </div>

  </div>

</center>