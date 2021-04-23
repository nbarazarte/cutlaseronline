function calcularPrecio() {

    var material        = document.getElementById('materiales').value;
    var grosor          = document.getElementById('mmGrosor').value;
    var longitud        = document.getElementById('longitud').value;
    var precioGrosor    = document.getElementById('precioGrosor').value;
    var precioFinal;

    if(longitud == ""){
        longitd = 0;
    }

    precioFinal         = (Number(longitud/1000) * Number(precioGrosor));

    var data = {
        'action': 'jnjtest',
        'material': material,
        'grosor': grosor,
        'longitud': longitud,
        'precioGrosor': precioGrosor,
        'precioFinal': precioFinal.toFixed(2),
    };

    var protocolo = window.location.protocol;
    var hostname = window.location.hostname;
    var carpeta = window.location.pathname;
    //console.log(carpeta);
    var str = carpeta;
    var res = str.split("/");
    //console.log(res[1]);

    var url = protocolo +'//'+ hostname;

    if(hostname == 'localhost'){

        var ruta = url + "/"+res[1]+"/wp-admin/admin-ajax.php";

    }else{

        var ruta = url + "/wp-admin/admin-ajax.php";
    }

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post(ruta, data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        //console.log(response);

        if(response != null){

        }
       
        document.getElementById('precio_final').value = precioFinal.toFixed(2);
        document.getElementById('response').innerHTML = response;
  
    });

}

function textoPrecioLineal(valor){

    var texto = ' € por metro lineal de corte.';
    document.getElementById('precio_corte_lineal').innerHTML = valor + texto;
}

function textoRadio(input,valor){

    document.getElementById(input).value = valor;
}

