<html>
<head>
</head>
<body>
  <?php
$n = 0;
  if(!isset($_GET['p']) || $_GET['p']!="qer34ij5qqt6iu7tie1oe2psoko") {
      die("Access denied");
  }
?>
  <form action="list.php?p=qer34ij5qqt6iu7tie1oe2psoko" method="post">
    <p>Concert : <input type="text" name="concert" value="<?= isset($_POST['concert']) ? $_POST['concert'] : '' ?>"></input></p>
  </form>

  <table border=1 cellpadding=10 style="border-collapse:collapse;">
<?php
if(isset($_POST['concert'])) {

$dd = "reza/".$_POST['concert'];
  $d = opendir($dd);
  if($d) {
  while (false !== ($entry = readdir($d))) {
    if(is_file($dd."/".$entry)) {
      $nn = file_get_contents($dd."/".$entry);
      $n = $n + $nn;
      echo "<tr><td>$entry</td><td>" .$nn. "</td></tr>";
    }
  }
  }
}

 ?>
</table>
<p>TOTAL : <?= $n ?></p>
</body>
</html>
