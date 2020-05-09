<?php
require_once('config.php');
require_once('lib/lib.php');
$PAGINA->titulo='Paleo`s Restaurant - Contáctenos';
$PAGINA->heads();
echo $PAGINA->header();
echo $PAGINA->sidenav();
echo $PAGINA->footer();?>

<section class="content h-100">
    
    <div class="d-flex col-11 mx-auto flex-column bg_body mb-100">
        <div class="col-6 mx-auto mb-2">
            <h1 class="titulo">NUESTRO MENÚ</h1>
        </div>
        
        <div class="col d-flex flex-wrap mt-5">
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="carnes" src="<?=$CFG->url?>assets/img/carta/picada_mixta_familiar.png" alt="">
                <h5 class="bold mt-1">CARNES</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="pollos" src="<?=$CFG->url?>assets/img/carta/pechuga_champ.jpg" alt="">
                <h5 class="bold mt-1">POLLOS</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="pescados" src="<?=$CFG->url?>assets/img/carta/mojarra_frita.png" alt="">
                <h5 class="bold mt-1">PESCADOS</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="mariscos" src="<?=$CFG->url?>assets/img/carta/arroz_marinera.png" alt="">
                <h5 class="bold mt-1">MARISCOS</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="menu_dia" src="<?=$CFG->url?>assets/img/carta/ajiaco.jpg" alt="">
                <h5 class="bold mt-1">MENÚ DEL DÍA</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="bandeja" src="<?=$CFG->url?>assets/img/carta/bandeja_paisa.png" alt="">
                <h5 class="bold mt-1">BANDEJA PAISA</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="hambur" src="<?=$CFG->url?>assets/img/carta/hamburguesa_perro.png" alt="">
                <h5 class="bold mt-1">HAMBURGUESAS Y PERROS CALIENTES</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="kids" src="<?=$CFG->url?>assets/img/carta/arroz_pollo.png" alt="">
                <h5 class="bold mt-1">MENÚ INFANTIL</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="combos" src="<?=$CFG->url?>assets/img/carta/picada_familiar.jpg" alt="">
                <h5 class="bold mt-1">COMBOS FAMILIARES</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="plus" src="<?=$CFG->url?>assets/img/carta/mazorcada_combo.png" alt="">
                <h5 class="bold mt-1">ADICIONALES</h5>
            </div>
            <div class="col-6 d-flex mb-5 align-items-center">
                <img class="img-fluid b-radius2 img-carta" data-categ="drinks" src="<?=$CFG->url?>assets/img/carta/bebidas.png" alt="">
                <h5 class="bold mt-1">BEBIDAS</h5>
            </div>
        </div>        
        
        
    </div>

</section>



<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
<div class="domicilios py-3 px-1">
    <div class="d-flex flex-wrap">
        <h5 class="mr-3">DOMICILIOS <br>  $4.000 + Plato </h5>
        <img class="img-fluid icono-sm" src="<?=$CFG->url?>assets/img/icono-viber.png" alt="...">
        <img class="img-fluid icono-sm" src="<?=$CFG->url?>assets/img/icono-ws.png "alt="...">
    </div>
    <h4 class="">320 - 000.11.22</h4>
</div>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-mesa_claro">
      <div class="modal-header border-0 p-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img class="img-fluid" src="<?=$CFG->url?>assets/img/icono_cerrar2.png" alt="">
        </button>
      </div>
      <div class="modal-body pt-0">
        <div id="">
            <div id="carousel_carta" class="carousel slide carousel_modal d-flex" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target=".carousel" data-slide-to="0" class="active"></li>
                </ol>
                <div class="carousel-inner h-auto my-auto">
                    
                    <div class="carousel-item mb-3 active" data-interval="6000">
                        <div class="carousel-title mx-auto bg-obscure col-6 h-100 p-5">
                            <h3 class="font-peq p-0 text-center titulo m-0 text-uppercase line-h">
                            No hay platos para mostrar en esta categoría.
                            </h3>
                        </div>
                    </div>
        
                </div>
                <a class="carousel-control-prev" href=".carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href=".carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

