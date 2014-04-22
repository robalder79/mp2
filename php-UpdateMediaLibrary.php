<?php
/*
*	File:		UpdateMediaLibrary.php
*	By:			Robert Alder
*	Date:		2014-04-21
*
*	This script analyses a directory and adds the contents to a table or tables
*
*=====================================
*/
//$category = $_POST['category'];

// Secure Connection Script
	//include('../htconfig/dbConfig.php'); 
	$dbSuccess = false;
	//$dbConnected = mysqli_connect($db['hostname'],$db['username'],$db['password']);
		$dbConnected = mysqli_connect('localhost','root','mysqlroot');
		
	if ($dbConnected) {		
		echo "OK";
		$dbSelected = mysqli_select_db($dbConnected,'medialibrary');
		if ($dbSelected) {
			$dbSuccess = true;
			echo "DB Selection";
		} else {
			echo "DB Selection FAILed";
		}
	} else {
		echo "MySQL Connection FAILed";
	}
// END Secure Connection Script

if ($dbSuccess) {

/*public function TableExists($table) {
$res = $this->Query("SHOW TABLES LIKE $table");
return mysql_num_rows($res) > 0;
}
	
	OR
	
//Check for app_errors table
$exists = 0;
if($result=$mysqli->query("SHOW TABLES IN db WHERE Tables_in_db = 'app_errors'"))
{
if(mysqli_num_rows($result) > 0);
{
$exists = 1;
}
}
$result->close();
mysqli_close($mysqli);


	$createCategoryTable_SQL = "CREATE TABLE mediaLibrary.cat".$category." ( ";
	$createCategoryTable_SQL .= "ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
	$createCategoryTable_SQL .= "Filename VARCHAR( 250 ) NOT NULL, ";
	$createCategoryTable_SQL .= "Thumb VARCHAR( 250 ) ";
	$createCategoryTable_SQL .= ")";
	
	if (mysqli_query($dbConnected, $createCategoryTable_SQL))  {
		echo "Media Library updated successfully!";
	} */
}

?>