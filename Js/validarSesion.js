$(document).ready(function(){
    validarSesion();

    function validarSesion(){
        $.ajax({
            url: '../controlador/sesionBuscar.php',
            method: 'POST',
            dataType: 'JSON',
            data: null
        }).done(function(json){
            if (json==0){
                window.location.href = './index.html';
            }
        }).fail(function(){})
    }

})