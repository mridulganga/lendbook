<?php

function getAdminLogin(){
    $html = '
<div >
 <div class="content">
 <div class="container-fluid">
  <div class="col-lg-6" style="margin:50px auto; float:none;">
   
   <div class="header">
    <h2 class="title">Admin Login</h2>
   </div>

   <div class="content">
    <form method="post" action="index.php">
      <div class="row">

        <div class="form-group">
            <label>Admin Password</label>
            <input name="pass" type="password" class="form-control border-input" placeholder="Password" value="">
        </div>

      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-info btn-fill btn-wd">Login</button>
      </div>

  <div class="clearfix"></div>
</form>
   </div>                        
  </div>
 </div>
 </div>
</div>
';
return $html;
}

function getMenu($page=1){
	$html = '<div class="sidebar" data-background-color="white" data-active-color="danger">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    
                    <img src="assets/img/lendbook.png">
                </a>
            </div>

            <ul class="nav">';
            if ($page==1)
                $html .='<li class="active" >';
            else
                $html .='<li >';
            $html .='
                    <a href="index.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>';
            if ($page==2)
                $html .='<li class="active" >';
            else
                $html .='<li >';
            $html .='
                    <a href="users.php">
                        <i class="ti-user"></i>
                        <p>Users</p>
                    </a>
                </li>';
            if ($page==3)
                $html .='<li class="active" >';
            else
                $html .='<li >';
            $html .='
                    <a href="books.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Books</p>
                    </a>
                </li>';
            if ($page==4)
                $html .='<li class="active" >';
            else
                $html .='<li >';
            $html .='
                    <a href="services.php">
                        <i class="ti-text"></i>
                        <p>Services</p>
                    </a>
                </li>';
            if ($page==5)
                $html .='<li class="active" >';
            else
                $html .='<li >';
            $html .='
                    <a href="settings.php">
                        <i class="ti-pencil-alt2"></i>
                        <p>Settings</p>
                    </a>
                </li>';
            if ($page==6)
                $html .='<li class="active" >';
            else
                $html .='<li >';
            $html .='
                    <a href="index.php?logout=true">
                        <i class="ti-pencil-alt2"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>';
    return $html;
}
?>