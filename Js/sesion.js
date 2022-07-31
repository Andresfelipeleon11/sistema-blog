$(document).ready(function(){
   $(document).on('click','#btnSesion', function(){
    $.ajax({
        url: './controlador/sesionCrear.php',
        method: 'POST',
        dataType: 'JSON',
        data: $('#formulario').serialize()
    }).done(function(json){
        console.log('entraste')
        console.log(json)
    }).fail(function(error){
        console.log('error')
    })
   })
})