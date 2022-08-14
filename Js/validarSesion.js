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

        $(document).on('click','#cerrarSesion', function(){
            $.ajax({
                url: '../controlador/sesionEliminar.php',
                method: 'POST',
                dataType: 'JSON',
                data: null
            }).done(function(json){
                if (json==1){
                    window.location = '../index.html';
                    alert('Sesión cerrada');
                }
                else{
                    console.log("ERROR AL CERRAR SESION");
                    window.location = '../index.html';
                }
            }).fail(function(error){
                console.log(error);
            })
        })
})