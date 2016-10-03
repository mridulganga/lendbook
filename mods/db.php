<?php

//Basic DB Functions-----------------------------------------------------------------
	function connectDB(){
		//$dbs = parse_ini_file("db.ini",true);
		$host = "mysql.hostinger.in";
		$user = "u526765360_root";
		$pass = "root1234";
		$db = "u526765360_main";

		$conn = new mysqli($host, $user, $pass, $db);
		// Check connection
		if ($conn->connect_error)
			return FALSE;

		return $conn;
	}

	function disconnectDB($conn){
		$conn->close();
	}

	function queryDB($conn, $sql){
		$result = $conn->query($sql);
		//return table if its not empty
				return $result;
	}

	function executeDB($conn,$sql){
		if ($conn->query($sql) === TRUE)
			return TRUE;
		else
			echo  $conn->error;
	}

	function initialiseDB(){
		$conn = connectDB();

			$sql = "create table Books()";
			executeDB($conn,$sql);

			$sql = "create table users()";
			executeDB($conn,$sql);

			$sql = "create table sales()";
			executeDB($conn,$sql);

			$sql = "create table lending()";
			executeDB($conn,$sql);

			$sql = "create table files()";
			executeDB($conn,$sql);

			$sql = "create table notifs()";
			executeDB($conn,$sql);
	}

