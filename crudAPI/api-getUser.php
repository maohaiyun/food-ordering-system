<?php

$con = mysqli_connect("localhost:3307","root", "","shop_db");
$response =array();

if($con){
$sql = "select * from users";
$result =mysqli_query($con,$sql);
if($result){
    $x=0;

    while( $row= mysqli_fetch_assoc($result))
    {
        $response[$x]['id'] =$row['id'];
        $response[$x]['username'] =$row['username'];
        $x++;
    }
    echo json_encode($response, JSON_PRETTY_PRINT);
 }
 else{
    echo "Database connection failed";
 }


}

//CREATE done
//DELETE 
//PUT or UPDATE
?>
