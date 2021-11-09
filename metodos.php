<?php
include './dataBase.php';

class Metodos extends DataBase{

    function getMethod() {
        if (isset($_GET['id'])) {
            $dato=$this->getOne('studentdetailstable',$_GET['id']);
            if($dato){
                header('HTTP/1.1 200 OK');
                echo json_encode($dato);
            }
            else {
                header('HTTP/1.1 404 Not Found');
                echo json_encode(array('error'=>'No existe el alumno'));
            }
        }
        else {
            $datos=$this->getAll('studentdetailstable');
            if ($datos) {
                header('HTTP/1.1 200 OK');
                echo json_encode($datos);
            }
            else {
                header('HTTP/1.1 404 Not Found');
                echo json_encode(array('error' => 'No hay datos'));
            }
        }
    }

    function postMethod() {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['nombre'] && $data['clase'] && $data['numero'] && $data['email']) {
            $this->insert('studentdetailstable', $data);
            header('HTTP/1.1 200 OK');
            echo json_encode(array('mensaje' => 'Alumno creado'));
        }
        else {
            header('HTTP/1.1 400 Bad Request');
            echo json_encode(array('error' => 'No se han recibido los datos correctamente'));
        }
    }

    function putMethod() {
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['id'] && $data['nombre'] && $data['clase'] && $data['numero'] && $data['email']) {
            $this->update('studentdetailstable', $data);
            header('HTTP/1.1 200 OK');
            echo json_encode(array('mensaje' => 'Alumno actualizado'));
        }
        else {
            header('HTTP/1.1 400 Bad Request');
            echo json_encode(array('error' => 'No se han recibido los datos correctamente'));
        }
    }

    function delete() {
        if (isset($_GET['id'])) {
            $this->deleteMethod('studentdetailstable', $_GET['id']);
            header('HTTP/1.1 200 OK');
            echo json_encode(array('mensaje' => 'Alumno eliminado'));
        }
        else {
            header('HTTP/1.1 400 Bad Request');
            echo json_encode(array('error' => 'No se ha recibido el id'));
        }
    }
}

?>