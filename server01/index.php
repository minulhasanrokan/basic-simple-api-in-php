<?php 

	include_once 'db.php';

	$Seletdata  = "SELECT * FROM users";

	$result = mysqli_query($con, 	$Seletdata);
	$countdata = mysqli_num_rows(	$result);

	header("Content-type: application/json");
	if ($countdata>'0') {
		while ($data = mysqli_fetch_assoc($result)) {
			$arr[] = $data;
		}

		echo json_encode(['status'=>true,'data'=>$arr,'result'=>'found']);
	}
	else{
		echo json_encode(['status'=>ture,'data'=>'No data Found','result'=>'not']);
	}