$(document).ready(function(){
    $(document).on('click','#btnPublicar', function(){
        blog = $('#contenido-blog').val();
        if(blog == ''){
            alert('El blog no puede estar vacio');
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
})