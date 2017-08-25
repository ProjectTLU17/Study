<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Destructuring!</title>
  </head>
  <body>
    <script type="text/javascript">
      const person = {
        first: 'Wes',
        last: 'Bos',
        country: 'Canada',
        city: 'Hamilton',
        twitter: '@wesbos'
        };
      const { first, last, twitter } = person;

      const wes = {
        first: 'Wes',
        last: 'Bos',
        links: {
          social: {
            twitter: 'https://twitter.com/wesbos',
            facebook: 'https://facebook.com/wesbos.developer',
          },
          web: {
            blog: 'https://wesbos.com'
          }
        }
      };

      const {twitter: tweet, facebook: fb} = wes.links.social; // store in values like tweet
      const settings = {width: 300, color: 'black'};
      const { width1, height1 = 100, color, fontSize = 25} = settings;
      //Object Destrucuring with variable renaming & default values
      const { w: width2 = 100, h: height2 = 500 } = { w: 800 };

    </script>
  </body>
</html>
