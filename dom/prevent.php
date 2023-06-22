<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevent DOM Based XSS</title>
  </head>
  <body>
    <div id="app"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
    <script>
      const urlParams = new URLSearchParams(window.location.search);
      const str = urlParams.get("str") ?? "Welcome!";
      document.getElementById("app").innerHTML = _.escape(str);
    </script>
  </body>
</html>