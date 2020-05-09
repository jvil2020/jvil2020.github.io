<?php
require_once('config.php');
require_once('lib/lib.php');
$PAGINA->titulo='Paleo`s  Restaurant';
$PAGINA->heads();
echo $PAGINA->header();
echo $PAGINA->sidenav();
echo $PAGINA->footer();?>

<section class="content ppal bg_body">
    <h1 class="titulo">LO MÁS PEDIDO</h1>

    <div id="carouselPpal" class="carousel slide carousel-fade mb-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselPpal" data-slide-to="0" class="active"></li>
            <li data-target="#carouselPpal" data-slide-to="1"></li>
            <li data-target="#carouselPpal" data-slide-to="2"></li>
            <li data-target="#carouselPpal" data-slide-to="3"></li>
            <li data-target="#carouselPpal" data-slide-to="4"></li>
            <li data-target="#carouselPpal" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="4000">
                <div class="col-8 mx-auto">
                    <img class="h-100 w-auto b-radius p-3" src="<?=$CFG->url?>assets/img/madre2020.png"alt="...">
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <div class="">
                    <div class="carousel-content-msj col-9 bg-obscure">
                        <div class="h-100 d-flex flex-column justify-content-center">
                            <h3 class="font-med">DOMICILIOS</h3>
                            <div class="d-flex align-items-center justify-content-around mb-2">
                                <img class="img-fluid icono" src="<?=$CFG->url?>assets/img/icono-viber-white.png"alt="...">
                                <h3 class="font-big bold col-7">320 - 000.11.22</h3>
                                <img class="img-fluid icono" src="<?=$CFG->url?>assets/img/icono-ws-white.png"alt="...">
                            </div>
                            <h3>
                                Atendemos pedidos por llamadas y WhatsApp
                            </h3>
                            
                            <div>
                                <h5>
                                    Zona de cobertura 2km de nuestra ubicación.<br>
                                    Horario de Atención: de 10:00am a 06:00pm <br>
                                    Todos los días de la semana
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <div class="">
                    <div class="carousel-title">
                        <h3>PICADA MIXTA FAMILIAR</h5>
                    </div>
                    <div class="carousel-content col-9">
                        <img class="img-fluid b-radius col-8" src="<?=$CFG->url?>assets/img/carne3.jpg"alt="...">
                        <div class="carousel-descripcion col-4">
                            <div class="h-100 d-flex flex-column justify-content-center">
                                <p class="font-peq">
                                    Carne de Res, 
                                    Chigüiro, Cerdo, 
                                    Costillas de Cerdo
                                    Papas saladas, Plátano, Guacamole
                                </p>
                                <br>
                                <p class="font-peq">Precio: $ 30.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <div class="">
                    <div class="carousel-title">
                        <h3>AJIACO</h5>
                    </div>
                    <div class="carousel-content col-9">
                        <img class="img-fluid b-radius col-8" src="<?=$CFG->url?>assets/img/ajiaco.jpg"alt="...">
                        <div class="carousel-descripcion col-4">
                            <div class="h-100 d-flex flex-column justify-content-center">
                                <p class="font-peq">
                                    Pollo en Salsa, Arroz blanco,
                                    Ensalada,
                                    Tajada,
                                    Aguacate,
                                    Papa salada
                                </p>
                                <br>
                                <p class="font-peq">Precio: $ 12.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000"> 
                <div class="">
                    <div class="carousel-title">
                        <h3>SANCOCHO DE PESCADO</h5>
                    </div>
                    <div class="carousel-content col-9">
                        <img class="img-fluid b-radius col-8" src="<?=$CFG->url?>assets/img/sancocho.jpg"alt="...">
                        <div class="carousel-descripcion col-4">
                            <div class="h-100 d-flex flex-column justify-content-center">
                                <p class="font-peq">
                                    Bagre en Salsa, Arroz blanco,
                                    Ensalada,
                                    Tajada,
                                    Aguacate,
                                    Papa salada
                                </p>
                                <br>
                                <p class="font-peq">Precio: $ 12.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-interval="4000">
                <div class="">
                    <div class="carousel-content-msj col-9 bg-obscure">
                        <div class="h-100 d-flex flex-column justify-content-center">
                            <h3 class="font-med">COBERTURA Y FORMAS DE PAGO</h3>
                            <div class="py-3 px-4">
                                <h5> Actualmente nuestros domiciliarios cubren 2km a la redonda, a partir de nuestro punto de ubicación.</h5>
                                <h3 class="my-3">Aceptamos pagos en <b class="font-italic">Efectivo</b> y <b class="font-italic">Transferencia Bancaria</b> de: Bancolombia y Caja Social.</h3>
                                <h5> Para transferencias solicitar la cuenta a nuestros teléfonos o whatsapp, y una vez realizada, enviar confirmación de la misma.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselPpal" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPpal" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

