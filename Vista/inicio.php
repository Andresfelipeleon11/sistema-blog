<?php
include_once 'menu.php'
?>

<div class="container">
    <div class="row-tarjeta">
        <form id="formPublicar">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Blog</h3>
                </div>
                <div class="card-body">
                    <textarea name="mensaje" id="contenido-blog" cols="70" rows="10" class="form-control"></textarea>
                    <div class="row">
                           &nbsp;
                        <p id="publicacion"></p>
                        &nbsp;
                        <div class="col-md-6">
                            <input type="button" value="Publicar" class="btn btn-primary" id="btnPublicar">
                        </div>
                    </div>
                    <p id="publicacion"></p>
                </div>
            </div>
        </form>
        <script src="../Js/blogPublicar.js"></script>
    </div>
</div>