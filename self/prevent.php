<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevent Self XSS</title>
  </head>
  <body>
    <h2>Ceritanya ini halaman Pesbuk</h2>
    <script>
      console.clear();
      console.info(`
888    888 8888888888 Y88b   d88P       .d8888b. 88888888888 .d88888b.  8888888b.  888
888    888 888         Y88b d88P       d88P  Y88b    888    d88P" "Y88b 888   Y88b 888
888    888 888          Y88o88P        Y88b.         888    888     888 888    888 888
8888888888 8888888       Y888P          "Y888b.      888    888     888 888   d88P 888
888    888 888            888              "Y88b.    888    888     888 8888888P"  888
888    888 888            888                "888    888    888     888 888        Y8P
888    888 888            888          Y88b  d88P    888    Y88b. .d88P 888         "
888    888 8888888888     888           "Y8888P"     888     "Y88888P"  888        888

8888888b.   .d88888b.  888b    888 d8b 88888888888      8888888b.   .d88888b.              d8888 888b    888 Y88b   d88P 88888888888 888    888 8888888 888b    888  .d8888b.       888    888 8888888888 8888888b.  8888888888 888
888  "Y88b d88P" "Y88b 8888b   888 88P     888          888  "Y88b d88P" "Y88b            d88888 8888b   888  Y88b d88P      888     888    888   888   8888b   888 d88P  Y88b      888    888 888        888   Y88b 888        888
888    888 888     888 88888b  888 8P      888          888    888 888     888           d88P888 88888b  888   Y88o88P       888     888    888   888   88888b  888 888    888      888    888 888        888    888 888        888
888    888 888     888 888Y88b 888 "       888          888    888 888     888          d88P 888 888Y88b 888    Y888P        888     8888888888   888   888Y88b 888 888             8888888888 8888888    888   d88P 8888888    888
888    888 888     888 888 Y88b888         888          888    888 888     888         d88P  888 888 Y88b888     888         888     888    888   888   888 Y88b888 888  88888      888    888 888        8888888P"  888        888
888    888 888     888 888  Y88888         888          888    888 888     888        d88P   888 888  Y88888     888         888     888    888   888   888  Y88888 888    888      888    888 888        888 T88b   888        Y8P
888  .d88P Y88b. .d88P 888   Y8888         888          888  .d88P Y88b. .d88P       d8888888888 888   Y8888     888         888     888    888   888   888   Y8888 Y88b  d88P      888    888 888        888  T88b  888         "
8888888P"   "Y88888P"  888    Y888         888          8888888P"   "Y88888P"       d88P     888 888    Y888     888         888     888    888 8888888 888    Y888  "Y8888P88      888    888 8888888888 888   T88b 8888888888 888

888     888       .d8888b.        d8888 888b    888      888888b.   8888888888      888    888        d8888  .d8888b.  888    d8P  8888888888 8888888b.
888     888      d88P  Y88b      d88888 8888b   888      888  "88b  888             888    888       d88888 d88P  Y88b 888   d8P   888        888  "Y88b
888     888      888    888     d88P888 88888b  888      888  .88P  888             888    888      d88P888 888    888 888  d8P    888        888    888
888     888      888           d88P 888 888Y88b 888      8888888K.  8888888         8888888888     d88P 888 888        888d88K     8888888    888    888
888     888      888          d88P  888 888 Y88b888      888  "Y88b 888             888    888    d88P  888 888        8888888b    888        888    888
888     888      888    888  d88P   888 888  Y88888      888    888 888             888    888   d88P   888 888    888 888  Y88b   888        888    888
Y88b. .d88P      Y88b  d88P d8888888888 888   Y8888      888   d88P 888             888    888  d8888888888 Y88b  d88P 888   Y88b  888        888  .d88P
 "Y88888P"        "Y8888P" d88P     888 888    Y888      8888888P"  8888888888      888    888 d88P     888  "Y8888P"  888    Y88b 8888888888 8888888P"

 .d88888b.  8888888b.        .d8888b.   .d8888b.        d8888 888b     d888 888b     d888 8888888888 8888888b.
d88P" "Y88b 888   Y88b      d88P  Y88b d88P  Y88b      d88888 8888b   d8888 8888b   d8888 888        888  "Y88b
888     888 888    888      Y88b.      888    888     d88P888 88888b.d88888 88888b.d88888 888        888    888
888     888 888   d88P       "Y888b.   888           d88P 888 888Y88888P888 888Y88888P888 8888888    888    888
888     888 8888888P"           "Y88b. 888          d88P  888 888 Y888P 888 888 Y888P 888 888        888    888
888     888 888 T88b              "888 888    888  d88P   888 888  Y8P  888 888  Y8P  888 888        888    888
Y88b. .d88P 888  T88b       Y88b  d88P Y88b  d88P d8888888888 888   "   888 888   "   888 888        888  .d88P
 "Y88888P"  888   T88b       "Y8888P"   "Y8888P" d88P     888 888       888 888       888 8888888888 8888888P"

For More Information Please Visit This Link: https://en.wikipedia.org/wiki/Self-XSS`);
    </script>
  </body>
</html>