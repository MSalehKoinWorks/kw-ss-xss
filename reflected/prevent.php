<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevent Reflected XSS</title>
  </head>
  <body>
    Nama kamu: <?= htmlspecialchars($_GET['nama'] ?? "Anonymous", ENT_QUOTES, 'UTF-8'); ?>
  </body>
</html>