<?php
include_once 'menu.php'
?>

<div class="container">
    <div class="row-tarjeta">
        <form id="formPublicar">
            <div class="card">
                <div class="card-header">
                    <h3>Blog</h3>
                </div>
                <div class="card-body">
                    <textarea name="mensaje" id="" cols="70" rows="10"></textarea>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="button" value="Publicar" class="btn btn-primary" id="btnPublicar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="../Js/blogPublicar.js"></script>
    </div>
</div>