<?php


// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'coolflove';
$dbName = 'courier_db';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysqli_error($dbConn));
mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error($dbConn));

function dbQuery($sql)
{
global $dbConn;
	$result = mysqli_query($dbConn,$sql) or die(mysqli_error($dbConn));
	
	return $result;
}

function dbAffectedRows()
{
global $dbConn;
	global $dbConn;
	
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
global $dbConn;
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
global $dbConn;
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
global $dbConn;
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
global $dbConn;
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
global $dbConn;
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
global $dbConn;
	return mysqli_select_db($dbConn,$dbName);
}

function dbInsertId()
{
global $dbConn;
	return mysqli_insert_id($dbConn);
}
?>
