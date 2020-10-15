<?php
$conn = mysqli_connect('localhost', 'root', '', 'theeye');


$result = mysqli_query($conn, "SELECT * FROM tracking");

$data = array();
while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);

?>