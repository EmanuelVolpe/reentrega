<?php
    require_once('libs/Smarty.class.php');

    class RegistroView {

        private $smarty;
     
        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
        }

        public function showRegistroView($error = null, $equipos, $jugadores){
            $this->smarty->assign('titulo', 'Registrarme');
            $this->smarty->assign('equipos', $equipos);
            $this->smarty->assign('jugadores', $jugadores);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/registro.tpl');
        }
    }