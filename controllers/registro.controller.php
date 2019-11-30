<?php
include_once('./helpers/auth.helper.php');
include_once('./views/login.view.php');
include_once('./views/registro.view.php');
include_once('./views/usuario.view.php');
include_once('./models/user.model.php');
include_once('./models/equipo.model.php');
//include_once('./models/jugador.model.php');

class RegistroController {

    private $view;
    private $userView;
    private $model;
    private $authHelper;
    private $equipoModel;

    public function __construct() {
        $this->view = new RegistroView();
        $this->userView = new UsuarioView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
        $this->equipoModel= new EquipoModel();
    }

    public function showRegistro() {
        $jugadores = $this->equipoModel->getJugadoresConDetalle();
        $equipos = $this->equipoModel->getAllEquipos();
        $this->view->showRegistroView($error = null, $equipos, $jugadores);
    }

    public function registrarUsuario() {
        $jugadores = $this->equipoModel->getJugadoresConDetalle();
        $equipos = $this->equipoModel->getAllEquipos();
        $usernameRegistro = $_POST['usernameRegistro'];
        $passwordRegistro = $_POST['passwordRegistro'];
        //var_dump($usernameRegistro);
        //var_dump($passwordRegistro);
        

        if(($usernameRegistro == '') || ($passwordRegistro == ''))
            $this->view->showRegistroView("Faltan datos en su Registro", $equipos, $jugadores);
            
        if(($usernameRegistro != '') && ($passwordRegistro != '')){    
            $hash = password_hash($passwordRegistro, PASSWORD_DEFAULT);
            $this->model->agregaUsuario($usernameRegistro, $hash);
    
            $user = $this->model->getByUserName($usernameRegistro);
            $this->authHelper->login($user);
    
            header("Location: " . BASE_URL . "verEquipos");
        }
    }
    

}