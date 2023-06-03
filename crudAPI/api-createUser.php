
<?php
$query = '';
$table_data = '';
$data=file_get_contents("php://input");
$array = json_decode($data, true);
$query = '';
$table_data = '';

foreach($array as $row)
{
    $hash_psd = password_hash($row["password"], PASSWORD_DEFAULT);
	$query .= "INSERT INTO users (username, password, isAdmin)VALUES ('".$row["username"]."', '".$hash_psd."','".$row["isAdmin"]."'); "; 
	$table_data .= '
                <tr>
                    <td>'.$row["username"].'</td>
                    <td>'.$row["password"].'</td>
                    <td>'.$row["isAdmin"].'</td>
                </tr>'; // Data for display on Web page
}
$con = mysqli_connect("localhost:3307","root", "","shop_db");

if($con){
    
        $result =mysqli_multi_query($con,$query);
        if($result){

            echo json_encode(array("message"=>" user inserted successfully", "status"=>true));
			 echo '
                <table class="table table-bordered">
                <tr>
                    <th width="45%">username</th>
                    <th width="10%">password</th>
                    <th width="45%">isAdmin</th>
                </tr>
                ';
                echo $table_data;
         }
         else{
            echo json_encode(array("message"=>" failed to insert", "status"=>true));
         }
    }
else
{
    echo "Database connection failed";

}
?>
 