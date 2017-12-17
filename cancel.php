<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(!isset($_GET['concert'])) {
  header("Location: /");
  exit;
}
if(!isset($_POST['nom']))  {
  header("Location: /");
  exit;
}
?>
<html>
<head>
</head>
<body>
<?php

$f = 'reza/'.$_GET['concert'].'/'.$_POST['nom'];

if(file_exists($f)) {
  unlink($f);
?>
<p>
  Vos places pour le concert <?= $_GET['concert'] ?> ont bien été annulées.
</p>
<?php
} else {
?>
<p>
  Vous n'aviez pas reservé de places au nom de <?= $_POST['nom'] ?> pour le concert <?= $_GET['concert'] ?>
</p>
<?php } ?>
<script>
window.setTimeout(function() { window.location.href="/?concert=<?= $_GET['concert'] ?>";},5000);
</script>
</body>
</html>
