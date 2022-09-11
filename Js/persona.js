$(document).ready(function(){
    $(document).on('click', '#btnRegistrar', function(){
        nombre = $('#nombre').val();
        apellido = $('#apellido').val();
        usuario=  $('#usuario').val('')
        contrasena = $('#contrasena').val('');
        if(nombre == '' || apellido == '' || usuario == '' || contrasena == ''){
           $('#mensaje').html('<div class="alert alert-danger" role="alert">Tienes que completar todos los campos</div>')
           setInterval('window.location.reload()',1000)
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