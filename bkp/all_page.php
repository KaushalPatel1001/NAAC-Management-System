<?php

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $ssl = 'https';
}
else {
  $ssl = 'http';
}

$app_url = ($ssl  )
          . "://".$_SERVER['HTTP_HOST']
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");
?>

<!DOCTYPE html>
<html>
<head>

	<title> Change Browser URL Without Refreshing Page  </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="How to change browser URL without refreshing page using jQuery and HTML5.You have seen in many dynamic website when you request new page they dont redirect you to new page they simply change the URL and get that page using Ajax to save time and bandwidth that's what we were going to do in this tutorial ">

	<meta name="author" content="Code With Mark">
	<meta name="authorUrl" content="http://codewithmark.com">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<style type="text/css">
 	body
 	{
    	padding: 0px 0px 0px;
    	background-color: #DAE3E6;
	}
	.content {
    margin-top:auto;
    margin-bottom:auto;
    text-align:center;
	}
 	</style>


	<script type="text/javascript">
	$(document).ready(function($)
	{
		var page_url = '<?php echo $app_url?>/';

		$(document).on('click', '.btn_load_home', function(event)
		{
			event.preventDefault();

			$(document).attr("title", 'Home');
			$(document).find('meta[name=description]').attr('content', data.description);

			window.history.pushState("", "", page_url);
			$(document).find('.post_msg').html(" ");
		});

		$(document).on('click', '.btn_load_screen', function(event)
		{
			event.preventDefault();

			var call_type = $(this).attr('call_type');

			$.getJSON(page_url+'ajax.php', {call_type: call_type}, function(data, textStatus, xhr)
			{
				console.log(data);

				$(document).attr("title", data.title);
				$(document).find('meta[name=description]').attr('content', data.description);

				$(document).find('.post_msg').html(data.data);

				window.history.pushState("", "", page_url+data.url);
			});
		});


	});
	</script>

</head>

<body>


<div style="padding:10px;"> </div>


<!--[Load Page Content - Start]-->
<div class="ScreenData container" style="max-width : 900px; margin : 0 auto; border: 1px dotted #CCC; background : #FFF; border-radius: 50px;padding-top:10px;">

 	<div class="text-center">

 		<br><br>
 		<h3 > Change Browser URL Without Refreshing Page </h3>

 		<br><br>

 		<span class="btn btn-info btn_load_screen" call_type="home"> Home</span> |
		<span class="btn btn-secondary btn_load_screen" call_type="jquery"> jQuery</span> |
 		<span class="btn btn-dark btn_load_screen" call_type="php"> PHP</span> |
 		<span class="btn btn-success btn_load_screen" call_type="invoice"> Invoice receipt</span> |
 		<br><br>
 	</div>

	<br><br>
 	<span class="post_msg container"></span>

 	<br><br>

</div>


<!--[Load Page Content - End]-->



</body>
</html>