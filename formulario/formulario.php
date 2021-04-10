<form class="" action="http://localhost/desarrollo/index.php/product/otro/" method="post" enctype='multipart/form-data'>

	<?php
	  require 'formaContorno.php';
	  require 'opciones.php';
	?>

	<br/>

	<div class="container">

	  <div class="row justify-content-end">
	    <div class="col-4">
	     
			<div class="quantity">
			
				<label class="screen-reader-text" for="quantity_6071259a6079e">otro cantidad</label>
				<input style="width: 70px" 
					type="number"
					id="quantity_6071259a6079e"
					class="input-text qty text"
					step="1"
					min="1"
					max=""
					name="quantity"
					value="1"
					title="Cantidad"
					size="4"
					placeholder=""
					inputmode="numeric" />
					<br/><button type="submit" name="add-to-cart" value="26" class="single_add_to_cart_button button alt">Añadir al carrito</button>
			</div>

	    </div>

	  </div>

	</div>

</form>
<br/>