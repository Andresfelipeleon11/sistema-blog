$(document).ready(function(){
    $(document).on('click', '#btnRegistrar', function(){
        nombre = $('#nombre').val();
        apellido = $('#apellido').val();
        usuario=  $('#usuario').val('')
        contrasena = $('#contrasena').val('');
        if(nombre == '' || apellido == '' || usuario == '' || contrasena == ''){
            alert('Por favor llene todos los campos');
            return false;
        }
        $.ajax({
            url: './controlador/registrarPersona.php',
            type: 'POST',
            data: $('#frmPersona').serialize()
        }).done(function(json){
            console.log(json);
            alert('registrado correctamente');
            location.href = './index.html';
        }).fail(function(json){
            alert('error')
            console.log(json);
        })
    })
})