<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <script type="text/javascript">
      const inventors = ['Einstein', 'Newton', 'Galileo'];
      const newInventors = ['Musk', 'Jobs'];
      inventors.push(...newInventors);
      console.log(inventors);
      const name = ['Wes', 'Bos'];
      function sayHi(first, last) {
        console.log((`Hey there ${first} ${last}`));
      }
      sayHi(...name);
      /// Destructring
      function convertCurrency (rate, ...amounts){
        return amounts.map(amout => amout * rate);
      };
      convertCurrency (1.54, 10, 23, 52, 1, 56);
      const runner = ['Duy Luong', 123, 5.5, 5, 6, 4, 22];
      const [name2, id, ...runs] = runner;
      console.log(name, id, runs);


    </script>
  </body>
</html>
