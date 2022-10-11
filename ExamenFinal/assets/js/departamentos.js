//Para creacion de funcion de mostrar las tablas
//DOMContentLoaded :  cuando carga contenido de la pagina
document.addEventListener('DOMContentLoaded', function(){
    //el metodo la cual se va ejecutar
    iniciar();
})

function iniciar(){
    obtenerDepartamentos();
}
function Agregar(){
    agregarDepartamentos();
}
//como va a la base de datos que se ejecute de forma paralela
async function obtenerDepartamentos(){
    //enviar a la ruta un parametro de get que es lo que recibe el direccionamiento
    const url = "data/departamento.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    //validamos el mensaje que se resive
    if(resultado.codigo === 200){
        const data = resultado.data;
        let html ="";
        data.forEach(departamento => {
            html += "<tr>";
            html += "<td>" + departamento.id + "</td>";
            html += "<td>" + departamento.titulo + "</td>";
            html += "<td>" + departamento.precio + "</td>";
            html += "<td>" + departamento.descripcion + "</td>";
            html += "<td>" + departamento.habitaciones + "</td>";
            html += "<td>" + departamento.estacionamiento + "</td>";
            html += "</tr>"
        });

        const tabla = document.querySelector("#tblData");
        //se llama asi por ser una propiedad
        tabla.innerHTML = html;
    }
}

async function agregarDepartamentos(){
    const txtTitulo = document.querySelector('#titulo');
    const txtPrecio = document.querySelector('#precio');
    const txtDescripcion = document.querySelector('#descripcion');
    const txtHabitaciones = document.querySelector('#habitaciones');
    const txtEstacionamiento = document.querySelector('#estacionamiento');
   
    //enviar datos del formulario
    const datos = new FormData();
    datos.append("titulo", txtTitulo.value);
    datos.append("precio", txtPrecio.value);
    datos.append("descripcion", txtDescripcion.value);
    datos.append("habitaciones", txtHabitaciones.value);
    datos.append("estacionamiento", txtEstacionamiento.value);
    datos.append("accion","agregar");
    const url = "data/agregar.php";
    //Enviar a la url todos los datos guardados
    //await : Realizar un espera de lo pedido
    const respuesta = await fetch(url,{
        method: 'POST',
        body: datos
    })
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
        window.location = "departamentos.php";
    }else{
        alert(resultado.mensaje);
    }
    
}