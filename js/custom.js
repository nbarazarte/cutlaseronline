//IMPORTANTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Para deshabiltar por defecto el boton de añadir al carrito
//en la linea 249 de jQueryDoSomethingAJAX() se habilita nuevamente!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(document.getElementById('rotulo') !== null){
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';    
}

function deshabiltarBotonCart(){
    //console.log('deshabilita el boton');
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';       
}

function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    //var formulario = document.forms.namedItem("customizerNeon");

    var rotulo = document.getElementById('rotulo').value
    var alto = document.getElementById('alto').value;
    var ancho = document.getElementById('ancho').value;

    var x = document.getElementById("letra").selectedIndex;
    var y = document.getElementById("letra").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var fuenteLetrasText = y[x].text;
    var fuenteLetras = y[x].value;

    var x = document.getElementById("tiempos").selectedIndex;
    var y = document.getElementById("tiempos").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var tiemposEntregaText = y[x].text;
    var tiemposEntrega = y[x].value;

    var contornos = document.getElementsByName("contornos");
    var txt = "";
    var i;
    for (i = 0; i < contornos.length; i++) {
        if (contornos[i].checked) {
          txt = contornos[i].value;
        }
    }

    var contorno = txt;

    var traseraneon = document.getElementsByName("traseraneon");
    var txt = "";
    var i;
    for (i = 0; i < traseraneon.length; i++) {
        if (traseraneon[i].checked) {
          txt = traseraneon[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoTrasera").value) {
      case 'maderadepino':
        textoCorrecto = "madera de pino";
        break;

        default:
            textoCorrecto = document.getElementById("tipoTrasera").value;
        break;
    }

    var tipoTrasera = textoCorrecto;
    var trasera = txt;

    var sujecion = document.getElementsByName("sujecion");
    var txt = "";
    var i;
    for (i = 0; i < sujecion.length; i++) {
        if (sujecion[i].checked) {
          txt = sujecion[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoSujecion").value) {
      case 'ancladoalapared':
        textoCorrecto = "anclado a la pared";
        break;

      case 'colgadoaltecho':
        textoCorrecto = "colgado al techo";
        break;

      case 'colgadocomouncuadro':
        textoCorrecto = "colgado como un cuadro";
        break;

      case 'sinsujecion':
        textoCorrecto = "sin sujeción";
        break;                          

        default:
            textoCorrecto = document.getElementById("tipoSujecion").value;
        break;
    }

    var tipoSujecion = textoCorrecto;
    var sujecionNeon = txt;

    var dimmer = document.getElementsByName("dimmer");
    var txt = "";
    var i;
    for (i = 0; i < dimmer.length; i++) {
        if (dimmer[i].checked) {
          txt = dimmer[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoDimmer").value) {
      case 'condimmer':
        textoCorrecto = "con dimmer";
        break;

      case 'sindimmer':
        textoCorrecto = "sin dimmer";
        break;

        default:
            textoCorrecto = document.getElementById("tipoDimmer").value;
        break;
    }

    var tipoDimmer = textoCorrecto;
    var dimmerNeon = txt;       

    var colores = document.getElementsByName("colores");
    var txt = "";
    var i;
    for (i = 0; i < colores.length; i++) {
        if (colores[i].checked) {
          txt = colores[i].value;
        }
    }

    var color = txt;


    var anchocm = document.getElementById("ancho").value;//ancho;///72/0.393701;

    var alturacm = document.getElementById("altura").value;


    //ancho del SVG:
    var anchoSVG = document.getElementById('anchoSVG').value;
    var anchoSVGCorreccion = anchoSVG * 0.76;
    var costoTransformador = Number(document.getElementById('costoTransformador').value);

    document.getElementById('impuesto').value = document.getElementById('iva').value;
    //Calculo el precio del rótulo y lo envío al campo oculto en el formulario del carrito:

    console.log("Ancho SVG Path A en cm: " + anchoSVG);
    console.log("Ancho SVG Path B en cm: " + anchoSVGCorreccion.toFixed(3));
    console.log("Ancho en cm: " + anchocm);
    console.log("Altura en cm: " + alturacm);
    console.log("Tamaño de letra: " + alto);
    //console.log("Alto en px: " + altopx);
    console.log("Trasera Neon: " +trasera);
    console.log("Sujecion Neon: " + sujecionNeon);
    console.log("dimmerNeon: "+ dimmerNeon);
    console.log("Tiempo entrega: "+ tiemposEntrega);
    console.log("Costo Transformador: "+ costoTransformador);



    console.log("-----------------------------------------------");

    traseraNeon     = Number(anchocm) * Number(alto) * Number(trasera);
    sujecionNeon    = Number(sujecionNeon);
    dimmerNeon      = Number(dimmerNeon);
    tiemposEntrega  = Number(tiemposEntrega);
    tipoLetra       = (Number(anchoSVGCorreccion) / 100) * 7;
    
    console.log("Total Trasera: " +anchocm +" x "+alto +" x "+ trasera +" = "+ traseraNeon.toFixed(3));
    console.log("Total sujecion Neon: " + sujecionNeon);
    console.log("Total dimmer Neon: " + dimmerNeon);
    console.log("Total tiempos de entrega: " + tiemposEntrega);
    console.log("Tipo de letra: ("+anchoSVGCorreccion +"/100) x 7 = "+ tipoLetra.toFixed(3));

    //((Tipo de letra + trasera de neón + sujeción del neón + dimmer ) * 3) + tiempo de entrega

    subTotalprecio     = ((tipoLetra + traseraNeon + sujecionNeon + dimmerNeon + costoTransformador) * 3) + tiemposEntrega ;

    var iva = Number(document.getElementById('iva').value / 100);

    precioFinal     = subTotalprecio;//(subTotalprecio * iva) + subTotalprecio;

    console.log("Precio: (("+tipoLetra.toFixed(3)+" + "+traseraNeon.toFixed(3)+" + "+sujecionNeon+" + "+dimmerNeon+" + "+costoTransformador+") x 3 ) + "+tiemposEntrega+" = "+precioFinal.toFixed(3));


    if(document.getElementById("altura").value == 0){
        precioFinal = 0;
    }

    var data = {
        'action': 'jnjtest',
        'rotulo': rotulo,
        'alto': alto,
        'ancho': ancho,    
        'fuenteLetras': fuenteLetras,
        'tiemposEntrega': tiemposEntrega,
        'contorno': contorno,
        'trasera': trasera,
        'tipoTrasera': tipoTrasera,
        'sujecionNeon': sujecionNeon,
        'tipoSujecion': tipoSujecion,
        'dimmerNeon': dimmerNeon,
        'color': color,
        'anchocm': anchocm,
        'fuenteLetrasText': fuenteLetrasText,
        'tiemposEntregaText': tiemposEntregaText,
        'subTotalprecio': subTotalprecio.toFixed(2),
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

     //document.getElementById("myDIV").style.display = 'inline';
     document.getElementById("myDIV").style.visibility = 'visible';

     document.getElementById("myButton").style.visibility = 'hidden';

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post(ruta, data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        //console.log(response);

        if(response != null){
            //document.getElementById("myDIV").style.display = "none";
            document.getElementById("myDIV").style.visibility = "hidden";
            
            document.getElementById("myButton").style.visibility = "visible";
        }
       
        document.getElementById('response').innerHTML = response;

        document.getElementById('precio_final_rotulo').value     = precioFinal.toFixed(2);
        document.getElementById('subTotalPrecio').value          = subTotalprecio.toFixed(2);
        document.getElementById('texto_rotulo').value            = rotulo;
        document.getElementById('fuenteLetrasText').value        = fuenteLetrasText;
        document.getElementById('anchocm').value                 = anchocm;
        
        document.getElementById('alturacm').value                 = alturacm;

        document.getElementById('altocm').value                  = alto;
        document.getElementById('tipoTraseraSumario').value      = tipoTrasera;
        document.getElementById('tipoSujecionSumario').value     = tipoSujecion;
        document.getElementById('tipoDimmerSumario').value       = tipoDimmer;
        document.getElementById('tiempoEntregaSumario').value    = tiemposEntregaText;
        document.getElementById('tipoContornoSumario').value     = contorno;
        document.getElementById('colorSumario').value            = color;
        document.getElementById('pathA').value                   = anchoSVG;
        document.getElementById('pathB').value                   = anchoSVGCorreccion.toFixed(3);

        document.getElementsByName("add-to-cart")[0].style.visibility = 'visible';
    });

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
        document.getElementsByName('grosorChopo')[0].checked = true;
        document.getElementById('divChopo').style.display    = "inline";
        document.getElementById('divMdf').style.display      = "none";
        document.getElementById('divMukaly').style.display   = "none";
        document.getElementById('divPmma').style.display     = "none";    
    };

    materialMdf.onclick = function () {
        textoRadio('materiales','mdf');
        textoRadio('mmGrosor','2.5mm');
        document.getElementsByName('grosorMdf')[0].checked = true;
        document.getElementById('divChopo').style.display    = "none";
        document.getElementById('divMdf').style.display      = "inline";
        document.getElementById('divMukaly').style.display   = "none";
        document.getElementById('divPmma').style.display     = "none";    
    };

    materialMukaly.onclick = function () {
        textoRadio('materiales','mukaly');
        textoRadio('mmGrosor','2mm');
        document.getElementsByName('grosorMukaly')[0].checked = true;
        document.getElementById('divChopo').style.display    = "none";
        document.getElementById('divMdf').style.display      = "none";
        document.getElementById('divMukaly').style.display   = "inline";
        document.getElementById('divPmma').style.display     = "none"; 
    };

    materialPmma.onclick = function () {
        textoRadio('materiales','pmma');
        textoRadio('mmGrosor','2mm');
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
    };
    chopo4mm.onclick = function () {
        textoRadio('mmGrosor','4mm');
    };
    chopo5mm.onclick = function () {
        textoRadio('mmGrosor','5mm');
    };        
    chopo6mm.onclick = function () {
        textoRadio('mmGrosor','6mm');
    };
    chopo8mm.onclick = function () {
        textoRadio('mmGrosor','8mm');
    };
    chopo10mm.onclick = function () {
        textoRadio('mmGrosor','10mm');
    };

    //Grosores Mdf:
    var mdf2pto5mm    = document.querySelector('#mdf2pto5mm');
    var mdf3mm    = document.querySelector('#mdf3mm');
    var mdf4mm    = document.querySelector('#mdf4mm');
    var mdf5mm    = document.querySelector('#mdf5mm');
    var mdf7mm    = document.querySelector('#mdf7mm');
    
    mdf2pto5mm.onclick = function () {
        textoRadio('mmGrosor','2.5mm');
    };
    mdf3mm.onclick = function () {
        textoRadio('mmGrosor','3mm');
    };
    mdf4mm.onclick = function () {
        textoRadio('mmGrosor','4mm');
    };        
    mdf5mm.onclick = function () {
        textoRadio('mmGrosor','5mm');
    };
    mdf7mm.onclick = function () {
        textoRadio('mmGrosor','7mm');
    };

    //Grosores Mukaly:
    var mukaly2mm    = document.querySelector('#mukaly2mm');
    
    mukaly2mm.onclick = function () {
        textoRadio('mmGrosor','2mm');
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
    };
    pmma3mm.onclick = function () {
        textoRadio('mmGrosor','3mm');
    };
    pmma4mm.onclick = function () {
        textoRadio('mmGrosor','4mm');
    };        
    pmma5mm.onclick = function () {
        textoRadio('mmGrosor','5mm');
    };
    pmma6mm.onclick = function () {
        textoRadio('mmGrosor','6mm');
    };  
    pmma8mm.onclick = function () {
        textoRadio('mmGrosor','8mm');
    };
    pmma10mm.onclick = function () {
        textoRadio('mmGrosor','10mm');
    };

    //Alto y Ancho:
    var altura   = document.querySelector('#altura');
    var ancho    = document.querySelector('#ancho');

    altura.onchange = function () {

        validarAlturaAnchura();
    };  

    ancho.onchange = function () {

        validarAlturaAnchura();
       
    };         

});

function validarAlturaAnchura(){

    if(Number(altura.value > 1290)){
        document.getElementById('errorAltoAncho').innerHTML = 'La altura tiene que ser menor de 1290mm';
    }else if(Number(ancho.value > 790)){
        document.getElementById('errorAltoAncho').innerHTML = 'La anchura tiene que ser menor de 790mm';
    }else{
        document.getElementById('errorAltoAncho').innerHTML = '';
    }
}