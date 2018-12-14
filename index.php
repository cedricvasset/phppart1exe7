<?php
$firstname = 'Cédric';
$lastname = 'VASSET';
$age = 44;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p><?= 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $age . ' ans'; ?></p>
</body>
</html>
