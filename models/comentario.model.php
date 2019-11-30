<?php

class ComentarioModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_Especial;charset=utf8', 'root', '');
    }

    public function get($idComentario){
        $query = $this->db->prepare('SELECT * FROM comentario WHERE id_comentario = ?');
        $query->execute(array($idComentario));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Obtiene la lista de comentarios ordenando alfabeticamente por puntaje.
     */
    public function getAll($idJugador) {

        $query = $this->db->prepare('SELECT * FROM comentario WHERE id_jugador = ? ORDER BY puntaje');
        $query->execute(array($idJugador));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Guarda un comentario en la base de datos.
     */
    public function save($comentario, $puntaje, $idJugador, $idUsuario) {

        $query = $this->db->prepare('INSERT INTO comentario(comentario, puntaje, id_jugador, id_usuario) VALUES(?,?,?,?)');
        $query->execute([$comentario, $puntaje, $idJugador, $idUsuario]);
        return $this->db->lastInsertId();
    }

    /**
     * Elimina un comentario de la BBDD según el id pasado.
     */
    function delete($idComentario) {

        $query = $this->db->prepare('DELETE FROM comentario WHERE id_comentario = ?');
        $query->execute([$idComentario]);
    }

}
