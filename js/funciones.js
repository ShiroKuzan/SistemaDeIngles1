/*
 * funciones varias para aprendizaje de Javascript (JS)
 *
 */
function agregaTexto(){
    
    var aMeta=document.getElementsByTagName('meta');
    var oPrueba=document.getElementById('prueba');
    oPrueba.innerHTML='Existen '+aMeta.length+' etiquetas meta';
    oPrueba.style.color='#ff0';
 
}

function creaTabla(nRenglon=4,nColumnas=3) {
  var oContenedor = document.getElementById('divTabla');
  // limpia div
   oContenedor.innerHTML='';
  var tabla   = document.createElement('table');
  var tblBody = document.createElement('tbody');
 
  // Crea las registros
  for (var i = 0 ; i < nRenglon; i++) {
   
    var registro = document.createElement('tr');
    // Crea las columnas de cada registro de la tabla
    for (var j = 0; j < nColumnas; j++) {
      var columna = document.createElement('td');
    // columna.style.border='1px solid #0ff';
      // Crea Nodos Texto y agrega a columna y esta al registro
      var textoCelda = document.createTextNode('R'+(i+1)+', C'+(j+1));
      columna.appendChild(textoCelda);
      registro.appendChild(columna);
    } // fin de for j
 
    // agrega el registro al final de la tabla (al final del elemento tblbody)
    tblBody.appendChild(registro);
  } // fin de for i
 
  // posiciona el <tbody> dentro del elemento <table>
  tabla.appendChild(tblBody);
  // posicionamos <table> dentro de  <div>
 
  oContenedor.appendChild(tabla);
  
  //tabla.style.borderCollapse='collapse';
  //tabla.style.border='1px solid #0ff';
  tabla.className="datos";
  
  
} // fin de funcion creaTabla

function borraTabla(){
    var oTabla=document.getElementsByTagName('table');
    oTabla[0].parentNode.removeChild(oTabla[0]);
  
}

 function apareceDiv() {
      var oDiv = document.getElementById("mensaje");
      if (oDiv.classList.contains("error")) {
        oDiv.classList.remove("error");
      } else {
        oDiv.classList.add("error");
      }
    }