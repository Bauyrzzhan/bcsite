<?
include_once("includes/link.php");
// =================
// CATEGORY
// =================
function getCategory(){
	$sql="SELECT * FROM category";
	return queryEasy($sql);
}

function queryEasy($query){
	global $link;
	$res=mysqli_query($link,$query);
	$count=mysqli_num_rows($res);
	if ($count) {
		while ($array=mysqli_fetch_assoc($res)) {
			$result[]=$array;
		}
	}
	return $result;
}
// =================
// STATUS
// =================

function getStatus(){
	$sql="SELECT * FROM status";
	return queryEasy($sql);
}

function queryEasyy($query){
	global $link;
	$res=mysqli_query($link,$query);
	$count=mysqli_num_rows($res);
	if ($count) {
		while ($array=mysqli_fetch_assoc($res)) {
			$result[]=$array;
		}
	}
	return $result;
}
// =================
// ADDRESS
// =================
function getAddress(){
	$sql="SELECT * FROM address";
	return queryEasy($sql);
}
function queryEasyyy($query){
	global $link;
	$res=mysqli_query($link,$query);
	$count=mysqli_num_rows($res);
	if ($count) {
		while ($array=mysqli_fetch_assoc($res)) {
			$result[]=$array;
		}
	}
	return $result;
}
// GETINFOTOCITY
function getInfo($table){
	$sql="SELECT * FROM $table LIMIT 1";
	return queryEasy($sql);
}