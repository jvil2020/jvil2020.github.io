<?php
require_once('../config.php');
//global $CFG;
?>
<!-- Sidebar navigation -->
<div id="sidenav" class="side-nav fixed">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="logo-wrapper">
        <a href="<?=$CFG->url?>"><img src="<?=$CFG->url?>assets/img/logo_rectangulo.png"
            class="img-fluid flex-center"></a>
      </div>
    </li>
    <!--/. Logo -->
   
    <!-- Side navigation links -->
    <li>
      <ul class="accordion" id="accordion_sidenav">
        <li id="index"> 
          <a data-toggle="collapse" data-target="#ini_colap" aria-expanded="false" data-url="<?=$CFG->url?>index.php"> 
            Inicio 
          </a> 
          <div id="ini_colap" class="collapse hide" data-parent="#accordion_sidenav"></div>
        </li>
        <li id="nosotros"> 
          <a data-toggle="collapse" data-target="#nosot_colap" aria-expanded="false" data-url="<?=$CFG->url?>nosotros.php"> 
            Nosotros 
          </a> 
          <div id="nosot_colap" class="collapse hide" data-parent="#accordion_sidenav"></div>
        </li>
        <li id="contacto"> 
            <a data-toggle="collapse" data-target="#nosot_contac" aria-expanded="false" data-url="<?=$CFG->url?>contacto.php"> 
                Contáctenos
              <i class="fas fa-angle-down rotate-icon"></i>
            </a>
            <div id="nosot_contac" class="collapse hide" data-parent="#accordion_sidenav">
              <ul>
                <li><a href="#" class="waves-effect">FAQ</a>
                </li>
              </ul>
            </div>
        </li>
        <li id="carta"> 
            <a data-toggle="collapse" data-target="#carta_colap" aria-expanded="false" data-url="<?=$CFG->url?>carta.php"> 
              Nuestro Menú
              <i class="fas fa-angle-down rotate-icon"></i>
            </a>
            <div id="carta_colap" class="collapse hide" data-parent="#accordion_sidenav">
              <ul>
                <li> <a href="#" class="waves-effect">Carnes</a> </li>
                <li> <a href="#" class="waves-effect">Pescado</a> </li>
                <li> <a href="#" class="waves-effect">Pollo</a> </li>
              </ul>
            </div>
        </li>

      </ul>
    </li>
    <!--/. Side navigation links -->

      <!-- URL -->
      <li id="site_url">
          <a href="<?=$CFG->url?>">www.paleosrestaurant.com</a>
      </li>
    <!--/. URL -->
  </ul>
  <div class="sidenav-bg rgba-blue-strong"></div>
</div>
<!--/. Sidebar navigation -->