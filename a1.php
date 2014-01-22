<?
	mysql_connect('localhost','root','root');
	mysql_select_db('names');
	$fname = $_GET['t1'];
	$lname = $_GET['t2']; 

	$insertname = mysql_query("INSERT INTO names values('$t1','$t2')");
	if($insertname)
	{
		$status = "success";
		$message = "Saved!";
	}
	else
	{

		$status = "Failure";
		$message ="Not Saved!";
	}

	$data = array(
		'status '=>$status,
		'message'=>$message

		);

	echo json_encode($data);


	?>

