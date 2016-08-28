<?php
include ('./func.php');
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<?php echo getHead("Lendbook | User"); ?>
<body>
  	<div id="container">
	<?php echo getHeader(getNav(),getNavMob());?>
	
<!-- Start Content -->

<div id="content">
      <div class="container">
        <div class="page-content">

<?php
if(isset($_GET["action"]))
{
switch ($_GET["action"]) {
	case 'profile':
		if (isLoggedin()){
			echo blockTitle("Profile");
			echo "Welcome <strong>".$_SESSION["name"]."</strong><br><br><br>";	
			echo blockTitle("My Submissions");
			echo renderBooks(getBooks("select * from books where userid=".$_SESSION["id"],50,1));
			echo "<a href='user.php?action=userbooks' class='btn-system btn-large'>View All</a>
				  <a href='books.php?action=add' class='btn-system btn-large'>Add Book</a>";

		}
		else
			redirect("user.php?action=login");
		break;
	case 'login':
		if (!isLoggedin()){
			echo loginForm();
		}
		else
			redirect("user.php?action=profile");
		break;
	case 'signup':
		if (!isLoggedin()){
			echo signupForm();
		}
		else
			redirect("user.php?action=profile");
		break;

	case 'userbooks':

		if(isLoggedin()){
			echo blockTitle("My Books");
			echo renderBooks(getBooks("select * from books where userid=".$_SESSION["id"],50,1));
		}
		else
			redirect("user.php?action=login");
		break;

	case 'logout':
		session_destroy();
		redirect("user.php?action=login");
		break;
	
	default:
		# code...
		break;
}
}

if(isset($_POST["action"])){
	switch ($_POST["action"]) {
		case 'login':
		
			if (verifyLogin($_POST["email"],$_POST["pass"])){
				$_SESSION["email"] = $_POST["email"];	
				$_SESSION["name"] = getUsername(getUserIDfromEmail($_POST["email"]));
				$_SESSION["id"]=getUserIDfromEmail($_POST["email"]);
				redirect("user.php?action=profile");
			}
			else{
				echo "Invalid Information.";
			}
				
			break;
		case 'signup':
			if (!userExists($_POST["email"])){
				addUser($_POST["name"],$_POST["email"],$_POST["mobile"],$_POST["pass"],"");
				echo "Your Account has been created!";
				echo '<br><br><a href="user.php?action=login" ><div class="btn-system btn-small">Login</div></a>';
			}
			else
				echo "User with that email already exists!";
			break;
		
		default:
			echo "some prob";
			break;
	}
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