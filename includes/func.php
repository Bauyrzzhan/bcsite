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
function getInfos(){
	$sql="SELECT * FROM regbook
		INNER JOIN category ON
		category.category_id=regbook.category
		INNER JOIN `status` ON
		status.status_id=regbook.`status`
		INNER JOIN address ON
		address.city_id=regbook.city";
		return $result;
}


// =================
// ADDRESS
// =================
function getAddress(){
	$sql="SELECT * FROM address";
	return queryEasy($sql);
}
// GETINFOTOCITY
function getInfo($table){
	$sql="SELECT * FROM $table
			ORDER BY regbook_id DESC";
	return queryEasy($sql);
}

?>