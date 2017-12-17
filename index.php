
<html>
<head>
  <style>
  body.reserver form#reza {
    display:block;
  }
  body.annuler form#annuler {
    display:block;
  }
  form { display:none;}
  </style>
</head>
<body>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  if(!isset($_GET['concert'])) {
      die('ERR001 : No concert given');
  }

  ?>

  <button onclick='document.body.className="reserver"'>Reservation</button>
  <button onclick='document.body.className="annuler"'>Annuler une reservation</button>

  <form id="reza" action="reza.php?concert=<?= $_GET['concert'] ?>" method="post">
    <p>Nom : <input type="text" name="nom" value=""></input></p>
    <p class="n">Nombre de places : <input type="number" name="n" value="1"></input>
    <p><button type="submit">Reserver</button></p>
  </form>

  <form id="annuler" action="cancel.php?concert=<?= $_GET['concert'] ?>" method="post">
    <p>Nom : <input type="text" name="nom" value=""></input></p>
    <p><button type="submit">Annuler ma reservation</button></p>
  </form>
</body>
</html>
