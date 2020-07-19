<?php
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $jenis_surat = $_POST['jenis_surat'];
    $id_surat = $_POST['id_surat'];

 	require_once("connect.php");
  
		$query = "UPDATE jenis_surat SET jenis_surat='$jenis_surat' WHERE id_surat='$id_surat'";

	    $response = array();

	    if(mysqli_query($connect, $query)){
	        $response['value'] = 200;
	        $response['message'] = "Success";
	    }else{
	        $response['value'] = 500;
	        $response['message'] = "Failed";
	    }
		
		}
      

echo json_encode($response);