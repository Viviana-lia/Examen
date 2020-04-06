var nombre="johan";
var altura=180;
 /*
var concatenacion= nombre+ " " + altura;

 var datos =document.getElementById("datos");

datos.innerHTML = `
<h1> caja de texto </h1>
<h2>mi nombre es: ${nombre}</h2>
<h3>mido: ${altura} cm</h3>

`;

if(altura>=190){
    datos.innerHTML += '<h1> persona alta </h1>';

}else{
        datos.innerHTML += '<h1> persona baja </h1>';    
}

for (i=2000; i<=2020; i++){
    //bloque intrucciones
    datos.innerHTML += "<h2> el año es:"+i;
}
*/

function muestraminombre(nombre, altura){
    var datos =document.getElementById("datos");

    datos.innerHTML = `
    <h1> caja de texto </h1>
    <h2>mi nombre es: ${nombre}</h2>
    <h3>mido: ${altura} cm</h3>
    `;
}

muestraminombre("johan carriel i", 200);

var nombre= ["johan", "jahir", "mimi"];
alert(nombre[2]);