window.addEventListener('load', function () {

    //Materiales:
    var materialChopo     = document.querySelector('#chopo');
    var materialMdf       = document.querySelector('#mdf');
    var materialMukaly    = document.querySelector('#mukaly');
    var materialPmma      = document.querySelector('#pmma');

    materialChopo.onclick = function () {
        textoRadio('materiales','chopo');
        textoRadio('mmGrosor','3mm');
        textoPrecioLineal('7,5');
        var chopo3mmPrecio = document.getElementById('chopo3mm').value;
        textoRadio('precioGrosor',chopo3mmPrecio);
        calcularPrecio();
        document.getElementsByName('grosorChopo')[0].checked = true;
        document.getElementById('divChopo').style.display    = "inline";
        document.getElementById('divMdf').style.display      = "none";
        document.getElementById('divMukaly').style.display   = "none";
        document.getElementById('divPmma').style.display     = "none";    
    };

    materialMdf.onclick = function () {
        textoRadio('materiales','mdf');
        textoRadio('mmGrosor','2.5mm');
        textoPrecioLineal('7');
        var mdf2pto5mmPrecio = document.getElementById('mdf2pto5mm').value;
        textoRadio('precioGrosor',mdf2pto5mmPrecio);
        calcularPrecio();
        document.getElementsByName('grosorMdf')[0].checked = true;
        document.getElementById('divChopo').style.display    = "none";
        document.getElementById('divMdf').style.display      = "inline";
        document.getElementById('divMukaly').style.display   = "none";
        document.getElementById('divPmma').style.display     = "none";    
    };

    materialMukaly.onclick = function () {
        textoRadio('materiales','mukaly');
        textoRadio('mmGrosor','2mm');
        textoPrecioLineal('15');
        var mukaly2mmPrecio = document.getElementById('mukaly2mm').value;
        textoRadio('precioGrosor',mukaly2mmPrecio);
        calcularPrecio();      
        document.getElementsByName('grosorMukaly')[0].checked = true;
        document.getElementById('divChopo').style.display    = "none";
        document.getElementById('divMdf').style.display      = "none";
        document.getElementById('divMukaly').style.display   = "inline";
        document.getElementById('divPmma').style.display     = "none"; 
    };

    materialPmma.onclick = function () {
        textoRadio('materiales','pmma');
        textoRadio('mmGrosor','2mm');
        textoPrecioLineal('14');
        var pmma2mmPrecio = document.getElementById('pmma2mm').value;
        textoRadio('precioGrosor',pmma2mmPrecio);
        calcularPrecio();      
        document.getElementsByName('grosorPmma')[0].checked = true;        
        document.getElementById('divChopo').style.display    = "none";
        document.getElementById('divMdf').style.display      = "none";
        document.getElementById('divMukaly').style.display   = "none";
        document.getElementById('divPmma').style.display     = "inline"; 
    };

    //Grosores Chopo:
    var chopo3mm    = document.querySelector('#chopo3mm');
    var chopo4mm    = document.querySelector('#chopo4mm');
    var chopo5mm    = document.querySelector('#chopo5mm');
    var chopo6mm    = document.querySelector('#chopo6mm');
    var chopo8mm    = document.querySelector('#chopo8mm');
    var chopo10mm   = document.querySelector('#chopo10mm');

    chopo3mm.onclick = function () {
        textoRadio('mmGrosor','3mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('7,5');
        calcularPrecio();
    };
    chopo4mm.onclick = function () {
        textoRadio('mmGrosor','4mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('8,05');
        calcularPrecio();
    };
    chopo5mm.onclick = function () {
        textoRadio('mmGrosor','5mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('8,45');
        calcularPrecio();
    };        
    chopo6mm.onclick = function () {
        textoRadio('mmGrosor','6mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('9,50');
        calcularPrecio();
    };
    chopo8mm.onclick = function () {
        textoRadio('mmGrosor','8mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('10,25');
        calcularPrecio();
    };
    chopo10mm.onclick = function () {
        textoRadio('mmGrosor','10mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('11,9');
        calcularPrecio();
    };

    //Grosores Mdf:
    var mdf2pto5mm    = document.querySelector('#mdf2pto5mm');
    var mdf3mm    = document.querySelector('#mdf3mm');
    var mdf4mm    = document.querySelector('#mdf4mm');
    var mdf5mm    = document.querySelector('#mdf5mm');
    var mdf7mm    = document.querySelector('#mdf7mm');
    
    mdf2pto5mm.onclick = function () {
        textoRadio('mmGrosor','2.5mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('7');
        calcularPrecio();
    };
    mdf3mm.onclick = function () {
        textoRadio('mmGrosor','3mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('7,45');
        calcularPrecio();
    };
    mdf4mm.onclick = function () {
        textoRadio('mmGrosor','4mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('8,1');
        calcularPrecio();
    };        
    mdf5mm.onclick = function () {
        textoRadio('mmGrosor','5mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('9,05');
        calcularPrecio();
    };
    mdf7mm.onclick = function () {
        textoRadio('mmGrosor','7mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('11');
        calcularPrecio();
    };

    //Grosores Mukaly:
    var mukaly2mm    = document.querySelector('#mukaly2mm');
    
    mukaly2mm.onclick = function () {
        textoRadio('mmGrosor','2mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('15');
        calcularPrecio();
    }; 

    //Grosores Pmma:
    var pmma2mm    = document.querySelector('#pmma2mm');
    var pmma3mm    = document.querySelector('#pmma3mm');
    var pmma4mm    = document.querySelector('#pmma4mm');
    var pmma5mm    = document.querySelector('#pmma5mm');
    var pmma6mm    = document.querySelector('#pmma6mm');
    var pmma8mm    = document.querySelector('#pmma8mm');
    var pmma10mm    = document.querySelector('#pmma10mm');
    
    pmma2mm.onclick = function () {
        textoRadio('mmGrosor','2mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('14');
        calcularPrecio();
    };
    pmma3mm.onclick = function () {
        textoRadio('mmGrosor','3mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('24');
        calcularPrecio();
    };
    pmma4mm.onclick = function () {
        textoRadio('mmGrosor','4mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('32');
        calcularPrecio();
    };        
    pmma5mm.onclick = function () {
        textoRadio('mmGrosor','5mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('40');
        calcularPrecio();
    };
    pmma6mm.onclick = function () {
        textoRadio('mmGrosor','6mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('48');
        calcularPrecio();
    };  
    pmma8mm.onclick = function () {
        textoRadio('mmGrosor','8mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('66');
        calcularPrecio();
    };
    pmma10mm.onclick = function () {
        textoRadio('mmGrosor','10mm');
        textoRadio('precioGrosor',this.value);
        textoPrecioLineal('82');
        calcularPrecio();
    };

    //Alto, Ancho y Longitud:
    var altura   = document.querySelector('#altura');
    var ancho    = document.querySelector('#ancho');
    var longitud    = document.querySelector('#longitud');

    altura.onchange = function () {

        validarAlturaAnchura();
    };  

    ancho.onchange = function () {

        validarAlturaAnchura();
    };

    longitud.onchange = function () {

        calcularPrecio();
    }; 

});

function validarAlturaAnchura(){

    if(Number(altura.value > 1290)){
        document.getElementById('errorAltoAncho').innerHTML = 'La altura tiene que ser menor de 1290mm. <br/> El botón de Añadir al carrito será deshabilitado';
        document.getElementsByName("add-to-cart")[0].disabled = true;  
    }else if(Number(ancho.value > 790)){
        document.getElementById('errorAltoAncho').innerHTML = 'La anchura tiene que ser menor de 790mm. <br/> El botón de Añadir al carrito será deshabilitado';
        document.getElementsByName("add-to-cart")[0].disabled = true;  
    }else{
        document.getElementById('errorAltoAncho').innerHTML = '';
        document.getElementsByName("add-to-cart")[0].disabled = false;  
    }
}

function cerrar(){

    document.getElementById('mensajeError').style.display   = "none";

}