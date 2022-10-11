//CREAR UN ESCUCHADOR DEL EVENTO DEL BOTON DE INGRESAR(LOGIN)
//Documento Objet Model = cuando se carga el documento
//id = en lado de cliente
//name = lado del servidor
//return = para detener la ejecucion
//break = para pasar a la siguiente ejecucion.
document.addEventListener('DOMContentLoaded', function(){
    configurar();
    })
    
    function configurar(){
        const btnLogin = document.querySelector('#btnLogin');
        btnLogin.addEventListener('click',iniciarSesion);
    }
    //Para traer los datos de input de password y usuario
    //async para que se ejecute de forma parelela
    async function iniciarSesion(){
        const txtUsuario = document.querySelector('#usuario');
        const txtPassword = document.querySelector('#password');
    
        //validar si tienen datos
        if(txtUsuario.value === '' || txtPassword.value === ''){
            alert('Debe completar los datos');
            return;
        }
        //enviar datos del formulario
        const datos = new FormData();
        datos.append("usuario", txtUsuario.value);
        datos.append("password", txtPassword.value);
        datos.append("accion","login");
        const url = "data/auth.php";
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