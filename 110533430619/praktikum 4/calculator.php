<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator2'];

if ($operator == '+')
{
$hasil = $angka1+$angka2;
}
if ($operator == '-')
{
$hasil = $angka1-$angka2;
}
if ($operator == '*')
{
$hasil = $angka1*$angka2;
}
if ($operator == '/')
{
$hasil = $angka1/$angka2;
}


header ("location:tung.php?hasil1=$hasil");
?>