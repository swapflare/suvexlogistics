<?
session_start();

require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-his':
		addHistory();
	break;
	case 'edit-his':
		editHistory();
	break;
	case 'edit-cons':
		editCons();
	break;
	case 'delete-cons':
		deleteCons();
	break;
}

function addHistory() {
	if(isset($_POST['Submit'])){
	$his_date = $_POST['his_date'];
	$his_time = $_POST['his_time'];
	$his_activity = $_POST['his_activity'];
	$his_location = $_POST['his_location'];
	$his_status = $_POST['his_status'];
    $cid = $_POST['cid'];
    
   $his_array=array('his_date'=>$his_date,'his_time'=>$his_time,'his_activity'=>$his_activity,'his_location'=>$his_location,'his_status'=>$his_status); 
   
   $sql = "SELECT *
		FROM tbl_courier
		WHERE cid = '$cid'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
$data = dbFetchAssoc($result);
$his_json=$data['his_encode'];
$his_decode=json_decode($his_json,false);
//$his_array['his_date']=$his_json;
}
else $his_decode=array();
$his_decode[]=$his_array;
$his_encode=json_encode($his_decode);

	$sql_1 = "UPDATE tbl_courier 
				SET his_encode = '$his_encode' WHERE cid = $cid";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');
}
}//addNewOffice

function editHistory(){
	global $dbConn;
	if(isset($_POST['Submit'])){
		$cid = $_POST['cid'];
		$his_encode = mysqli_real_escape_string($dbConn,$_POST['his_encode']);
		$his_decode=json_decode($_POST['his_encode'],false);
		if(($his_encode&&$his_decode)||!$his_encode){
			$sql_1 = "UPDATE tbl_courier 
				SET his_encode = '$his_encode' WHERE cid = $cid";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');
		}
}
}

function deleteCons(){
	global $dbConn;
		$cid = $_GET['cid'];
		if($cid){
			$sql_1 = "DELETE FROM tbl_courier WHERE cid = $cid";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');
		}
}

function editCons(){
	$Shippername = $_POST['Shippername'];
	$Shipperphone = $_POST['Shipperphone'];
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$Receivername = $_POST['Receivername'];
	$Receiverphone = $_POST['Receiverphone'];
	$Receiveraddress = $_POST['Receiveraddress'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];

	$Bookingmode = $_POST['Bookingmode'];
	$Totalfreight = $_POST['Totalfreight'];
	$Mode = $_POST['Mode'];
	
	
	$Packupdate = $_POST['Packupdate'];
	$Pickuptime = $_POST['Pickuptime'];
	$status = $_POST['status'];
	$book_date= $_POST['book_date'];
	$Comments = $_POST['Comments'];
	

	$sql = "UPDATE tbl_courier SET cons_no='$ConsignmentNo', ship_name='$Shippername', phone='$Shipperphone', s_add='$Shipperaddress', rev_name='$Receivername', r_phone='$Receiverphone', r_add='$Receiveraddress',  type='$Shiptype', weight=$Weight, invice_no='$Invoiceno', qty=$Qnty, book_mode='$Bookingmode', freight='$Totalfreight', mode='$Mode', pick_date='$Packupdate', pick_time='$Pickuptime', status='$status', comments='$Comments', book_date='$book_date' ";	
	//echo $sql;
	dbQuery($sql);
	header('Location: update-success.php');

}//editCons
?>