<?php

define('PAGINA','');
$PAGINA = new pagina();
//Clase publica donde se agregan propiedades de HEAD
class pagina{
    public $titulo='Página sin nombre';
    public $heads_extend='';
    public function heads_extend($array){
        $return='';
        if(empty($array)||count($array)==0){
            return $return;
        }
        foreach($array as $elementos){
            $this->heads_extend .=$elementos;
        }
    }
    public function heads(){
        global $CFG;
        	$contenido= '<head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                            <meta http-equiv="x-ua-compatible" content="ie=edge">
                            <title>'.$this->titulo.'</title>
                            <!-- favicon -->
                            <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
                            
                            <!-- Font Awesome -->
                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
                            <!-- Google Fonts -->
                            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
                            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
                            <!-- Bootstrap core CSS -->
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
                            <!-- Estilos personalizados-->
                            <link rel="stylesheet"  href="'.$CFG->url.'assets/css/style.css">
                            
                            <!-- jQuery -->
                            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                            <!-- Bootstrap core JavaScript -->
                            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
                            <script type="text/javascript" src="'.$CFG->url.'js/script.js"></script>
                            
                            '.$this->heads_extend.'
      	                 </head>';
        echo $contenido;
    }
    public function header(){
        global $CFG;
        $page = file_get_contents($CFG->url.'layout/header.php');
        return $page;
    }
    public function sidenav(){
        global $CFG;
        $page = file_get_contents($CFG->url.'layout/sidenav.php');
        return $page;
    }
    public function footer(){
        global $CFG;
        $page = file_get_contents($CFG->url.'layout/footer.php');
        return $page;
    }
}