#------------------------------------Books Part-----------------------------------------------
	#file functions

	function downloadFile($fileurl,$path){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch, CURLOPT_URL, $fileurl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$file_content = curl_exec($ch);
		curl_close($ch);

		$dfile = fopen($path, "w");
		fwrite($dfile, $file_content);
		fclose($dfile);
	}

	function addFile($tmpfilepath,$name){

		$filename = "./files/".hash("md5",$tmpfilepath).".".pathinfo($name,PATHINFO_EXTENSION);

		if (rename($tmpfilepath, $filename)){
			$c = connectDB();
			$sql = "insert into files values(0,'".$filename."')";
			executeDB($c,$sql);
			$insID = $c->insert_id;
			$c->close();
			return $insID;
		}
	}

	function removeFile($fileid){
		$c = connectDB();
		$sql = "select * from files where id=".$fileid;
		$result = queryDB($c,$sql);
		$row = $result->fetch_assoc();
		unlink("./../".substr($row["path"],2));
		$sql = "delete from files where id=".$fileid;
		executeDB($c,$sql);
		disconnectDB($c);
		return TRUE;

	}

	function removeFilePath($filepath){
		$c = connectDB();
		unlink("./../".substr($filepath, 2));
		$sql = "delete from files where path=".$filepath;
		executeDB($c,$sql);
		$c->close;
		return TRUE;
	}

	function replaceFile($fileid,$tmpfile,$name){
		$newid = addFile($tmpfile);
		removeFile($fileid);
		return $newid;
	}

	function getFileID($filename){
		$c = connectDB();
		$sql = "select * from files where path=".$filename;
		$result = queryDB($c,$sql);
		$row = $result->fetch_assoc();
		$c->close();
		return $row["id"];
	}

	function getFilename($fileid){
		$c = connectDB();
		$sql = "select * from files where id=".$fileid;
		$result = queryDB($c,$sql);
		$row = $result->fetch_assoc();
		$c->close();
		return substr($row["path"],2);
	}




	#addition, removal and modification
	function addBook($title,$author,$publisher,$desc,$coverfile,$price){
		$c = connectDB();

			$title = $c->real_escape_string($title);
			$author = $c->real_escape_string($author);
			$desc = $c->real_escape_string($desc);
			$cover = addFile($coverfile["tmp_name"],$coverfile["name"]);
			$userid = $_SESSION["id"];

			//Book ID, Book Title, Author, Type, Description
		$sql = "insert into books values(0,'".$title."','".$author."','".$publisher."','book','".$desc."','".$cover."','0',".$price.", ".$userid.",now())";
		$ret = executeDB($c,$sql);

		$c->close();
		return $ret;
	}

	function addeBook($title,$author,$publisher,$desc,$cover,$file,$price){
		$c = connectDB();

			$title = $c->real_escape_string($title);
			$author = $c->real_escape_string($author);
			$desc = $c->real_escape_string($desc);
			$cover = addFile($cover["tmp_name"],$cover["name"]);
			$file = addFile($file["tmp_name"],$file["name"]);
			$userid = $_SESSION["id"];

			//Book ID, Book Title, Author, Type, Description
		$sql = "insert into books values(0,'".$title."','".$author."','".$publisher."','ebook','".$desc."','".$cover."','".$file."',".$price.", ".$userid.",now())";
		$ret = executeDB($c,$sql);

		$c->close();
		return $ret;
	}

	function addAudioBook($title,$author,$publisher,$desc,$cover,$file,$price){
		$c = connectDB();

			$title = $c->real_escape_string($title);
			$author = $c->real_escape_string($author);
			$desc = $c->real_escape_string($desc);
			$cover = addFile($cover["tmp_name"],$cover["name"]);
			$file = addFile($file["tmp_name"],$file["name"]);
			$userid = $_SESSION["id"];

			//Book ID, Book Title, Author, Type, Description
		$sql = "insert into books values(0,'".$title."','".$author."','".$publisher."','audiobook','".$desc."','".$cover."','".$file."',".$price.", ".$userid.",now())";
		$ret = executeDB($c,$sql);

		$c->close();
		return $ret;
	}

	function removeBook($id){
		$c = connectDB();
		$sql = "select * from books where id=".$id;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		if ($row["coverfile"]!='0')
			removeFile($row["coverfile"]);
		if ($row["extrafile"]!='0')
			removeFile($row["extrafile"]);
		$sql = "delete from books where id=".$id;
		executeDB($c,$sql);
		$c->close();
	}

	function modifyBook($id,$type,$value){
		$c = connectDB();
		$value = $c->real_escape_string($value);
		switch ($type) {
			case 'title':
			case 'author':
			case 'type':
			case 'Desc':
			case 'Publisher' :

				$sql = "UPDATE `books` SET `".$type."` = '".$value."' where id=".$id;
				break;
			case 'coverfile':
			case 'extrafile':
				$book = getBook($id);
				$cover = replaceFile($book[$type],$value["tmp_name"],$value["name"]);
				$sql = "update books set '".$type."' = '".$cover."' where id=".$id;
				break;
			case 'userid':
			case 'price':
				$sql = "update books set ".$type."=".$value." where id=".$id;
				break;
			default:
				$ret = FALSE;
				break;
		}

		$ret = executeDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}

	#listing, searching, sorting, filtering etc
	function getBooks($sql,$maxcount,$page=1){
		$c = connectDB();
		$start = ($page-1)*$maxcount;
		$sql .= " limit ".$start.",".$maxcount;
		$ret = queryDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}

	function getBook($id){
		$c = connectDB();
		$id = $c->real_escape_string($id);
		$sql = "select * from books where id=".$id;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);
		return $row;
	}

	function getPrice($id){
		$res = getBook($id);
		return $res["price"];
	}

	function getBookOwner($id){
		$c = connectDB();
		$sql = "select * from books where id=".$id;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);
		return $row["userid"];
	}

	function getBookTitle($id){
		$c = connectDB();
		$sql = "select * from books where id=".$id;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);
		return $row["Title"];
	}

	function countBooks(){
		$c = connectDB();
		$sql = "select count(*) from books ";
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);
		return $row["count(*)"];
	}

	function getTotalPrice(){
		$c = connectDB();
		$sql = "select sum(price) from books ";
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);
		return $row["sum(price)"];
	}


