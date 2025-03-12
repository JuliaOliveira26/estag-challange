<?php

include_once 'index.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

function sendJsonResponse($data, $status = 200){
header("Content-Type: application/json");

http_response_code($status);
echo json_encode($data);
exit;
}

if($uri === '/api/users' && $method === 'GET'){
    $cat = $pdo->query("SELECT * FROM CATEGORIES");
    $CATEGORIES = $cat->fetchAll(PDO::FETCH_ASSOC);
    sendJsonResponse($CATEGORIES);
}
if($uri === '/api/users' && $method === 'GET'){
    $input = json_decode(file_get_contents('php: //input'), true);
    $name = $input ['name'] ?? null;
    $tax = $input ['tax'] ?? null;



if(!name || !tax){
    sendJonResponse(['error' => 'Nome e email são obrigatórios'], 400);
}

$stmt = $pdo->prepare("INSERT INTO categories (name, tax) VALUES (:name, :tax)");
$stmt ->execute([ 'name' => $name, 'email' => $email]);
sendJsonResponde(['message' => 'Usuário criado com sucesso!'], 201);
}

sendJsonResponse(['error' => 'Rota não encontrada'], 404);

