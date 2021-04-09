<style type="text/css">

.hijo {
   padding: 7% 0;
   font-size: 12px;
   font-weight: bold;
}

/*materiales*/
.chopo,
.mdf,
.mukaly,
.pmma,
.chopo3mm,
.chopo4mm,
.chopo5mm,
.chopo6mm,
.chopo8mm,
.chopo10mm,
.mdf2pto5mm,
.mdf3mm,
.mdf4mm,
.mdf5mm,
.mdf7mm,
.mukaly2mm,
.pmma2mm,
.pmma3mm,
.pmma4mm,
.pmma5mm,
.pmma6mm,
.pmma8mm,
.pmma10mm {
  padding: 3% 0;
  border-radius: 14px;
  border: 3px #004c80 solid;
}

/*imagen radio button*/

.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}

.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
      -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    /*width:150px;height:70px;*/
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
         
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);   
}

.drinkcard-cc:hover{
  
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
    /*width: 75px;
    height: 75px;*/
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}

</style>

<center>
  <h1>Corte Láser</h1>

  <h6 class="">MATERIALES</h6>

  <div class="cc-selector">
    <input type="hidden" id="materiales" name="materiales" readonly="yes" value="chopo">
    <input type="hidden" id="mmGrosor" name="mmGrosor" readonly="yes" value="3mm">

    <input type="radio" name="tipomaterial" id="chopo" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">

    <label style="width:110px;height:70px;" class="drinkcard-cc chopo" for="chopo" >
     <span class="hijo">CHOPO</span>
    </label>

    <input type="radio" name="tipomaterial" id="mdf" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
    <label style="width:110px;height:70px;" class="drinkcard-cc mdf" for="mdf" >
      <span class="hijo">MDF (DM)</span></label>

    <input type="radio" name="tipomaterial" id="mukaly" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
    <label style="width:110px;height:70px;" class="drinkcard-cc mukaly" for="mukaly" >
      <span class="hijo">MUKALY</span></label>

    <input type="radio" name="tipomaterial" id="pmma" value="<?php echo esc_html($cn_precio_contraenchapado);?>" onchange="deshabiltarBotonCart()">
    <label style="width:140px;height:70px;" class="drinkcard-cc pmma" for="pmma" >
      <span class="hijo">PMMA <span style="font-size: 10px">(METACRILATO)</span></span>
      </label>

  </div>

  <h6 class="">GROSOR</h6>

  <div id="divChopo">
  
    <div class="cc-selector">
      
      <input type="radio" name="grosorChopo" id="chopo3mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc chopo3mm" for="chopo3mm" >
       <span class="hijo">3mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo4mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc chopo4mm" for="chopo4mm" >
        <span class="hijo">4mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo5mm" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc chopo5mm" for="chopo5mm" >
        <span class="hijo">5mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo6mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc chopo6mm" for="chopo6mm" >
       <span class="hijo">6mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo8mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc chopo8mm" for="chopo8mm" >
        <span class="hijo">8mm</span>
      </label>

      <input type="radio" name="grosorChopo" id="chopo10mm" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc chopo10mm" for="chopo10mm" >
        <span class="hijo">10mm</span>
      </label>

    </div> 

  </div>

  <div id="divMdf">
  
    <div class="cc-selector">
      
      <input type="radio" name="grosorMdf" id="mdf2pto5mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc mdf2pto5mm" for="mdf2pto5mm" >
       <span class="hijo">2.5mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf3mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc mdf3mm" for="mdf3mm" >
        <span class="hijo">3mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf4mm" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc mdf4mm" for="mdf4mm" >
        <span class="hijo">4mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf5mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc mdf5mm" for="mdf5mm" >
       <span class="hijo">5mm</span>
      </label>

      <input type="radio" name="grosorMdf" id="mdf7mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc mdf7mm" for="mdf7mm" >
        <span class="hijo">7mm</span>
      </label>

    </div> 

  </div>

  <div id="divMukaly">

    <div class="cc-selector">
      
      <input type="radio" name="grosorMukaly" id="mukaly2mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc mukaly2mm" for="mukaly2mm" >
       <span class="hijo">2mm</span>
      </label>
    </div>

  </div>

  <div id="divPmma">
    <div class="cc-selector">
      
      <input type="radio" name="grosorPmma" id="pmma2mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma2mm" for="pmma2mm" >
       <span class="hijo">2mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma3mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma3mm" for="pmma3mm" >
        <span class="hijo">3mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma4mm" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma4mm" for="pmma4mm" >
        <span class="hijo">4mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma5mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma5mm" for="pmma5mm" >
       <span class="hijo">5mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma6mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma6mm" for="pmma6mm" >
        <span class="hijo">6mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma8mm" value="<?php echo esc_html($cn_precio_metacrilato);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma8mm" for="pmma8mm" >
       <span class="hijo">8mm</span>
      </label>

      <input type="radio" name="grosorPmma" id="pmma10mm" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
      <label style="width:80px;height:70px;" class="drinkcard-cc pmma10mm" for="pmma10mm" >
        <span class="hijo">10mm</span>
      </label>      

    </div> 
  </div>

</center>