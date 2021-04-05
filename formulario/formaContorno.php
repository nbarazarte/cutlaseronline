<style type="text/css">
  
/*contorno*/
.rectangular{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/contorno/rectangular.png");
}

.redondo{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/contorno/redondo.png");
}

.personalizado{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/contorno/personalizado.png");
}

/*trasera*/
.metacrilato{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/trasera/metacrilato.png");
}

.pvc{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/trasera/pvc.png");
}

.dm{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/trasera/dm.png");
}

.contrachapado{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/trasera/contrachapado.png");
}

.maderadepino{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/trasera/maderadepino.png");
}

/*sujecion*/
.ancladoalapared{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/sujecion/ancladoalapared.png");
}

.colgadoaltecho{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/sujecion/colgadoaltecho.png");
}

.colgadocomouncuadro{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/sujecion/colgadocomouncuadro.png");
}

.sinsujecion{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/sujecion/sinsujecion.png");
}

/*dimmer*/
.condimmer{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/dimmer/incluir.png");
}

.sindimmer{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/dimmer/noincluir.png");
}

/*colores*/
.amarilloColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/amarillo.png");
}

.azulColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/azul.png");
}

.verdeColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/verde.png");
}

.rojoColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/rojo.png");
}

.moradoColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/morado.png");
}

.turquesaColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/turquesa.png");
}

.naranjaColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/naranja.png");
}

.fucsiaColor{
  background-image: url("http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/imagenes/colores/fucsia.png");
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
    width:55px;height:70px;
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


    /*
    width: 75px;
    height: 75px;
    */
  
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}

</style>

