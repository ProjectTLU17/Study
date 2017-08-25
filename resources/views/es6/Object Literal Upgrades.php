<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Object Literal Upgrades</title>
  </head>
  <body>
    <script type="text/javascript">
      'use strict';
      const first = 'duy';
      const last = 'luong';
      const age = 2;
      const breed = 'All men must die';
      const dog = {
        first,
        last,
        age,
        breed,
      };
      console.log(dog);

      const modal = {
        create: function (selector) {},
        open(content) {}, // 1 cách khai báo khác
        close: function (goodbye) {},
      };
      function invertColor(color) {
    return '#' + ("000000" + (0xFFFFFF ^ parseInt(color.substring(1),16)).toString(16)).slice(-6);
}
      const key = 'pocketColor';
      const value = '#dbe611';
      const tShirt = {
        [key]: value,
        [`${key}Opposite`]:invertColor(value),
      };

      console.log(tShirt);

      const keys = ['size', 'color', 'weight'];
      const values = ['medium', 'red', 100];
      const shirt = {
        [keys.shift()]: values.shift(),
        [keys.shift()]: values.shift(),
        [keys.shift()]: values.shift(),
      };
      console.log(shirt);
    </script>
  </body>
</html>
