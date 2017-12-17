<?php

if(!isset($_GET['concert'])) {
  header("Location: index.php");
  exit;
}
if(!isset($_POST['nom']))  {
  header("Location: index.php?concert=".$_POST['nom']);
  exit;
}
?>
<html>
<head>
</head>
<body>
<?php

$n = isset($_POST['n']) ? $_POST['n'] : 1;

$f = 'reza/'.$_GET['concert'].'/'.$_POST['nom'];

if(file_exists($f)) {
?>
<p>
  Vous aviez déjà reservé des places pour ce concert.
  Merci d'annuler d'abord votre reservation
</p>
<form action="cancel.php?concert=<?= $_GET['concert'] ?>" method=post>
  <input style="display:none" type="text" name="nom" value="<?= $_POST['nom'] ?>"></input>
  <button type="submit">Annuler ma reservation</button>
</form>
<?php
    exit;
}

mkdir('reza/'.$_GET['concert'], 0755, true);
file_put_contents($f, "".$n);

?>

<p>
  Vos <?= $n ?> places pour le concert <?= $_GET['concert'] ?> ont été reservées.
  Leur reglement se fera sur place en espèces ou chèque au nom de <?= $_POST['nom'] ?>
</p>
<script>
window.setTimeout(function() { window.location.href="index.php?concert=<?= $_GET['concert'] ?>";},5000);
</script>

</body>
</html>
