<?php 
include_once("include/db_connect.php");

?>
<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">
<!-- slick css -->
<link href="assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
<!-- Bootstrap Css -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />
<!-- alertifyjs default themes  Css -->
<link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="assets/jquery-toast-plugin/jquery.toast.min.css">
<link href="assets/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<!-- alertifyjs default themes  Css -->
<link href="assets/libs/alertifyjs/build/css/themes/default.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/script/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="assets/css/choices.min.css">
<link rel="stylesheet" href="assets/css/masking-input.css"/>
<script src="assets/js/choices.min.js"></script>


<script>

 $(document).ready(function(){

 var multipleCancelButton = new Choices('.choices-multiple-remove-button', {
 removeItemButton: true,
 maxItemCount:5,
 searchResultLimit:5,
 renderChoiceLimit:5
 });


 });
 </script>
<style>
.link_css{
color:#fff !important; font-weight:bold;
}
.boxshadow{
box-shadow:0 1px 0 rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.05), 0 5px 15px rgba(0, 0, 0, 0.05);
}
.modal-header{
background-color: #feff94;
}
.datepicker{ z-index:99999 !important; }
</style>
<style>
.float{
	position:fixed;
	width:80px;
	height:40px;
	bottom:20px;
	right:40px;
	background-color:#6495ed;
	color:#FFF;
	border-radius:10px;
	text-align:center;
	box-shadow: 2px 2px 3px #00000040;
	z-index:1
}
.float_top{
	position:fixed;
	width:100px;
	height:40px;
	font-size:14px;
	font-weight:500;
	top:80px;
	right:40px;
	background-color:#11c46e;
	color:#FFF;
	border-radius:5px;
	text-align:center;
	box-shadow: 0px 2px 3px #00000040;
	z-index:1

}
.float_top_left{
	position:fixed;
	width:100px;
	height:40px;
	font-size:14px;
	font-weight:500;
	top:80px;
	right:150px;
	background-color:#6495ed;
	color:#FFF;
	border-radius:5px;
	text-align:center;
	box-shadow: 0px 2px 3px #00000040;
	z-index:1

}
</style>
</head>
