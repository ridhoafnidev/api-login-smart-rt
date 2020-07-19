<?php
header("Content-Type: application/json; charset=UTF-8");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $jenis_surat = $_POST['jenis_surat'];

 	require_once("connect.php");
    $queryResult=$connect->query("SELECT * FROM jenis_surat where jenis_surat=$jenis_surat");
		
		$fetchData=$queryResult->fetch_assoc();
		if(count($fetchData) >0){


		}else{
			 $query = "INSERT INTO jenis_surat (jenis_surat) VALUES ('$jenis_surat')";

	    $response = array();

	    if(mysqli_query($connect, $query)){
	        $response['value'] = 200;
	        $response['message'] = "Success";
	    }else{
	        $response['value'] = 500;
	        $response['message'] = "Failed";
	    }
		}else{
		    $response['value'] = 500;
		    $response['message'] = "Error!";
		}
		}
   

   

   

echo json_encode($response);