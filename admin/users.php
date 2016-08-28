<?php
include ('./../func.php');
include 'extra.php';

if (isset($_POST["pass"])){
	if ($_POST["pass"] === "Mridul16")
		$_SESSION["admin"]="admin";
}


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>LendBook Admin Users</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>
 <div class="wrapper">
 	<?php 
 	if (!isset($_SESSION["admin"]) || isset($_GET["logout"])){
 		session_destroy();
	echo getAdminLogin();
	exit();
}
 	?>
 	<?php echo getMenu(2); ?>
<div class="main-panel">    
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">User List</a>
                </div>
            </div>
        </nav>

<?php if(isset($_GET["action"])){
    echo '<div class="alert alert-info"><button type="button" aria-hidden="true" class="close">×</button><span>';
        switch($_GET["action"]){
            case 'remove':
                removeUser($_GET["id"]);
                echo "The User has been removed";
                break;
            case 'resetpass':
                resetPassword($_GET["id"],getEmail($_GET["id"]));
                echo "The password has been reset for the user, its same as the user email now";
        }
        echo '</span></div>';
    }

    ?>

<div class="content">
 <div class="container-fluid">
   <div class="row">
    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users</h4>
                                <p class="category">List of Lendbook Users</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Password Reset</th>
                                        <th>Remove User</th>
                                    </tr></thead>
                                    <tbody>
                                        <?php 
                                            $sql = "select * from users";
                                            $ret = getUsers($sql,100,1);
                                            $html='';
                                            while ($row = $ret->fetch_assoc()) {
                                                $html .= '<tr>';
                                                $html .= '<td>'.$row["id"].'</td>
                                                    <td>'.$row["Name"].'</td>
                                                    <td>'.$row["Email"].'</td>
                                                    <td>'.$row["Mobile"].'</td>
                                                    <td><a href="users.php?action=resetpass&id='.$row["id"].'">Reset Password</a></td>
                                                    <td><a href="users.php?action=remove&id='.$row["id"].'">Remove</a></td>';
                                                $html .= '</tr>';
                                            }
                                            echo $html;
                                            
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
    </div>
  </div>
 </div>
</div>
</div>



 </div>
</body>

</html>