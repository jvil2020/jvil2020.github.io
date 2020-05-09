<?php
require_once('config.php');
require_once('lib/lib.php');
$PAGINA->titulo='Paleo`s Restaurant - Contáctenos';
$PAGINA->heads();
echo $PAGINA->header();
echo $PAGINA->sidenav();
echo $PAGINA->footer();?>

<section class="content bg_body h-100">
    
    <div class="d-flex col-9 mx-auto flex-column mb-100">
        <div class="col-6 mx-auto mb-2">
            <h1 class="titulo">CONTÁCTENOS</h1>
        </div>
        <h5>
            Queremos estar más cerca de ti, y para ello ponemos a tu disposición los 
            siguientes canales de comunicación:
        </h5>

        <div class="d-flex">
            <table class="font-peq">
                <tr>
                    <td>Dirección:</td>
                    <td><img class="img-fluid icono-sm" src="<?=$CFG->url?>assets/img/icono-pos.png" alt=""></td>
                    <td class="pl-2">Estamos ubicados en: <b>CALLE 08 SUR #71C-15</b>.</td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td><img class="img-fluid icono-sm" src="<?=$CFG->url?>assets/img/icono-gm.png" alt=""></td>
                    <td class="pl-2 bold">Paleo's@gmail.com</td>
                </tr>
                <tr>
                    <td>Domicilios:</td>
                    <td><img class="img-fluid icono-sm" src="<?=$CFG->url?>assets/img/icono-ws.png" alt=""></td>
                    <td class="pl-2 bold">320 - 000.11.22</td>
                </tr>
            </table>
        </div>

        <div class="content_flotante col-7 mx-auto my-4">
            <h3 class="font-med bold">¿ DOMICILIOS ?</h3>
            <h3 class="font-big bold">320 - 000.11.22</h3>
            <h3>No olvides agréganos a tus contactos para estar al día de nuestras ofertas.</h3>
        </div>
        
    </div>

</section>

