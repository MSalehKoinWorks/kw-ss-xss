<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM Based XSS</title>
  </head>
  <body>
    <div id="app"></div>
    <script>
      const urlParams = new URLSearchParams(window.location.search);
      const str = urlParams.get("str") ?? "Welcome!";
      document.getElementById("app").innerHTML = str;
    </script>
  </body>
</html>