<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Generator for Ajax</title>
  </head>
  <body>
    <script type="text/javascript">
    function ajax(url) {
      fetch(url).then(data => data.json()).then(data => dataGen.next(data));
    }

      function* steps() {
        console.log('fetching');
        const beers = yield ajax('http://api.react.beer/v2/search?q=hops&type=beer');
        console.log(beers);
        console.log('fetching wes');
        const wes = yield ajax('https://api.github.com/users/wesbos');
        console.log(wes);
        console.log('fetching fatJoe');
        const fatJoe = yield ajax('https://api.discogs.com/artists/51988');
        console.log(fatJoe);
      }
      const dataGen = steps();
      dataGen.next();
    </script>
  </body>
</html>
