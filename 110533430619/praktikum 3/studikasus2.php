<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Checkbox</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Hobby
<input type="checkbox" name="hobby[]" value="Membaca"
<?php 
if (isset($_POST['hobby']))
{
foreach ($_POST['hobby'] as $key => $val)
{
if($val=="Membaca")
echo 'checked';
} 
}
?>
/>Membaca
<input type="checkbox" name="hobby[]" value="Olahraga"
<?php 
if (isset($_POST['hobby']))
{
foreach ($_POST['hobby'] as $key => $val)
{
if($val=="Olahraga")
echo 'checked';
} 
}
?>
/>Olahraga
<input type="checkbox" name="hobby[]" value="Menyanyi"
<?php 
if (isset($_POST['hobby']))
{
foreach ($_POST['hobby'] as $key => $val)
{
if($val=="Menyanyi")
echo 'checked';
} 
}
?>
/>Menyanyi <br />
<input type="submit" value="ok" />
</form>
<?php
if (isset($_POST['hobby'])) {
foreach ($_POST['hobby'] as $key => $val) {
echo $key . ' -> ' .$val . '<br />';
}
}
?>
</body>
</html>