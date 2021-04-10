<center>
  <h1 class="tituloPpal"><b>Corte Láser</b></h1>

  <h6 class="subtitulos"><b>MATERIALES</b></h6>

  <div class="cc-selector">
    
    <input type="hidden" id="materiales" name="materiales" readonly="yes" value="chopo">
    <input type="hidden" id="mmGrosor" name="mmGrosor" readonly="yes" value="3mm">
    <input type="hidden" id="precioGrosor" name="precioGrosor" readonly="yes" value="7.5">

    <input type="radio" name="tipomaterial" id="chopo" value="" checked onchange="">
    <label style="width:110px;height:70px;" class="drinkcard-cc chopo" for="chopo" >
     <span class="hijo">CHOPO</span>
    </label>

    <input type="radio" name="tipomaterial" id="mdf" value="" onchange="">
    <label style="width:110px;height:70px;" class="drinkcard-cc mdf" for="mdf" >
      <span class="hijo">MDF (DM)</span>
    </label>

    <input type="radio" name="tipomaterial" id="mukaly" value="" onchange="">
    <label style="width:110px;height:70px;" class="drinkcard-cc mukaly" for="mukaly" >
      <span class="hijo">MUKALY</span>
    </label>

    <input type="radio" name="tipomaterial" id="pmma" value="" onchange="">
    <label style="width:140px;height:70px;" class="drinkcard-cc pmma" for="pmma" >
      <span class="hijo">PMMA <span style="font-size: 10px">(METACRILATO)</span></span>
      </label>

  </div>

  <h6 class="subtitulos"><b>GROSOR</b></h6>

  <div id="divChopo">
  
    <div class="cc-selector">
      
      <input type="radio" name="grosorChopo" id="chopo3mm" value="<?php echo esc_html($precio_chopo_3mm);?>" checked onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc chopo3mm" for="chopo3mm" >
       <span class="hijo">3mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo4mm" value="<?php echo esc_html($precio_chopo_4mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc chopo4mm" for="chopo4mm" >
        <span class="hijo">4mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo5mm" value="<?php echo esc_html($precio_chopo_5mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc chopo5mm" for="chopo5mm" >
        <span class="hijo">5mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo6mm" value="<?php echo esc_html($precio_chopo_6mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc chopo6mm" for="chopo6mm" >
       <span class="hijo">6mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo8mm" value="<?php echo esc_html($precio_chopo_8mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc chopo8mm" for="chopo8mm" >
        <span class="hijo">8mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo10mm" value="<?php echo esc_html($precio_chopo_10mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc chopo10mm" for="chopo10mm" >
        <span class="hijo">10mm</span>
      </label>

    </div> 

  </div>

  <div id="divMdf">
  
    <div class="cc-selector">
      
      <input type="radio" name="grosorMdf" id="mdf2pto5mm" value="<?php echo esc_html($precio_mdf_25mm);?>" checked onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc mdf2pto5mm" for="mdf2pto5mm" >
       <span class="hijo">2.5mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf3mm" value="<?php echo esc_html($precio_mdf_3mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc mdf3mm" for="mdf3mm" >
        <span class="hijo">3mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf4mm" value="<?php echo esc_html($precio_mdf_4mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc mdf4mm" for="mdf4mm" >
        <span class="hijo">4mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf5mm" value="<?php echo esc_html($precio_mdf_5mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc mdf5mm" for="mdf5mm" >
       <span class="hijo">5mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf7mm" value="<?php echo esc_html($precio_mdf_7mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc mdf7mm" for="mdf7mm" >
        <span class="hijo">7mm</span>
      </label>

    </div> 

  </div>

  <div id="divMukaly">

    <div class="cc-selector">
      
      <input type="radio" name="grosorMukaly" id="mukaly2mm" value="<?php echo esc_html($precio_mukaly_2mm);?>" checked onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc mukaly2mm" for="mukaly2mm" >
       <span class="hijo">2mm</span>
      </label>
    </div>

  </div>

  <div id="divPmma">
    <div class="cc-selector">
      
      <input type="radio" name="grosorPmma" id="pmma2mm" value="<?php echo esc_html($precio_metacrilato_2mm);?>" checked onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma2mm" for="pmma2mm" >
       <span class="hijo">2mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma3mm" value="<?php echo esc_html($precio_metacrilato_3mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma3mm" for="pmma3mm" >
        <span class="hijo">3mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma4mm" value="<?php echo esc_html($precio_metacrilato_4mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma4mm" for="pmma4mm" >
        <span class="hijo">4mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma5mm" value="<?php echo esc_html($precio_metacrilato_5mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma5mm" for="pmma5mm" >
       <span class="hijo">5mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma6mm" value="<?php echo esc_html($precio_metacrilato_6mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma6mm" for="pmma6mm" >
        <span class="hijo">6mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma8mm" value="<?php echo esc_html($precio_metacrilato_8mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma8mm" for="pmma8mm" >
       <span class="hijo">8mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma10mm" value="<?php echo esc_html($precio_metacrilato_10mm);?>" onchange="">
      <label style="width:70px;height:70px;" class="drinkcard-cc pmma10mm" for="pmma10mm" >
        <span class="hijo">10mm</span>
      </label>      

    </div> 
  </div>

</center>