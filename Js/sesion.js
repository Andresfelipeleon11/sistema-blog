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
        window.location =  "vista/inicio.php";
        alert('bienvenido')
    }
    else{
        alert('error')
    }
    }).fail(function(error){
        console.log('error')
    })
   })
})