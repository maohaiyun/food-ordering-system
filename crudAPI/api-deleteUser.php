<?php

$data=json_decode(file_get_contents("php://input"),true);

$id=$data["id"];

$con = mysqli_connect("localhost:3307","root", "","shop_db");

if($con){
$sql = "delete from users where id='".$id."' ";
$result =mysqli_query($con,$sql);
if($result){

    echo json_encode(array("message"=>" user deleted successfully", "status"=>true));
 }
 else{
    echo json_encode(array("message"=>" failed to delete", "status"=>true));
 }
}
else
{
    echo "Database connection failed";

}
?>