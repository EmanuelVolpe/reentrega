<?php
require_once("models/comentario.model.php");
require_once("api/json.view.php");

class ComentarioApiController {

    private $model;
    private $view;
    private $data;

    public function __construct() {
        $this->model = new ComentarioModel();
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
    }

    private function getData() {
        return json_decode($this->data);
    }

    public function  getComentarios($params = null) {
        //por POST
        //$id = $params[':ID'];

        $id = $_GET['idJugador'];
        //if ($id){ 
        $comentarios = $this->model->getAll($id);
            if ($comentarios)
                $this->view->response($comentarios, 200); 
            else
                $this->view->response("El jugador con id={$id} no tiene comentarios", 404);
  
    }


    public function deleteComentario($params = null) {
        $id = $params[':ID'];
        $comentario = $this->model->get($id);
        if ($comentario) {
            $this->model->delete($id);
            $this->view->response("El comentario fue borrado con exito.", 200);
        } else
            $this->view->response("El comentario con el id={$id} no existe", 404);
    }

    public function crearComentario($params = null) {  
        $data = $this->getData();

        $id = $this->model->save($data->comentario, $data->puntaje, $data->id_jugador_fk, $data->id_usuario_fk);
        
        $comentario = $this->model->get($id);
        if ($comentario)
            $this->view->response($comentario, 200);
        else
            $this->view->response("El comentario no fue creado", 500);

    }
    

}