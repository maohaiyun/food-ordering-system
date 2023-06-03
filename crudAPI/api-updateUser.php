<?php
header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);
$id = $data["id"];
$username = $data["username"];
$password = $data["password"];
$isAdmin = $data["isAdmin"];


$con = mysqli_connect("localhost:3307", "root", "", "shop_db");
if ($con) {
    $hash_psd = password_hash($password, PASSWORD_DEFAULT);
    $sql = "update users set username='".$username."', password='".$hash_psd."', isAdmin='".$isAdmin."' where id = '". $id ."' ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo json_encode(array("message" => "User Updated Successfully", "status" => true));
    } else {
        echo json_encode(array("message" => "User Updated Failed", "status" => false));
    }
} else {
    echo "connection failed";
}
