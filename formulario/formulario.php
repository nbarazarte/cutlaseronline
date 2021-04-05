<!--<form id="customizerNeon">-->

    <input id="font-url-input" type="hidden" readonly="yes" value="http://localhost/desarrollo/wp-content/plugins/rotulosmetalarteCustomizerNeon/css/Fonts/heartbeat_in_christmas/HeartbeatinChristmas.woff" />

<!--
    <input id="font-url-input" type="hidden" readonly="yes" value="http://endirecto.ploshshop.com/wp-content/plugins/rotulosmetalarteCustomizerNeon/css/Fonts/heartbeat_in_christmas/HeartbeatinChristmas.woff" />
-->
  
    <div id="medida"> </div>
    <div id="result"> </div>
    
      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> 0<?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <!--<input type="text" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">-->
        </h1>
        <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <h3>Letras de Neón</h3>
        <p style="text-align: justify;">
          Neones personalizados, puedes seguirnos en nuestro perfil de Instagram para ver los trabajos realizados @RotulosMetalarte
          Tres medidas a escoger, Puedes pedirnos un presupuesto personalizado si quieres  en caso de querer un Neón personalizado o con alguna medida diferente
        </p>

        <div id="caja">
          <div class="neon_effect HeartbeatinChristmas amarillo">
            <p>Rótulos Metalarte</p>
          </div>
       </div>

      </div>
      
      <div class="col-12 text-center">

      <!--
        <button id="myButton" style="color: #fff; background-color: #870D00" onclick="jQueryDoSomethingAJAX()" class="btn"> 
          <i class="fas fa-magic"></i> 
          Aplicar cambios
        </button>
       -->

        <a id="myButton" style="color: #fff; background-color: #870D00" onclick="" class="btn" role="button"><!-- browser.js ln 455-->
          <i class="fas fa-magic"></i> 
          Aplicar cambios
        </a>

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>
      <input type="hidden" class="form-control" id="costoTransformador" value="<?php echo esc_html($costoTransformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="iva" value="<?php echo esc_html($iva);?>" readonly="yes"> 

      <div class="card" style="">

        <div class="card-header">
          Personaliza tu rótulo
        </div>

        <div class="card-body">

          <?php

            require 'opciones.php';

            require 'formaContorno.php';
                      
           /* 
            require 'traseraNeon.php';

            require 'sujecionNeon.php';

            require 'dimmer.php';
          
            require 'colores.php';

          */
          ?>
        </div>
      
      </div>
    
    <br/>
<!--</form>-->