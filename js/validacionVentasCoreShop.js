var total=0;


$(document).ready(function(){
    $('#sales').bootstrapValidator({
        live:'enabled',//se activa el metodo hey pres con el enable para que vaya leyendo de caracter po caracter introducido. disabled se desactiva.
        submitButtons:'button[id="enter"]',//esta default [type="submit"]
        message:'Este no es un valor v&aacute;lido',
        feedbackIcons:{
           valid:'fa fa-check',
           invalid:'fa fa-close',
           validating:'fa fa-refresh'
        },
        fields:{
            code:{
                validators:{
                    notEmpty:{
                        message:'Code is required.'
                    },
                    stringLegth:{
                        min:4,
                        max:64,
                        message:'The code needs 4 to 64 digits.'
                    },
                    regexp:{
                        regexp:/^[0-9]+$/,
                        message:'The code only admits numbers.'
                    }
                }
            },
            description:{
                validators:{
                    notEmpty:{
                        message:'The description is required.'
                    },
                    
                    regexp:{
                        regexp:/^.+$/,
                        message:'The description only admits letters, numbers and spaces'
                    }
                }
            },
            quantity:{
                validators:{
                    notEmpty:{
                        message:'The quantity is required.'
                    },
                    
                    regexp:{
                        regexp:/^[0-9]+$/,
                        message:'The quantity only admits numbers'
                    }
                }
            },
            prize:{
                validators:{
                    notEmpty:{
                        message:'The prize is required.'
                    },
                    
                    regexp:{
                        regexp:/^[0-9]+\.[0-9]{2}$/,
                        message:'The prize only admits numbers followed by a period followed by a two digit number'
                    }
                }
            }
        }
        });
    });

function inicio_tabla() {
  // Obtener la referencia del elemento body
  var body = document.getElementsByName("cuerpo")[0];
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");
 //var array=["Code","Description","Quantity","Prize"];

//var inputs = document.getElementsByTagName("input");

  // Crea las celdas
  for (var i = 0; i < 1; i++) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
    
 
    for (var j = 0; j < 4; j++) {
        
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda = document.createElement("td");
      var textoCelda = document.createTextNode("blablVLafdg");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
      
    }
 
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera);
  }
 
  // posiciona el <tbody> debajo del elemento <table>
  tabla.appendChild(tblBody);
  // appends <table> into <body>
  body.appendChild(tabla);
  // modifica el atributo "border" de la tabla y lo fija a "2";
  tabla.setAttribute("border", "2");
  
}

function genera_tabla() {
  // Obtener la referencia del elemento body
  var body = document.getElementsByName("cuerpo")[0];
 
  // Crea un elemento <table> y un elemento <tbody>
  var tabla   = document.createElement("table");
  var tblBody = document.createElement("tbody");
 //var array=["Code","Description","Quantity","Prize"];

//var inputs = document.getElementsByTagName("input");
/*if(bandera>0){}
else{
for (var a = 0; a < 1; a++) {
    // Crea las hileras de la tabla
    var hilera1 = document.createElement("tr");
 
    for (var b = 0; b < 4; b++) {
        
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda1 = document.createElement("td");
      var textoCelda1 = document.createTextNode(document.getElementsByTagName("input")[b].value);
      celda.appendChild(textoCelda1);
      hilera1.appendChild(celda1);
      
    }
 
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera1);
  }
  bandera++;
}
*/
  // Crea las celdas
  for (var i = 0; i < 1; i++) {
    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
 
    for (var j = 0; j < 4; j++) {
        
      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
      // texto sea el contenido de <td>, ubica el elemento <td> al final
      // de la hilera de la tabla
      var celda = document.createElement("td");
      var textoCelda = document.createTextNode(document.getElementsByTagName("input")[j].value);
        celda.setAttribute("size","40");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
      
    }
 
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(hilera);
  }
 
  // posiciona el <tbody> debajo del elemento <table>
  tabla.appendChild(tblBody);
  // appends <table> into <body>
  body.appendChild(tabla);
  // modifica el atributo "border" de la tabla y lo fija a "2";
  tabla.setAttribute("border", "2");

  
}