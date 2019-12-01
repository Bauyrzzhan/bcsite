<?
include_once("includes/link.php");
// =================
// CATEGORY
// =================
function getCategory(){
	$sql="SELECT * FROM category";
	return queryEasy($sql);
}

function getAcc() {
	$sql = "SELECT * FROM register WHERE reg_id =".$_SESSION['user_id'];
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
		address.city_id=regbook.city
		ORDER BY regbook_id DESC";
		return queryEasy($sql);
}


// =================
// ADDRESS
// =================
function getAddress(){
	$sql="SELECT * FROM address";
	return queryEasy($sql);
}

// GETINFOSS
function getInfoss(){
	$sql="SELECT address.city_id,address.city, count(regbook.regbook_id) as `count` FROM regbook
			INNER JOIN address ON
			regbook.city=address.city_id
			group by regbook.city";
		return queryEasy($sql);
}
function getAddid(){
	$sql="SELECT * FROM address";
	return queryEasy($sql);
}
function getCityid($id){
	$sql="SELECT * FROM regbook
			INNER JOIN category ON
			category.category_id=regbook.category
			INNER JOIN `status` ON
			`status`.status_id=regbook.`status`
			WHERE city=$id";
			return queryEasy($sql);
}

     function logged_in(){
        return(isset($_SESSION['user_id']));
        
}

     function protect_page(){
        if (logged_in() === false ) {
            echo "<script>alert('Авторизируйтесь или зарегистрируйтесь для просмотра данной страницы!');location.href='bookcrossing.php';</script>";
        }
    }

?>
