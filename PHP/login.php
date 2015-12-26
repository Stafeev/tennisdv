<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
require_once('mysql_connect.php');

$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

$response = @mysqli_query($dbc, $query);

$query = "select password from Admin where username='".$username."'";
$response = @mysqli_query($dbc, $query);
if($response){
    $list = array();
    while($row = mysqli_fetch_array($response)){
        $hash = $row['password'];
    }
}
else{
    echo "query failed";
}
if ($password==$hash)) {
    echo 'success';
} else {
    echo 'fail';
}

?>