<div class="card" style="border: 0;">

  <div class="card-header">
    Opciones de personalización:
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-6">

        <div class="card" style="width: 15rem; border: 0;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">Forma del Contorno</h6>             

            <div class="cc-selector">

              <input type="radio" name="contornos" id="rectangular" value="rectangular" checked onchange="deshabiltarBotonCart()" > 
              <label class="drinkcard-cc rectangular" for="rectangular" onmouseover="miToolTip('contorno','Rectangular')" onmouseout="miToolTipOut('contorno')"></label> 

              <input  type="radio" name="contornos" id="redondo" value="redondo" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc redondo" for="redondo" onmouseover="miToolTip('contorno','Redondo')" onmouseout="miToolTipOut('contorno')"></label>
              
              <input type="radio" name="contornos" id="personalizado" value="personalizado" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc personalizado" for="personalizado" onmouseover="miToolTip('contorno','Personalizado')" onmouseout="miToolTipOut('contorno')"></label>

            </div> <div id="toolTip_contorno">&nbsp;</div>

          </div>
        </div>

      </div>

      <div class="col-sm-5">

        <div class="card" style="width: 18rem; border: 0;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">Sujeción del Neón</h6>
            <div class="cc-selector">
              <input type="hidden" id="tipoSujecion" name="tipoSujecion" readonly="yes" value="ancladoalapared">

              <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="ancladoalapared" value="<?php echo esc_html($cn_precio_ancladoalapared);?>" checked onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc ancladoalapared" for="ancladoalapared" onmouseover="miToolTip('sujecion','Anclado a la pared')" onmouseout="miToolTipOut('sujecion')"></label>

              <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="colgadoaltecho" value="<?php echo esc_html($cn_precio_colgadoaltecho);?>" onchange="deshabiltarBotonCart()">  
              <label class="drinkcard-cc colgadoaltecho" for="colgadoaltecho" onmouseover="miToolTip('sujecion','Colgado al techo')" onmouseout="miToolTipOut('sujecion')"></label>

              <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="colgadocomouncuadro" value="<?php echo esc_html($cn_precio_colgadocomouncuadro);?>" onchange="deshabiltarBotonCart()">   
              <label class="drinkcard-cc colgadocomouncuadro" for="colgadocomouncuadro" onmouseover="miToolTip('sujecion','Colgado como un cuadro')" onmouseout="miToolTipOut('sujecion')"></label>

              <input onclick="textoRadio('tipoSujecion',this.id)" type="radio" name="sujecion" id="sinsujecion" value="<?php echo esc_html($cn_precio_sinsujecion);?>" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc sinsujecion" for="sinsujecion" onmouseover="miToolTip('sujecion','Sin sujeción')" onmouseout="miToolTipOut('sujecion')"></label>

            </div> <div id="toolTip_sujecion">&nbsp;</div>

          </div>
        </div>          

      </div> 

      <div class="col-sm-5">
        <br/>

        <div class="card" style="width: 15rem; border: 0;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">Dimmer (controlador de luz)</h6>

            <div class="cc-selector">

              <input type="hidden" id="tipoDimmer" name="tipoDimmer" readonly="yes" value="condimmer">

              <input onclick="textoRadio('tipoDimmer',this.id)" type="radio" name="dimmer" id="condimmer" value="<?php echo esc_html($cn_precio_dimmer);?>" checked onchange="deshabiltarBotonCart()">            
              <label class="drinkcard-cc condimmer" for="condimmer" onmouseover="miToolTip('dimmer','Con dimmer')" onmouseout="miToolTipOut('dimmer')"></label>

              <input onclick="textoRadio('tipoDimmer',this.id)" type="radio" name="dimmer" id="sindimmer" value="0" onchange="deshabiltarBotonCart()">  
              <label class="drinkcard-cc sindimmer" for="sindimmer" onmouseover="miToolTip('dimmer','Sin dimmer')" onmouseout="miToolTipOut('dimmer')"></label>

            </div> <div id="toolTip_dimmer">&nbsp;</div>

          </div>
        </div> 

      </div>  

      <div class="col-sm-6">
        <br/>

        <div class="card" style="width: 23rem; border: 0;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">Trasera del Neón</h6>

            <div class="cc-selector">
              <input type="hidden" id="tipoTrasera" name="tipoTrasera" readonly="yes" value="metacrilato">

              <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="metacrilato" value="<?php echo esc_html($cn_precio_metacrilato);?>" checked onchange="deshabiltarBotonCart()">   
              <label class="drinkcard-cc metacrilato" for="metacrilato" onmouseover="miToolTip('traseraneon','Metacrilato')" onmouseout="miToolTipOut('traseraneon')"></label>

              <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="pvc" value="<?php echo esc_html($cn_precio_pvc);?>" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc pvc" for="pvc" onmouseover="miToolTip('traseraneon','PVC')" onmouseout="miToolTipOut('traseraneon')"></label>

              <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="dm" value="<?php echo esc_html($cn_precio_dm);?>" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc dm" for="dm" onmouseover="miToolTip('traseraneon','DM')" onmouseout="miToolTipOut('traseraneon')"></label>

              <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="contrachapado" value="<?php echo esc_html($cn_precio_contraenchapado);?>" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc contrachapado" for="contrachapado" onmouseover="miToolTip('traseraneon','Contrachapado')" onmouseout="miToolTipOut('traseraneon')"></label>

              <input onclick="textoRadio('tipoTrasera',this.id)" type="radio" name="traseraneon" id="maderadepino" value="<?php echo esc_html($cn_precio_maderadepino);?>" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc maderadepino" for="maderadepino" onmouseover="miToolTip('traseraneon','Madera de pino')" onmouseout="miToolTipOut('traseraneon')"></label> 

            </div> <div id="toolTip_traseraneon">&nbsp;</div>

          </div>
        </div>              

      </div>  

      <div class="col-sm-11">
        <br/>

        <div class="card" style="width: 33rem; border: 0;">
          <div class="card-body">
            
            <h6 class="card-subtitle mb-2 text-muted">Colores</h6>

            <div class="cc-selector">

              <input type="radio" name="colores" value="amarillo" id="amarilloColor" checked onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc amarilloColor" for="amarilloColor" onmouseover="miToolTip('colores','Amarillo')" onmouseout="miToolTipOut('colores')"></label> 

              <input  type="radio" name="colores" value="azul" id="azulColor" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc azulColor" for="azulColor" onmouseover="miToolTip('colores','Azul')" onmouseout="miToolTipOut('colores')"></label>

              <input  type="radio" name="colores" value="verde" id="verdeColor" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc verdeColor" for="verdeColor" onmouseover="miToolTip('colores','Verde')" onmouseout="miToolTipOut('colores')"></label>

              <input  type="radio" name="colores" value="rojo" id="rojoColor" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc rojoColor" for="rojoColor" onmouseover="miToolTip('colores','Rojo')" onmouseout="miToolTipOut('colores')"></label>

              <input  type="radio" name="colores" value="morado" id="moradoColor" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc moradoColor" for="moradoColor" onmouseover="miToolTip('colores','Morado')" onmouseout="miToolTipOut('colores')"></label>

              <input  type="radio" name="colores" value="turquesa" id="turquesaColor" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc turquesaColor" for="turquesaColor" onmouseover="miToolTip('colores','Turquesa')" onmouseout="miToolTipOut('colores')"></label>

              <input  type="radio" name="colores" value="naranja" id="naranjaColor" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc naranjaColor" for="naranjaColor" onmouseover="miToolTip('colores','Naranja')" onmouseout="miToolTipOut('colores')"></label>

              <input  type="radio" name="colores" value="fucsia" id="fucsiaColor" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc fucsiaColor" for="fucsiaColor" onmouseover="miToolTip('colores','Fucsia')" onmouseout="miToolTipOut('colores')"></label> 

            </div> <div id="toolTip_colores">&nbsp;</div>

          </div>
        </div>            

      </div>            

    </div>

  </div>

</div>      

<br/>

<!--

<div class="card">

  <div class="card-header">
    Forma del Contorno
  </div>

  <div class="card-body">

    <div class="row">

      <div class="col-sm-6">

        <div class="card-group">

          <div class="card">
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/rectangular.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
             
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="rectangular" value="rectangular" checked onchange="deshabiltarBotonCart()">        
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="rectangular">                    
                    Rectangular
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card" >
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/redondo.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="redondo" value="redondo" onchange="deshabiltarBotonCart()">     
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="redondo">                    
                    Redondo
                  </label>       
                </div>      

              </div>

            </div>
          </div>

          <div class="card" >
            <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/contorno/personalizado.png'; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              
              <div class="row">

                <div class="col-sm-12">
                  <input class="form-check-input" type="radio" name="contornos" id="personalizado" value="personalizado" onchange="deshabiltarBotonCart()">       
                </div>

                <div class="col-sm-12">
                  <label class="form-check-label tamanoLetras" for="personalizado">                    
                    Personalizado con forma
                  </label>       
                </div>      

              </div>              
              
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<br/>

-->