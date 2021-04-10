<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/3be368b9d8.js" crossorigin="anonymous"></script>

<div class="col-12 text-center">

<br/>
<h5 class="card-title">Configuración de Corte Láser Online</h5>

<form method="post" action="admin-post.php">

  <input type="hidden" name="action"  value="guardar_ga" />

  <!-- mejorar la seguridad -->
  <?php wp_nonce_field('token_ga'); ?>

    <div class="row">

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">ID del Producto Personalizado</h5>

              <div class="mb-3">
                <label for="cn_pagina" class="form-label">Valor:</label>
                <!--
                  <input type="text" class="form-control" id="cn_pagina" name="cn_pagina" value="<?php echo esc_html($cn_pagina);?>" required/>
                -->
                <input type="number" class="form-control" id="cn_id_producto_personalizado_CortesLaser" name="cn_id_producto_personalizado_CortesLaser" value="<?php echo esc_html($cn_id_producto_personalizado_CortesLaser);?>" required/>

              </div>

          </div>
        </div>
      </div>


      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Grosor Mukaly</h5>

              <div class="mb-3">
                <label for="precio_mukaly_2mm" class="form-label">2 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_mukaly_2mm" name="precio_mukaly_2mm" value="<?php echo esc_html($precio_mukaly_2mm);?>" required/>
                
              </div>

          </div>
        </div>
      </div>

    </div>  

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Grosor Chopo</h5>

              <div class="mb-3">
                <label for="precio_chopo_3mm" class="form-label">3 MM:</label>
                <input type="number" step=".0001" class="form-control" id="precio_chopo_3mm" name="precio_chopo_3mm" value="<?php echo esc_html($precio_chopo_3mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_chopo_4mm" class="form-label">4 MM:</label>
                <input type="number" step=".0001" class="form-control" id="precio_chopo_4mm" name="precio_chopo_4mm" value="<?php echo esc_html($precio_chopo_4mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_chopo_5mm" class="form-label">5 MM:</label>
                <input type="number" step=".0001" class="form-control" id="precio_chopo_5mm" name="precio_chopo_5mm" value="<?php echo esc_html($precio_chopo_5mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_chopo_6mm" class="form-label">6 MM:</label>
                <input type="number" step=".0001" class="form-control" id="precio_chopo_6mm" name="precio_chopo_6mm" value="<?php echo esc_html($precio_chopo_6mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_chopo_8mm" class="form-label">8 MM:</label>
                <input type="number" step=".0001" class="form-control" id="precio_chopo_8mm" name="precio_chopo_8mm" value="<?php echo esc_html($precio_chopo_8mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_chopo_10mm" class="form-label">10 MM:</label>
                <input type="number" step=".0001" class="form-control" id="precio_chopo_10mm" name="precio_chopo_10mm" value="<?php echo esc_html($precio_chopo_10mm);?>" required/>
                
              </div>                                                 

          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Grosor MDF (DM)</h5>

              <div class="mb-3">
                <label for="precio_mdf_25mm" class="form-label">2.5 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_mdf_25mm" name="precio_mdf_25mm" value="<?php echo esc_html($precio_mdf_25mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_mdf_3mm" class="form-label">3 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_mdf_3mm" name="precio_mdf_3mm" value="<?php echo esc_html($precio_mdf_3mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_mdf_4mm" class="form-label">4 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_mdf_4mm" name="precio_mdf_4mm" value="<?php echo esc_html($precio_mdf_4mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_mdf_5mm" class="form-label">5 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_mdf_5mm" name="precio_mdf_5mm" value="<?php echo esc_html($precio_mdf_5mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_mdf_7mm" class="form-label">7 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_mdf_7mm" name="precio_mdf_7mm" value="<?php echo esc_html($precio_mdf_7mm);?>" required/>
                
              </div>                                               

          </div>
        </div>
      </div>  

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Grosor PMMA (METACRILATO)</h5>

              <div class="mb-3">
                <label for="precio_metacrilato_2mm" class="form-label">2 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_2mm" name="precio_metacrilato_2mm" value="<?php echo esc_html($precio_metacrilato_2mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_metacrilato_3mm" class="form-label">3 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_3mm" name="precio_metacrilato_3mm" value="<?php echo esc_html($precio_metacrilato_3mm);?>" required/>

              </div>

              <div class="mb-3">
                <label for="precio_metacrilato_4mm" class="form-label">4 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_4mm" name="precio_metacrilato_4mm" value="<?php echo esc_html($precio_metacrilato_4mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_metacrilato_5mm" class="form-label">5 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_5mm" name="precio_metacrilato_5mm" value="<?php echo esc_html($precio_metacrilato_5mm);?>" required/>

              </div>

              <div class="mb-3">
                <label for="precio_metacrilato_6mm" class="form-label">6 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_6mm" name="precio_metacrilato_6mm" value="<?php echo esc_html($precio_metacrilato_6mm);?>" required/>

              </div>

              <div class="mb-3">
                <label for="precio_metacrilato_8mm" class="form-label">8 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_8mm" name="precio_metacrilato_8mm" value="<?php echo esc_html($precio_metacrilato_8mm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="precio_metacrilato_10mm" class="form-label">10 MM:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_10mm" name="precio_metacrilato_10mm" value="<?php echo esc_html($precio_metacrilato_10mm);?>" required/>

              </div>                              

          </div>
        </div>
      </div>  

    </div>

  <button type="submit" class="btn btn-primary"> <i class="fas fa-magic"></i> Guardar todo</button>

</form>

</div>