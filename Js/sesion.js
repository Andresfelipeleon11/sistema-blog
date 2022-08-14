$(document).ready(function(){
   $(document).on('click','#btnSesion', function(){
    
    $.ajax({
        url: './Controlador/sesionCrear.php',
        method: 'POST',
        dataType: 'JSON',
        data: $('#formulario').serialize()
    }).done(function(json){
        console.log('entraste')
        console.log(json)
    if(json !=0){
        json.forEach(element => {
            window.location =  "vista/inicio.php";
            alert('bienvenido '+element.nombre)
        });
    }
    else{
       $('#mensaje').html('<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>')
       setInterval('window.location.reload()', 1000);
    }
    }).fail(function(error){
        console.log('error')
    })
   })
})