<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<body>

<?php
$hasil1= 0;
?>

<form name="form1" method="post" action="calculator.php" style="width: 250">
<div>Kalkulator</div>
<div align="left" style="margin:5px">
Angka 1
<input name="angka1" type="text" id="angka1" maxlength="15">
</div>
<div align="left" style="margin:5px">
Angka 2
<input name="angka2" type="text" id="angka2" maxlength="15">
</div>
<div>
<select name="operator2" id="operator2">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>
<input type="submit" name="Submit2" value="Hitung"/>
</div>
<div>
<div>Hasil:<input name="hasil1" type="text" readonly="true" value="<?php if (isset($_GET['hasil1'])) echo $_GET['hasil1']?>"/>
</div>
</form>
</body>