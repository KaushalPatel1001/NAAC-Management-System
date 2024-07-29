<?php 
   $gsa = "select * from tbl_users where id= '".$_SESSION['id']."'";
   $er = mysqli_query($conn,$gsa);
   $err = mysqli_fetch_assoc($er);
   $checkbox_array = explode(",", $err['show_menu']);
?>
<?php include('crud_permission.php');?>
<header id="page-topbar">
  <div class="navbar-header">
    <div class="d-flex">
      <!-- LOGO -->
      <div class="navbar-brand-box">
	  
       </div>
      <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content"> <i class="fa fa-fw fa-bars"></i> </button>
    </div>
    <div class="d-flex">
      <div class="dropdown d-inline-block d-lg-none ml-2">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-magnify"></i> </button>
								
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
        </div>
      </div>
      <!--div class="dropdown d-none d-lg-inline-block ml-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen"> <i class="mdi mdi-fullscreen"></i> </button>
      </div-->
      <!--<div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"> <i class="mdi mdi-tune"></i> </button>
      </div>-->
      <!--div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell-outline"></i> <span class="badge badge-danger badge-pill">
	
	</span> </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
          <div data-simplebar style="max-height: 230px;">0 
		   </div>
          
        </div>
	  </div-->
     
	  <div class="dropdown d-inline-block">
	      <div class="qarn">QARN</div>
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								 <img class="rounded-circle header-profile-user" src="<?php if($err['profile_image'] != ''){ echo "document/".$err['profile_image'];}else{echo "assets/images/users/avatar-1.jpg";}?>"
                                    alt="Header Avatar"> <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION['user_name']; ?></span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i> </button>
        <div class="dropdown-menu dropdown-menu-right">
          <!-- item-->
          <!--<a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
		  <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
		  --><a class="dropdown-item" href="setting.php?id=<?php echo $_SESSION['id']; ?>"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
		  <!--<a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>-->
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a> </div>
      </div>
    </div>
  </div>
</header>
<div class="topnav">
  <div class="container-fluid">
    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
      <div class="collapse navbar-collapse" id="topnav-menu-content">
        <ul class="navbar-nav">
		<li class="nav-item"> <a class="nav-link" href="dashboard.php"> <i class="mdi mdi-home mr-2"></i></a> </li>
		
			<?php   $fetch_menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '0'";
			$fetch_menu_res = mysqli_query($conn,$fetch_menu);
			while($fetch_main_menu = mysqli_fetch_array($fetch_menu_res)){ 
			$fetchsub_menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '".$fetch_main_menu['id']."'";
			$fetchsub_menu_res = mysqli_query($conn,$fetchsub_menu);
			 $fetchsub_menu_res_num = mysqli_num_rows($fetchsub_menu_res);
			if(!in_array($fetch_main_menu['id'], $checkbox_array)){
			$dt = "none";
			}
			else{
			$dt = "";
			}
			?>	
		
		
		<li class="nav-item dropdown <?php if($fetchsub_menu_res_num < 14){echo "";}else{echo "mega-dropdown";}?>" style="display:<?php echo $dt; ?>">
					<?php 
			if(in_array($fetch_main_menu['id'], $checkbox_array)) { 
			?>

			<a style=" color:#000000 !important; font-weight:400" class="nav-link dropdown-toggle arrow-none" href="<?php echo $fetch_main_menu['link']; ?>" id="topnav-layout" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $fetch_main_menu['menu_name']; ?>
			<div class="arrow-down"></div>
			</a>
			<?php
			}
			?>
			
            <div class="dropdown-menu <?php if($fetchsub_menu_res_num < 14){echo "";}else{echo "mega-dropdown-menu";}?>" aria-labelledby="topnav-layout">
              <div class="<?php if($fetchsub_menu_res_num > 14){echo "row";}?>">
					<?php   $fetchsub_menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '".$fetch_main_menu['id']."'";
					$fetchsub_menu_res = mysqli_query($conn,$fetchsub_menu);
					while($fetchsub_main_menu = mysqli_fetch_array($fetchsub_menu_res)){ 
					if(in_array($fetchsub_main_menu['id'], $checkbox_array)) { 
					?>  

             <div class="col-lg-3">
			 <a style=" color:#000000 !important;" href="<?php echo $fetchsub_main_menu['link']?>" class="dropdown-item"><?php echo $fetchsub_main_menu['menu_name']?></a> 
                </div>
			<?php } } ?>
              </div>
            </div>
          </li>
		  <?php
			}
			?>
        </ul>
      </div>
    </nav>
  </div>
</div>
