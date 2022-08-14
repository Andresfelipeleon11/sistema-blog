$(document).ready(function(){
    $(document).on('click','#btnPublicar', function(){
        $.ajax({
            url: '../controlador/blogCrear.php',
            type: 'POST',
            data: $('#formPublicar').serialize()
        }).done(function(json){
            console.log('publicado')
            console.log(json)
          //  location.reload()
        }).fail(function(json){
            console.log('error')
        })
    })
})