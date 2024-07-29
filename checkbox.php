<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>
<form>
<input class="boxcheck" type="checkbox">
checkbox

<input class="boxtext" type="text">
<input class="boxcheck" type="checkbox">
checkbox

<input class="boxtext" type="text">
text here 
</form>
<script>
$(document).ready(function() {
  $("input.boxtext").on("keyup blur", function() {
    $("input.boxcheck").prop("checked", this.value != "");
  });

  // don't allow user to manually change the checkbox
  $("input.boxcheck").click(function() {
    return false;
  });
});
</script>
</body>
</html>
