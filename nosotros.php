<?php
require_once('config.php');
require_once('lib/lib.php');
$PAGINA->titulo='Paleo`s Restaurant - Nosotros';
$PAGINA->heads();
echo $PAGINA->header();
echo $PAGINA->sidenav();
echo $PAGINA->footer();?>

<section class="content ppal bg_body">
    
    <div class="d-flex col-9 mx-auto flex-column mb-100">
        <div class="col-6 mx-auto mb-2">
            <h1 class="titulo">QUIENES SOMOS</h1>
        </div>

        <div class="d-flex">
            <div class="col-6 d-flex justify-content-center p-3 align-items-start">
                <img class="img-fluid" src="<?=$CFG->url?>assets/img/logo_ovalado.png" alt="">
            </div>
            <div class="col-6 p-3 text-justify">
            <h4 class="mb-3 bold font-italic"> Paleo's <h4> es un restaurant
                
            <h5> Descripcion del restaurant 
                Lorem ipsum dolor sit amet consectetur adipiscing elit non morbi congue, duis tempor dapibus est sed

                Nuestra  gente, nuestro personal bla bla bla

                Ante mus convallis scelerisque mi mollis sociis, consequat proin ullamcorper per et sagittis tellus nullam
            </h5>
                
            </div>
        </div>

        
    </div>

</section>

