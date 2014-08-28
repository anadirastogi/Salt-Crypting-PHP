<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>CREATE GPEL ADMIN PASSOWRD HASH 
</p>
<br/>
<br/>
<form action="createadmin.php" method="post">

<label name="password">Tell me your desired username</label> <input type="text" name="user"/>
<label name="password">Tell me your desired password</label> <input type="text" name="pass"/>
<br/>
<p>Please check phpmyadmin login table to avoid repetition of password</p>
<input type="submit" named="submit"/>
</form>
<?php 

  $a=$_POST["user"];
  $b=crypt($a, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
  
  $c=$_POST["pass"];
  $d=crypt($c, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');

  $e.=$b;
$e.=$d;
 echo '<br/>';
echo $e;



?>
</body>

</html>