<?php
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode(['success' => true, 'message' => 'Autenticação simulada']);
    return;
}
http_response_code(405);
echo json_encode(['error' => 'Método não permitido']);
