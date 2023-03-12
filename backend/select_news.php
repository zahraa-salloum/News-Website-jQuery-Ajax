<?php

header("Access-Control-Allow-Origin: *");
include('connection.php');

$response['status'] = "Something went wrong";

$query = $mysqli->prepare('select * from news');
$query->execute();
$query->store_result();
$num_rows = $query->num_rows();
$query->bind_result($id,$title, $content, $date);
$response = [];

// echo $query;
if ($num_rows == 0) {
    $response['response'] = "no hospitals";
} else {
    while ($query->fetch() && $num_rows !== 0)  {
        $data = array(
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'date' => $date
            );
            array_push($response, $data);
}
}

echo json_encode($response);