<?php   $fetch_menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '0'";
			$fetch_menu_res = mysqli_query($conn,$fetch_menu);
			while($fetch_main_menu = mysqli_fetch_array($fetch_menu_res)){ 
			
			?>  
			<?php 
			if(!in_array($fetch_main_menu['id'], $checkbox_array)){
			$dt = "none";
			}
			else{
			$dt = "";
			}
			?>	
          <li class="nav-item dropdown" style="display:<?php echo $dt; ?>">
			<?php 
			if(in_array($fetch_main_menu['id'], $checkbox_array)) { 
			?>
		   <a class="nav-link dropdown-toggle arrow-none" href="<?php echo $fetch_main_menu['link']; ?>" id="topnav-layout" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-flip-horizontal mr-2"></i><?php echo $fetch_main_menu['menu_name']; ?>
			<div class="arrow-down"></div>
            </a>
			<?php
			}
			?>
            <div class="dropdown-menu" aria-labelledby="topnav-layout">

				<?php   $fetchsub_menu     = "SELECT * FROM menu_management where status='1' AND parent_id = '".$fetch_main_menu['id']."'";
  				$fetchsub_menu_res = mysqli_query($conn,$fetchsub_menu);
				while($fetchsub_main_menu = mysqli_fetch_array($fetchsub_menu_res)){ 
				if(in_array($fetchsub_main_menu['id'], $checkbox_array)) { 
				?>  

			 <a href="<?php echo $fetchsub_main_menu['link']?>" class="dropdown-item"><?php echo $fetchsub_main_menu['menu_name']?></a> 
			<?php } } ?>
			</div>
          </li>
		  
<?php } ?>
<header id="page-topbar">
  <div class="navbar-header">
    <div class="d-flex">
      <!-- LOGO -->
      <div class="navbar-brand-box"> <a href="index.php" class="logo logo-dark"> <span class="logo-sm"> <img src="assets/images/logo-small-dark.png" alt="" height="22"> </span> <span class="logo-lg"> <img src="assets/images/logo-darks.png" alt="" height="19"> </span> </a> <a href="index.php" class="logo logo-light"> <span class="logo-sm"> <img src="assets/images/logo-small-light.png" alt="" height="22"> </span> <span class="logo-lg"> <img src="assets/images/logo-lights.png" alt="" height="19"> </span> </a> </div>
      <button type="button" class="btn btn-sm mr-2 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content"> <i class="fa fa-fw fa-bars"></i> </button>
      <!-- App Search-->
      <!--      <form class="app-search d-none d-lg-block">
        <div class="position-relative">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="mdi mdi-magnify"></span> </div>
      </form>
