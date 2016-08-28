<?php
include ('./func.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php echo getHead("Lendbook | Books"); ?>
<body>
  	<div id="container">
	<?php echo getHeader(getNav(),getNavMob());?>
	
<!-- Start Content -->

<div id="content">
      <div class="container">
        <div class="page-content">

<?php

if(!isset($_GET["action"])){
		$_GET["action"] = "viewall";
}
	
switch($_GET["action"]){
		
	case "viewall":
		echo blockTitle("All Books");
		if (isLoggedin())
			echo renderBooks(getBooks("select * from books where userid <> ".$_SESSION["id"],50,1));
		else
			echo renderBooks(getBooks("select * from books",50,1));
		break;
		
	case "search":
		break;
		
	case "filter":
		break;
		
	case "sort":
		break;
		
	case "single":
		$id = $_GET["id"];
		$book = getBook($id);
		echo blockTitle($book["Title"]);
		echo "<br>";
		echo renderBook($book);
		break;

	case "add":
		echo blockTitle("Add Book/ eBook/ AudioBook");
		echo getBookForms();
		break;
	case 'remove':
		if (isLoggedin()){
			if($_SESSION["id"]==getBookOwner($_GET["id"]))
				removeBook($_GET["id"]);
			echo "Book Has Been Removed";
		}
		break;

	case 'edit':
		if(isLoggedin()){
			if($_SESSION["id"]==getBookOwner($_GET["id"])){
				$id=$_GET["id"];
				echo blockTitle("Edit - ".getBookTitle($id));	
				echo BookEditForm($id);
			}
		}
		
		break;

	case "other":
		break;	
}


?>

</div>
      </div>
</div>
<!-- End Content -->

<?php echo getFooter();?>
	</div>


</body>
</html>