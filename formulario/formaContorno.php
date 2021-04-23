<center>

    <div class="row">

      <div class="col-sm-12">
        <h1 class="" style="font-size: 60px;
    font-weight: 600;
    font-family: 'Poppins';
    /* width: 1140px; */
    text-align: center;
    margin: auto;
    /* margin-left: 126px; */
    color: #004C80;
    text-transform: capitalize;">Corte Láser</h1><br/>

        <h6 style="font-size: 20px;
    color: #004c80;
    margin: 12px 0px 22px;
    font-family: 'Poppins';
    font-weight: 500;
    line-height: 24px;">MATERIALES</h6><br/>
      </div>



      <div class="cc-selector col-sm-12">
        
        <input type="hidden" id="materiales" name="materiales" readonly="yes" value="chopo">
        <input type="hidden" id="mmGrosor" name="mmGrosor" readonly="yes" value="3mm">
        <input type="hidden" id="precioGrosor" name="precioGrosor" readonly="yes" value="7.5">

        <input type="radio" name="tipomaterial" id="chopo" value="" checked onchange="">
        <label style="width:110px;height:70px;" class="drinkcard-cc " for="chopo" >
         <span class=""><b>CHOPO</b></span>
        </label>

        <input type="radio" name="tipomaterial" id="mdf" value="" onchange="">
        <label style="width:110px;height:70px;" class="drinkcard-cc " for="mdf" >
          <span class=""><b>MDF (DM)</b></span>
        </label>

        <input type="radio" name="tipomaterial" id="mukaly" value="" onchange="">
        <label style="width:110px;height:70px;" class="drinkcard-cc " for="mukaly" >
          <span class=""><b>MUKALY</b></span>
        </label>

        <input type="radio" name="tipomaterial" id="pmma" value="" onchange="">
        <label style="width:180px;height:70px;" class="drinkcard-cc " for="pmma" >
          <span class=""><b>PMMA (METACRILATO)</b></span>
        </label>
       
      </div>

      <h6 style="font-size: 20px;
    color: #004c80;
    margin: 12px 0px 22px;
    font-family: 'Poppins';
    font-weight: 500;
    line-height: 24px;">GROSOR</h6>


      <div id="divChopo">
      
        <div class="cc-selector col-sm-12">
          <br/>
          <input type="radio" name="grosorChopo" id="chopo3mm" value="<?php echo esc_html($precio_chopo_3mm);?>" checked onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="chopo3mm" >
           <span class=""><b>3mm</b></span>
          </label>

          <input type="radio" name="grosorChopo" id="chopo4mm" value="<?php echo esc_html($precio_chopo_4mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="chopo4mm" >
            <span class=""><b>4mm</b></span>
          </label>

          <input type="radio" name="grosorChopo" id="chopo5mm" value="<?php echo esc_html($precio_chopo_5mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="chopo5mm" >
            <span class=""><b>5mm</b></span>
          </label>

          <input type="radio" name="grosorChopo" id="chopo6mm" value="<?php echo esc_html($precio_chopo_6mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="chopo6mm" >
           <span class=""><b>6mm</b></span>
          </label>

          <input type="radio" name="grosorChopo" id="chopo8mm" value="<?php echo esc_html($precio_chopo_8mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="chopo8mm" >
            <span class=""><b>8mm</b></span>
          </label>

          <input type="radio" name="grosorChopo" id="chopo10mm" value="<?php echo esc_html($precio_chopo_10mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="chopo10mm" >
            <span class=""><b>10mm</b></span>
          </label>

        </div> 

      </div>

      <div id="divMdf">
      
        <div class="cc-selector col-sm-12">
          <br/>
          <input type="radio" name="grosorMdf" id="mdf2pto5mm" value="<?php echo esc_html($precio_mdf_25mm);?>" checked onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="mdf2pto5mm" >
           <span class=""><b>2.5mm</b></span>
          </label>

          <input type="radio" name="grosorMdf" id="mdf3mm" value="<?php echo esc_html($precio_mdf_3mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="mdf3mm" >
            <span class=""><b>3mm</b></span>
          </label>

          <input type="radio" name="grosorMdf" id="mdf4mm" value="<?php echo esc_html($precio_mdf_4mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="mdf4mm" >
            <span class=""><b>4mm</b></span>
          </label>

          <input type="radio" name="grosorMdf" id="mdf5mm" value="<?php echo esc_html($precio_mdf_5mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="mdf5mm" >
           <span class=""><b>5mm</b></span>
          </label>

          <input type="radio" name="grosorMdf" id="mdf7mm" value="<?php echo esc_html($precio_mdf_7mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="mdf7mm" >
            <span class=""><b>7mm</b></span>
          </label>

        </div> 

      </div>

      <div id="divMukaly">

        <div class="cc-selector col-sm-12">
          <br/>
          <input type="radio" name="grosorMukaly" id="mukaly2mm" value="<?php echo esc_html($precio_mukaly_2mm);?>" checked onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="mukaly2mm" >
           <span class=""><b>2mm</b></span>
          </label>
        </div>

      </div>

      <div id="divPmma">
        <div class="cc-selector col-sm-12">
          <br/>
          <input type="radio" name="grosorPmma" id="pmma2mm" value="<?php echo esc_html($precio_metacrilato_2mm);?>" checked onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma2mm" >
           <span class=""><b>2mm</b></span>
          </label>

          <input type="radio" name="grosorPmma" id="pmma3mm" value="<?php echo esc_html($precio_metacrilato_3mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma3mm" >
            <span class=""><b>3mm</b></span>
          </label>

          <input type="radio" name="grosorPmma" id="pmma4mm" value="<?php echo esc_html($precio_metacrilato_4mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma4mm" >
            <span class=""><b>4mm</b></span>
          </label>

          <input type="radio" name="grosorPmma" id="pmma5mm" value="<?php echo esc_html($precio_metacrilato_5mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma5mm" >
           <span class=""><b>5mm</b></span>
          </label>

          <input type="radio" name="grosorPmma" id="pmma6mm" value="<?php echo esc_html($precio_metacrilato_6mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma6mm" >
            <span class=""><b>6mm</b></span>
          </label>

          <input type="radio" name="grosorPmma" id="pmma8mm" value="<?php echo esc_html($precio_metacrilato_8mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma8mm" >
           <span class=""><b>8mm</b></span>
          </label>

          <input type="radio" name="grosorPmma" id="pmma10mm" value="<?php echo esc_html($precio_metacrilato_10mm);?>" onchange="">
          <label style="width:70px;height:70px;" class="drinkcard-cc " for="pmma10mm" >
            <span class=""><b>10mm</b></span>
          </label>      

        </div> 
      </div>

      <div class="col-sm-12">
        <div id="precio_corte_lineal">7,50 € por metro lineal de corte.</div>
      </div>


  </div>
</center>