-->
    </div>
    <div class="d-flex">
      <div class="dropdown d-inline-block d-lg-none ml-2">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-magnify"></i> </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
          <form class="p-3">
            <div class="form-group m-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="dropdown d-none d-lg-inline-block ml-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen"> <i class="mdi mdi-fullscreen"></i> </button>
      </div>
      <!--<div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"> <i class="mdi mdi-tune"></i> </button>
      </div>-->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell-outline"></i> <span class="badge badge-danger badge-pill">3</span> </button>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
          <div class="p-3">
            <div class="row align-items-center">
              <div class="col">
                <h6 class="m-0 font-weight-medium text-uppercase"> Notifications </h6>
              </div>
              <div class="col-auto"> <span class="badge badge-pill badge-danger">New 3</span> </div>
            </div>
          </div>
          <div data-simplebar style="max-height: 230px;"> <a href="#" class="text-reset notification-item">
            <div class="media">
              <div class="avatar-xs mr-3"> <span class="avatar-title bg-primary rounded-circle font-size-16"> <i class="mdi mdi-cart"></i> </span> </div>
              <div class="media-body">
                <h6 class="mt-0 mb-1">Your order is placed</h6>
                <div class="font-size-12 text-muted">
                  <p class="mb-1">If several languages coalesce the grammar</p>
                  <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                </div>
              </div>
            </div>
            </a> <a href="#" class="text-reset notification-item">
            <div class="media"> <img src="assets/images/users/avatar-3.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
              <div class="media-body">
                <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                <div class="font-size-12 text-muted">
                  <p class="mb-1">It will seem like simplified English.</p>
                  <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                </div>
              </div>
            </div>
            </a> <a href="#" class="text-reset notification-item">
            <div class="media">
              <div class="avatar-xs mr-3"> <span class="avatar-title bg-success rounded-circle font-size-16"> <i class="mdi mdi-package-variant-closed"></i> </span> </div>
              <div class="media-body">
                <h6 class="mt-0 mb-1">Your item is shipped</h6>
                <div class="font-size-12 text-muted">
                  <p class="mb-1">One could refuse to pay expensive translators.</p>
                  <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                </div>
              </div>
            </div>
            </a> <a href="#" class="text-reset notification-item">
            <div class="media"> <img src="assets/images/users/avatar-4.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
              <div class="media-body">
                <h6 class="mt-0 mb-1">Dominic Kellway</h6>
                <div class="font-size-12 text-muted">
                  <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                  <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="p-2 border-top"> <a class="btn-link btn btn-block text-center" href="javascript:void(0)"> <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More.. </a> </div>
        </div>
      </div>
      <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar"> <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION['user_name']; ?></span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i> </button>
        <div class="dropdown-menu dropdown-menu-right">
          <!-- item-->
          <!--<a class="dropdown-item" href="#"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
		  <a class="dropdown-item" href="#"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Billing</a>
		  --><a class="dropdown-item" href="#"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Settings</a>
		  <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a>
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
          <li class="nav-item"> <a class="nav-link" href="index.html"> <i class="mdi mdi-storefront mr-2"></i>Dashboard </a> </li>
          <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-format-underline mr-2"></i>UI Elements
            <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu mega-dropdown-menu" aria-labelledby="topnav-uielement">
              <div class="row">
                <div class="col-lg-4">
                  <div> <a href="ui-alerts.html" class="dropdown-item">Alerts</a> <a href="ui-badge.html" class="dropdown-item">Badge</a> <a href="ui-buttons.html" class="dropdown-item">Buttons</a> <a href="ui-cards.html" class="dropdown-item">Cards</a> <a href="ui-dropdowns.html" class="dropdown-item">Dropdowns</a> <a href="ui-navs.html" class="dropdown-item">Navs</a> </div>
                </div>
                <div class="col-lg-4">
                  <div> <a href="ui-tabs-accordions.html" class="dropdown-item">Tabs &amp; Accordions</a> <a href="ui-modals.html" class="dropdown-item">Modals</a> <a href="ui-images.html" class="dropdown-item">Images</a> <a href="ui-progressbars.html" class="dropdown-item">Progress Bars</a> <a href="ui-pagination.html" class="dropdown-item">Pagination</a> <a href="ui-popover-tooltips.html" class="dropdown-item">Popover & Tooltips</a> </div>
                </div>
                <div class="col-lg-4">
                  <div> <a href="ui-spinner.html" class="dropdown-item">Spinner</a> <a href="ui-carousel.html" class="dropdown-item">Carousel</a> <a href="ui-video.html" class="dropdown-item">Video</a> <a href="ui-typography.html" class="dropdown-item">Typography</a> <a href="ui-grid.html" class="dropdown-item">Grid</a> </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-cloud-print-outline mr-2"></i>Components
            <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-components">
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Email
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-email"> <a href="email-inbox.html" class="dropdown-item">Inbox</a> <a href="email-read.html" class="dropdown-item">Email Read</a> <a href="email-compose.html" class="dropdown-item">Email Compose</a> </div>
              </div>
              <a href="calendar.html" class="dropdown-item">Calendar</a>
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icon"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Icons
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-icon"> <a href="icons-materialdesign.html" class="dropdown-item">Material Design</a> <a href="icons-dripicons.html" class="dropdown-item">Dripicons</a> <a href="icons-fontawesome.html" class="dropdown-item">Font awesome 5</a> <a href="icons-themify.html" class="dropdown-item">Themify</a> </div>
              </div>
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tables
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-table"> <a href="tables-basic.html" class="dropdown-item">Basic Tables</a> <a href="tables-datatable.html" class="dropdown-item">Data Tables</a> <a href="tables-responsive.html" class="dropdown-item">Responsive Table</a> <a href="tables-editable.html" class="dropdown-item">Editable Table</a> </div>
              </div>
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Forms
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-form"> <a href="form-elements.html" class="dropdown-item">Form Elements</a> <a href="form-validation.html" class="dropdown-item">Form Validation</a> <a href="form-advanced.html" class="dropdown-item">Form Advanced</a> <a href="form-editors.html" class="dropdown-item">Form Editors</a> <a href="form-uploads.html" class="dropdown-item">Form File Upload</a> <a href="form-mask.html" class="dropdown-item">Form Mask</a> <a href="form-summernote.html" class="dropdown-item">Summernote</a> </div>
              </div>
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Charts
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-table"> <a href="charts-morris.html" class="dropdown-item">Morris</a> <a href="charts-apex.html" class="dropdown-item">Apex</a> <a href="charts-chartist.html" class="dropdown-item">Chartist</a> <a href="charts-chartjs.html" class="dropdown-item">Chartjs</a> <a href="charts-flot.html" class="dropdown-item">Flot</a> <a href="charts-sparkline.html" class="dropdown-item">Sparkline</a> <a href="charts-knob.html" class="dropdown-item">Jquery Knob</a> </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-advancedui" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-package-variant-closed mr-2"></i>Advanced UI
            <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-advancedui"> <a href="advanced-alertify.html" class="dropdown-item">Alertify</a> <a href="advanced-rating.html" class="dropdown-item">Rating</a> <a href="advanced-nestable.html" class="dropdown-item">Nestable</a> <a href="advanced-rangeslider.html" class="dropdown-item">Range Slider</a> <a href="advanced-sweet-alert.html" class="dropdown-item">Sweet-Alert</a> <a href="advanced-lightbox.html" class="dropdown-item">Lightbox</a> <a href="advanced-maps.html" class="dropdown-item">Maps</a> </div>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-file-document-box-multiple-outline mr-2"></i>Extra pages
            <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-more">
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Authentication
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-auth"> <a href="login.php" class="dropdown-item">Login</a> <a href="auth-register.html" class="dropdown-item">Register</a> <a href="auth-recoverpw.html" class="dropdown-item">Recover Password</a> <a href="auth-lock-screen.html" class="dropdown-item">Lock Screen</a> </div>
              </div>
              <div class="dropdown"> <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Utility
                <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-utility"> <a href="pages-starter.html" class="dropdown-item">Starter Page</a> <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a> <a href="pages-comingsoon.html" class="dropdown-item">Coming Soon</a> <a href="pages-timeline.html" class="dropdown-item">Timeline</a> <a href="pages-gallery.html" class="dropdown-item">Gallery</a> <a href="pages-faqs.html" class="dropdown-item">FAQs</a> <a href="pages-pricing.html" class="dropdown-item">Pricing</a> <a href="pages-404.html" class="dropdown-item">Error 404</a> <a href="pages-500.html" class="dropdown-item">Error 500</a> </div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-flip-horizontal mr-2"></i>Layouts
            <div class="arrow-down"></div>
            </a>
            <div class="dropdown-menu" aria-labelledby="topnav-layout"> <a href="layouts-topbar-light.html" class="dropdown-item">Topbar light</a> <a href="layouts-boxed-width.html" class="dropdown-item">Boxed width</a> <a href="layouts-colored-header.html" class="dropdown-item">Colored Header</a> </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
