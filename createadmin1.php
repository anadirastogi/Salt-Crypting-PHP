<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$a=$_POST["text"];
if (isset($_POST["submit"])){
	
   $b=crypt($a, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
   echo $b;
	
}
?>
</body>
</html>