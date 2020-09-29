<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../Model/Product.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
$data = json_decode(file_get_contents("php://input"));

if (
    empty($data->name) ||
    empty($data->price) ||
    empty($data->description) ||
    empty($data->category_id)
) {
    http_response_code(400);
    echo json_encode(array("message" => "Unable to create product. Data is incomplete."));

    return;
}

$product->name = $data->name;
$product->price = $data->price;
$product->description = $data->description;
$product->category_id = $data->category_id;
$product->created = date('Y-m-d H:i:s');

http_response_code($product->create() ? 201 : 503);
echo json_encode(array("message" => $product->create() ? "Product was created." : "Unable to create product."));

return;
