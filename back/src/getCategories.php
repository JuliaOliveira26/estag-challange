<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require "index.php"

$category = "SELECT id, category, tax FROM categories";
$result = $conn->query($category)

$categories = [];

while($row = $result->fetch_assoc()){
    $categories[] = $row;
}
echo json_encode($categories)