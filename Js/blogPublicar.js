$(document).ready(function(){
    listarPublicaciones();
    $(document).on('click','#btnPublicar', function(){
        blog = $('#contenido-blog').val();
        if(blog == ''){
            $('#publicacion').html('<div class="alert alert-danger" role="alert">Usuario ingrese contenido en el blog</div>')
            setInterval('window.location.reload()', 1000);
            return false;
        }
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

    function listarPublicaciones(){
        $.ajax({
            url: '../controlador/listarMensajes.php',
            method: 'POST',
            dataType : 'JSON',
            data: $('#mensajes').serialize()
        }).done(function(json){
           console.log(json)
           var tabla 
           json.forEach(Element => {
                tabla += '<tr>'+
                '<td>'+Element.mensaje+'</td>'
           })
            $('#tabla-persona').html(tabla);
        })
    }
})