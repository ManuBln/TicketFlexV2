<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode(['error' => 'Invalid JSON']);
        exit;
    }

    if (!isset($data['id'])) {
        echo json_encode(['error' => 'ID not provided']);
        exit;
    }

    $id = $data['id'];
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=ticketflex', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $db->prepare('SELECT * FROM entradas WHERE id = :id');
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        $consulta->execute();
        
        $entrada = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $db = null;
    
        if (count($entrada) > 0) {
            echo json_encode(['respuesta' => 'ok']);
        } else {
            echo json_encode(['respuesta' => 'no']);
        }
    } catch (PDOException $e) {
        error_log('error: ' . $e->getMessage());
        echo json_encode(['error' => ['text' => 'error en la base de datos', 'details' => $e->getMessage()]]);
    }
}
?>