#------------------------------------Users Part-----------------------------------------------
	function addUser($name,$email,$phone,$pass,$notes){
		$c = connectDB();
		$name = $c->real_escape_string($name);
		$email = $c->real_escape_string($email);
		$phone = $c->real_escape_string($phone);
		$notes = $c->real_escape_string($notes);
		$pass = $c->real_escape_string($pass);
		$pass = hash("sha256",$pass);
		$sql = "insert into users values(0,'".$name."','".$email."','".$phone."','".$pass."','".$notes."')";
		$ret = executeDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}

	function removeUser($userid){
		$c = connectDB();
		$sql = "delete from users where id=".$userid;
		$ret = executeDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}

	function modifyUser($id,$type,$value){
		switch ($type) {
			case 'name':
			case 'email':
			case 'mobile':
			case 'notes':
				$sql = "update users set ".$type."='".$value."' where id=".$id;
				break;

			default:
				$ret =  FALSE;
				break;
		}
		$c = connectDB();
		$ret = executeDB($c,$sql);
		disconnectDB($c);
		return $ret;

	}
	function userExists($email){
		$c = connectDB();
		$email = $c->real_escape_string($email);
		$ret = queryDB($c,"select * from users where email='".$email."'");
		disconnectDB($c);
		if ($ret->num_rows > 0)
			return TRUE;
		else
			return FALSE;
	}

	function getUsers($sql,$maxcount,$page){
		$c = connectDB();
		$start = ($page-1)*$maxcount;
		$sql .= " limit ".$start.",".$maxcount;
		$ret = queryDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}
	function countUsers(){
		$c = connectDB();
		$sql = "select count(*) from users ";
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);
		return $row["count(*)"];
	}
	function verifyLogin($email,$pass){
		$c = connectDB();
		$email = $c->real_escape_string($email);
		$sql = "select * from users where email='".$email."'";
		$pass = hash("sha256",$pass);
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		disconnectDB($c);

		if ($row["Password"]==$pass)
			return TRUE;
		else
			return FALSE;

	}

	function changePassword($userid,$oldpass,$newpass){
		$c = connectDB();
		$sql =  "select * from users where id=".$userid;
		$result = queryDB($c,$sql);
		$row=$result->fetch_assoc();
		$pass = $row["pass"];
		if ($pass===hash("sha256",$oldpass)){
			$sql = "update users set password='".hash("sha256", $newpass)."' where id=".$userid;
			$ret = executeDB($c,$sql);
		}
		else {
			$ret = "Wrong Password";
		}
		disconnectDB($c);
		return $ret;
	}

	function resetPassword($userid,$newpass){
		$c=connectDB();
		$sql = "update users set password='".hash("sha256", $newpass)."' where id=".$userid;
		$ret = executeDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}

	function getUserIDfromEmail($email){
		$c = connectDB();
		$email = $c->real_escape_string($email);
		$sql = "select * from users where email='".$email."'";
		$ret = queryDB($c,$sql);

		$row = $ret->fetch_assoc();
		$id = $row["id"];
		disconnectDB($c);
		return $id;
	}

	function getUsername($userid){
		$c = connectDB();
		$sql = 'select * from users where id='.$userid;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		$name = $row["Name"];
		disconnectDB($c);
		return $name;
	}
	function getEmail($userid){
		$c = connectDB();
		$sql = 'select * from users where id='.$userid;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		$name = $row["Email"];
		disconnectDB($c);
		return $name;
	}
	function getMobile($userid){
		$c = connectDB();
		$sql = 'select * from users where id='.$userid;
		$ret = queryDB($c,$sql);
		$row = $ret->fetch_assoc();
		$name = $row["Mobile"];
		disconnectDB($c);
		return $name;
	}

#------------------------------------Notifications Part-----------------------------------------------

	function notifyUser($userid,$message){
		$c = connectDB();
		$sql = "insert into notifs values(0,".$userid.",'".$message."')";
		$ret = executeDB($c,$sql);
		disconnectDB($c);
		return $ret;
	}


#------------------------------------Lending/ Selling Part-----------------------------------------------

	function lendBook($from,$to,$startdate,$enddate,$rate){

	}
	function sellBook($from,$to,$price,$date){

	}
	function getOrders($sql){

	}

?>
