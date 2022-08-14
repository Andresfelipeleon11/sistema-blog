$(document).ready(function(){
    $(document).on('click','#btnPublicar', function(){
        $.ajax({
            url: '../controlador/blogCrear.php',
            type: 'POST',
            data: $('#formPublicar').serialize()
        }).done(function(json){
            $('#publicacion').html('<div class="alert alert-success" role="alert">Publicacion creada correctamente</div>')
            setInterval('window.location.reload()', 1000);
            console.log(json)
          //  location.reload()
        }).fail(function(json){
            console.log('error')
        })
    })
})