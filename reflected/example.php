<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS</title>
  </head>
  <body>
    Nama kamu: <?= $_GET['nama'] ?? "Anonymous"; ?>
  </body>
</html>