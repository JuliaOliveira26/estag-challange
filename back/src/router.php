<?php
header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_METHOD"];

require = "index.php";

if ($metodo === "GET") {
    require "rotas/get_usuarios.php";
} elseif ($metodo === "POST") {
    require "rotas/post_usuario.php";
} else {
    echo json_encode(["erro" => "Método não permitido"]);
}
?>
